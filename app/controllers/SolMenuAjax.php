<?php

class SolMenuAjax extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ajaxCall();
    }

    public function ajaxCall() {
        //session güvenlik kontrolü
        $form = $this->load->otherClasses('Form');

        if ($_POST) {
            $sonuc = array();
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");

            $form->post("tip", true);
            $tip = $form->values['tip'];

            Switch ($tip) {
                case "profilDuzenle":
                    require "app/otherClasses/class.upload.php";
                    $form->post('ID', true);
                    $form->post("adSoyad", true);
                    $form->post("tel", true);
                    $form->post("email", true);
                    $form->post("newimage", true);
                    $ID = $form->values['ID'];
                    $ad = $form->values['adSoyad'];
                    $tel = $form->values['tel'];
                    $email = $form->values['email'];
                    $newImage = $form->values['newimage'];
                    if ($ad != "") {
                        if ($tel != "") {
                            if ($email != "") {
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                                    $resultSifre = $Panel_Model->sifre($ID);
                                    $realsifre = $resultSifre[0]['uyeSifreReal'];
                                    $sanalSifre = $form->userSifreOlustur($email, $realsifre);
                                    if ($newImage == 0) {//yeni resim eklenmemiş
                                        if ($form->submit()) {
                                            $dataA = array(
                                                'uyeAdSoyad' => $ad,
                                                'uyeEmail' => $email,
                                                'uyeTelefon' => $tel,
                                                'uyeSifre' => $sanalSifre
                                            );
                                        }
                                        $result = $Panel_Model->profilupdate($dataA, $ID);
                                        if ($result) {
                                            $sonuc["image"] = "";
                                            $sonuc["result"] = "Profiliniz güncellenmiştir.";
                                        } else {
                                            $sonuc["hata"] = "Tekrar Deneyiniz";
                                        }
                                    } else {
                                        $realName = $_FILES['file']['name'];
                                        $image = new Upload($_FILES['file']);
                                        if ($image->uploaded) {
                                            // sadece resim formatları yüklensin
                                            $image->allowed = array('image/*');
                                            $image->image_min_height = 100;
                                            $image->image_min_width = 100;
                                            $image->image_max_height = 7000;
                                            $image->image_max_width = 7000;
                                            $image->file_new_name_body = time();
                                            $image->file_name_body_pre = 'profil_';

                                            $image->Process("upload/profil");
                                            if ($image->processed) {
                                                if ($form->submit()) {
                                                    $dataA = array(
                                                        'uyeAdSoyad' => $ad,
                                                        'uyeEmail' => $email,
                                                        'uyeTelefon' => $tel,
                                                        'uyeSifre' => $sanalSifre,
                                                        'uyeProfilImage' => $image->file_dst_name
                                                    );
                                                };
                                                $result = $Panel_Model->profilupdate($dataA, $ID);
                                                if ($result) {
                                                    $sonuc["image"] = $image->file_dst_name;
                                                    $sonuc["result"] = "Profiliniz güncellenmiştir.";
                                                } else {
                                                    $sonuc["hata"] = "Tekrar Deneyiniz";
                                                }
                                            } else {
                                                $sonuc["hata"] = $image->error;
                                            }
                                        } else {
                                            $sonuc["hata"] = $image->error;
                                        }
                                    }
                                } else {
                                    $sonuc["hata"] = "Emailiniz geçerli değil.";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen emailinizi giriniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen telefon numaranızı giriniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen adınızı giriniz.";
                    }
                    break;
                case "sifreKaydet":
                    $form->post('ID', true);
                    $form->post('eskiSifre', true);
                    $form->post('yeniSifre', true);
                    $form->post('yeniSifreTkrr', true);
                    $ID = $form->values['ID'];
                    $eskiSifre = trim($form->values['eskiSifre']);
                    $yeniSifre = trim($form->values['yeniSifre']);
                    $yeniSifreTkrar = trim($form->values['yeniSifreTkrr']);
                    if ($eskiSifre != "") {
                        if ($yeniSifre != "") {
                            if ($yeniSifreTkrar != "") {
                                $resultSifre = $Panel_Model->sifre($ID);
                                $realsifre = $resultSifre[0]['uyeSifreReal'];
                                $realemail = $resultSifre[0]['uyeEmail'];
                                if ($realsifre == $eskiSifre) {
                                    if (strlen($yeniSifre) >= 6) {
                                        if ($yeniSifre == $yeniSifreTkrar) {
                                            $adminSifre = $form->userSifreOlustur($realemail, $yeniSifre);
                                            $data = array(
                                                'uyeSifre' => $adminSifre,
                                                'uyeSifreReal' => $yeniSifre
                                            );
                                            $resultupdate = $Panel_Model->sifreupdate($data, $ID);
                                            if ($resultupdate) {
                                                $sonuc["update"] = "Şifreniz güncellenmiştir!";
                                            } else {
                                                $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz!";
                                            }
                                        } else {
                                            $sonuc["hata"] = "Yeni şifreleriniz uyuşmuyor!";
                                        }
                                    } else {
                                        $sonuc["hata"] = "Şifreniz 6 karekterden fazla olmalı!";
                                    }
                                } else {
                                    $sonuc["hata"] = "Eski şifreniz kayıtlı şifrenizle uyuşmuyor.";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen yeni şifreyi tekrar giriniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen yeni şifrenizi giriniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen eski şifrenizi giriniz.";
                    }
                    break;
                case "mailGonder":
                    $form->post('mailkime', true);
                    $form->post('mailkonu', true);
                    $form->post('mailMesajText', true);
                    $form->post('kadi', true);
                    $mailkime = $form->values['mailkime'];
                    $mailkonu = $form->values['mailkonu'];
                    $mailMesajText = $form->values['mailMesajText'];
                    $kadi = $form->values['kadi'];
                    if ($mailkime != "") {
                        if ($mailkonu != "") {
                            if ($mailMesajText != "") {
                                $resultMail = $form->mailGonder($mailkime, $mailkonu, $kadi, $mailkonu, $mailMesajText);
                                if ($resultMail) {
                                    $sonuc["result"] = "Mailiniz gönderildi, ilginiz için teşekkürler.";
                                } else {
                                    $sonuc["hata"] = "Bir hata oluştu, lütfen tekrar deneyiniz!";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen mail içeriğini giriniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen mail konusunu giriniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen mail gönderilecek kişiyi giriniz.";
                    }
                    break;
                default :
                    header("Location:" . SITE_URL);
                    break;
            }
            echo json_encode($sonuc);
        } else {
            header("Location:" . SITE_URL);
        }
    }

}
?>
                                                                                                     

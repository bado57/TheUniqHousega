<?php

class Profil_Ajax extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ajaxCall();
    }

    public function ajaxCall() {
        //session güvenlik kontrolü
        $form = $this->load->otherClasses('Form');

        if ($_POST && $_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
            $sonuc = array();
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");

            $form->post("tip", true);
            $tip = $form->values['tip'];
            $kid = Session::get("KID");
            Switch ($tip) {
                case "profilDuzen":
                    require "app/otherClasses/class.upload.php";
                    $form->post("ad", true);
                    $form->post("tel", true);
                    $form->post("email", true);
                    $form->post("hidemail", true);
                    $form->post("newimage", true);
                    $ad = $form->values['ad'];
                    $tel = $form->values['tel'];
                    $email = $form->values['email'];
                    $hidemail = $form->values['hidemail'];
                    $newImage = $form->values['newimage'];
                    if ($ad != "") {
                        if ($tel != "") {
                            if ($email != "") {
                                if ($email != $hidemail) {
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                                        $kid = Session::get("KID");
                                        $resultSifre = $Panel_Model->sifre($kid);
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
                                            $result = $Panel_Model->uyeUpdate($dataA, $kid);
                                            if ($result) {
                                                Session::set("KAdSoyad", $ad);
                                                Session::set("KADI", $email);
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
                                                $image->image_max_height = 3000;
                                                $image->image_max_width = 3000;
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
                                                    $result = $Panel_Model->uyeUpdate($dataA, $kid);
                                                    if ($result) {
                                                        Session::set("ProfilResim", $image->file_dst_name);
                                                        Session::set("KAdSoyad", $ad);
                                                        Session::set("KADI", $email);
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
                                    if ($newImage == 0) {//yeni resim eklenmemiş
                                        if ($form->submit()) {
                                            $dataA = array(
                                                'uyeAdSoyad' => $ad,
                                                'uyeTelefon' => $tel
                                            );
                                        }
                                        $result = $Panel_Model->uyeUpdate($dataA, $kid);
                                        if ($result) {
                                            Session::set("KAdSoyad", $ad);
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
                                            $image->image_max_height = 3000;
                                            $image->image_max_width = 3000;
                                            $image->file_new_name_body = time();
                                            $image->file_name_body_pre = 'profil_';

                                            $image->Process("upload/profil");
                                            if ($image->processed) {
                                                if ($form->submit()) {
                                                    $dataA = array(
                                                        'uyeAdSoyad' => $ad,
                                                        'uyeTelefon' => $tel,
                                                        'uyeProfilImage' => $image->file_dst_name
                                                    );
                                                };
                                                $result = $Panel_Model->uyeUpdate($dataA, $kid);
                                                if ($result) {
                                                    Session::set("ProfilResim", $image->file_dst_name);
                                                    Session::set("KAdSoyad", $ad);
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
                    $form->post('eskiSifre', true);
                    $form->post('yeniSifre', true);
                    $form->post('yeniSifreTkrr', true);
                    $eskiSifre = trim($form->values['eskiSifre']);
                    $yeniSifre = trim($form->values['yeniSifre']);
                    $yeniSifreTkrar = trim($form->values['yeniSifreTkrr']);
                    if ($eskiSifre != "") {
                        if ($yeniSifre != "") {
                            if ($yeniSifreTkrar != "") {
                                $kid = Session::get("KID");
                                $resultSifre = $Panel_Model->sifre($kid);
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
                                            $resultupdate = $Panel_Model->sifreUpdate($data, $kid);
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
                                                                                                     

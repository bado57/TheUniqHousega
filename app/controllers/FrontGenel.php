<?php

class FrontGenel extends Controller {

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

            Switch ($tip) {
                case "iletisim":
                    $form->post("adsoyad", true);
                    $form->post("email", true);
                    $form->post("telefon", true);
                    $form->post("mesaj", true);
                    $adsoyad = $form->values['adsoyad'];
                    $email = $form->values['email'];
                    $telefon = $form->values['telefon'];
                    $mesaj = $form->values['mesaj'];
                    if ($adsoyad != "") {
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                            if ($email != "") {
                                if ($telefon != "") {
                                    if ($mesaj != "") {
                                        if ($form->submit()) {
                                            $data = array(
                                                'adSoyad' => $adsoyad,
                                                'email' => $email,
                                                'telefon' => $telefon,
                                                'mesaj' => $mesaj
                                            );
                                        }
                                        $resultIletisim = $Panel_Model->insertIletisim($data);
                                        if ($resultIletisim) {
                                            $sonuc["result"] = "Your message has been sent successfully.";
                                        } else {
                                            $sonuc["hata"] = "Sorry, error occured this time sending your message.";
                                        }
                                    } else {
                                        $sonuc["hata"] = "Please enter your message.";
                                    }
                                } else {
                                    $sonuc["hata"] = "Please enter your phone.";
                                }
                            } else {
                                $sonuc["hata"] = "Please enter your email.";
                            }
                        } else {
                            $sonuc["hata"] = "Please enter a valid email address.";
                        }
                    } else {
                        $sonuc["hata"] = "Please enter your name.";
                    }

                    break;
                case "designform":
                    $form->post("adsoyad", true);
                    $form->post("email", true);
                    $form->post("state", true);
                    $adsoyad = $form->values['adsoyad'];
                    $email = $form->values['email'];
                    $state = $form->values['state'];
                    if ($adsoyad != "") {
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                            if ($email != "") {
                                if ($state != "") {
                                    if ($form->submit()) {
                                        $data = array(
                                            'adSoyad' => $adsoyad,
                                            'email' => $email,
                                            'state' => $state
                                        );
                                    }
                                    $result = $Panel_Model->insertDesignForm($data);
                                    if ($result) {
                                        $sonuc["result"] = "Your message has been sent successfully.";
                                    } else {
                                        $sonuc["hata"] = "Sorry, error occured this time sending your message.";
                                    }
                                } else {
                                    $sonuc["hata"] = "Please enter your state.";
                                }
                            } else {
                                $sonuc["hata"] = "Please enter your email.";
                            }
                        } else {
                            $sonuc["hata"] = "Please enter a valid email address.";
                        }
                    } else {
                        $sonuc["hata"] = "Please enter your name.";
                    }
                    break;
                case "sifreHatirlat":
                    $form->post("email", true);
                    $form->post("randomsayi", true);
                    $email = $form->values['email'];
                    $randomsayi = $form->values['randomsayi'];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                        $kullaniciliste = $Panel_Model->emailDbKontrol($email);
                        if ($kullaniciliste) {
                            if ($randomsayi != '') {
                                if ($randomsayi == Session::get("guvenlikKod")) {
                                    foreach ($kullaniciliste as $kullanicilistee) {
                                        $id = $kullanicilistee['ID'];
                                        $ad = $kullanicilistee['adSoyad'];
                                        $sifre = $kullanicilistee['reallsifre'];
                                    }
                                    $setTitle = "Şifre Hatırlatma";
                                    $subject = "Model Üretim - Şifre Hatırlatma";
                                    $body = 'Merhaba ' . $ad . '!<br/>Şifreniz=' . $sifre . ' Geri dönmek için aşağıdaki linke tıklayınız.'
                                            . '<br/><br/><a href="https://www.modeluretim.com/Home/login">Model Üretim - Giriş Yap</a>';
                                    $resultMail = $form->sifreHatirlatMail($email, $setTitle, $ad, $sifre, $subject, $body);
                                    if ($resultMail == 1) {
                                        $sonuc["result"] = "Mailiniz gönderilmiştir. Lütfen $email adresini kontrol ediniz";
                                    } else {
                                        $sonuc["hata"] = "Bir hata oluştu! Tekrar deneyiniz";
                                    }
                                } else {
                                    $sonuc["hata"] = "Toplama işlemi sonucu yanlış! Tekrar deneyiniz.";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen toplama işlemi sonucunu yazınız.";
                            }
                        } else {
                            $sonuc["hata"] = "Bu mail adresi kayıtlı değildir! Tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen geçerli bir email adresi giriniz.";
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


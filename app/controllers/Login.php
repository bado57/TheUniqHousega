<?php

class Login extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->login();
    }

    //daha önce login oldu ise
    function login() {
        if (Session::get("BLogin") == true) {
            header("Location:" . SITE_URL . "/Admin");
        } else {
            if ($_POST) {
                $form = $this->load->otherClasses('Form');
                //model bağlantısı
                $Panel_Model = $this->load->model("Panel_Model");
                $form->post('email', true);
                $form->post('password', true);
                $email = $form->values['email'];
                $sifre = $form->values['password'];
                if ($email != "") {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if ($sifre != "") {
                            $sifreolustur = $form->userSifreOlustur($email, $sifre);
                            $result = $Panel_Model->girisYap($email, $sifreolustur);
                            if ($result) {
                                if ($result[0]["uyeTip"] == 0) {//Yönetici
                                    Session::set("BLogin", true);
                                    Session::set("ProfilResim", $result[0]["uyeProfilImage"]);
                                    Session::set("KID", $result[0]["uyeID"]);
                                    Session::set("KAdSoyad", $result[0]["uyeAdSoyad"]);
                                    Session::set("KADI", $result[0]["uyeEmail"]);
                                    Session::set("Tip", 0);
                                    Session::set("TipText", "Admin");
                                } else {//Bayi
                                    Session::set("BLogin", true);
                                    Session::set("ProfilResim", $result[0]["uyeProfilImage"]);
                                    Session::set("KID", $result[0]["uyeID"]);
                                    Session::set("KAdSoyad", $result[0]["uyeAdSoyad"]);
                                    Session::set("KADI", $result[0]["uyeEmail"]);
                                    Session::set("Tip", 1);
                                    Session::set("TipText", "User");
                                }
                                header("Location:" . SITE_URL . "/Admin");
                            } else {
                                $kullaniciStatus[0]['Result'] = "User information is incorrect please try again.";
                                $this->load->view("Template_FrontEnd/login", $kullaniciStatus);
                            }
                        } else {
                            $kullaniciStatus[0]['Result'] = "Please enter your password.";
                            $this->load->view("Template_FrontEnd/login", $kullaniciStatus);
                        }
                    } else {
                        $kullaniciStatus[0]['Result'] = "Email format is incorrect.";
                        $this->load->view("Template_FrontEnd/login", $kullaniciStatus);
                    }
                } else {
                    $kullaniciStatus[0]['Result'] = "Please enter your username.";
                    $this->load->view("Template_FrontEnd/login", $kullaniciStatus);
                }
            } else {
                //$kullaniciStatus[0]['Result'] = "Something went wrong. Please try again.";
                $this->load->view("Template_FrontEnd/login", $kullaniciStatus);
            }
        }
    }

    public function logout() {
        session::destroy();
        header("Location:" . SITE_URL . "/Login");
    }

}
?>



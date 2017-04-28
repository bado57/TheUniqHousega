<?php

class Admin extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {
        if (Session::get("BLogin") == true) {
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $kid = Session::get("KID");
            $list = array();
            if (Session::get("Tip") == 0) {//Yonetici
                $hListe = $Panel_Model->bloglistelecount();
                $list[1] = $hListe[0]['COUNT(*)'];

                $bListe = $Panel_Model->designformlistelecount();
                $list[2] = $bListe[0]['COUNT(*)'];

                $sListe = $Panel_Model->iletisimlistelecount();
                $list[3] = $sListe[0]['COUNT(*)'];

                $resultB = $Panel_Model->bloglimitlistele();
                $s = 0;
                foreach ($resultB as $resultBb) {
                    $list[4][$s]['Baslik'] = $resultBb['baslik'];
                    $resultBb['icerik'] = preg_replace("/<img[^>]+\>/i", "", $resultBb['icerik']);
                    $list[4][$s]['Icerik'] = mb_substr(strip_tags($resultBb['icerik']), 0, 110, "utf-8") . " ...";
                    $s++;
                }
                $this->load->view("Template_BackEnd/header");
                $this->load->view("Template_BackEnd/left");
                $this->load->view("Template_BackEnd/home", $list);
                $this->load->view("Template_BackEnd/footer");
            } else if (Session::get("Tip") == 1) {//Bayi
                $this->load->view("Template_BackEnd/header");
                $this->load->view("Template_BackEnd/left");
                $this->load->view("Template_BackEnd/homemudur", $list);
                $this->load->view("Template_BackEnd/footer");
            }
        } else {
            header("Location:" . SITE_URL);
        }
    }

    public function blog() {
        if (Session::get("BLogin") == true && Session::get("Tip") == 0) {
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $kid = Session::get("KID");
            $list = array();
            $liste = $Panel_Model->bloglistele();
            if ($liste) {
                $b = 0;
                foreach ($liste as $listee) {
                    $list[0][$b]['ID'] = $listee['ID'];
                    $list[0][$b]['Baslik'] = $listee['baslik'];
                    $explodetar = explode(" ", $listee['tarih']);
                    $explodebas = explode("-", $explodetar[0]);
                    $list[0][$b]['Tarih'] = $explodebas[2] . '/' . $explodebas[1] . '/' . $explodebas[0] . " - " . $explodetar[1];
                    if ($listee['aktiflik'] != 0) {
                        $list[0][$b]['Durum'] = "Aktif";
                    } else {
                        $list[0][$b]['Durum'] = "Pasif";
                    }
                    $b++;
                }
            }

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/blog", $list);
            $this->load->view("Template_BackEnd/footer");
        } else {
            header("Location:" . SITE_URL);
        }
    }

    public function iletisim() {
        if (Session::get("BLogin") == true && Session::get("Tip") == 0) {
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $kid = Session::get("KID");
            $list = array();
            $liste = $Panel_Model->iletisimlistele();
            if ($liste) {
                $b = 0;
                foreach ($liste as $listee) {
                    $list[0][$b]['ID'] = $listee['ID'];
                    $list[0][$b]['AdSoyad'] = $listee['adSoyad'];
                    $list[0][$b]['Email'] = $listee['email'];
                    $list[0][$b]['Tel'] = $listee['telefon'];
                    $explodetar = explode(" ", $listee['tarih']);
                    $explodebas = explode("-", $explodetar[0]);
                    $list[0][$b]['Tarih'] = $explodebas[2] . '/' . $explodebas[1] . '/' . $explodebas[0] . " - " . $explodetar[1];
                    $b++;
                }
            }

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/iletisim", $list);
            $this->load->view("Template_BackEnd/footer");
        } else {
            header("Location:" . SITE_URL);
        }
    }

    public function designform() {
        if (Session::get("BLogin") == true && Session::get("Tip") == 0) {
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $kid = Session::get("KID");
            $list = array();
            $liste = $Panel_Model->designformlistele();
            if ($liste) {
                $b = 0;
                foreach ($liste as $listee) {
                    $list[0][$b]['ID'] = $listee['ID'];
                    $list[0][$b]['AdSoyad'] = $listee['adSoyad'];
                    $list[0][$b]['Email'] = $listee['email'];
                    $list[0][$b]['State'] = $listee['state'];
                    $explodetar = explode(" ", $listee['tarih']);
                    $explodebas = explode("-", $explodetar[0]);
                    $list[0][$b]['Tarih'] = $explodebas[2] . '/' . $explodebas[1] . '/' . $explodebas[0] . " - " . $explodetar[1];
                    $b++;
                }
            }

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/designform", $list);
            $this->load->view("Template_BackEnd/footer");
        } else {
            header("Location:" . SITE_URL);
        }
    }

    public function profil() {
        if (Session::get("BLogin") == true) {
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $kid = Session::get("KID");
            $list = array();
            $liste = $Panel_Model->profillistele($kid);
            if ($liste) {
                foreach ($liste as $listee) {
                    $list[0]['ID'] = $listee['uyeID'];
                    $list[0]['Ad'] = $listee['uyeAdSoyad'];
                    $list[0]['Email'] = $listee['uyeEmail'];
                    $list[0]['Tel'] = $listee['uyeTelefon'];
                    $list[0]['Image'] = $listee['uyeProfilImage'];
                }
            }

            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/profil", $list);
            $this->load->view("Template_BackEnd/footer");
        } else {
            header("Location:" . SITE_URL);
        }
    }

}
?>


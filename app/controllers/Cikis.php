<?php

class Cikis extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->cikis();
    }

    //daha önce login oldu ise
    function cikis() {
        unset($_SESSION['TipText']);
        unset($_SESSION['Tip']);
        unset($_SESSION['KADI']);
        unset($_SESSION['KAdSoyad']);
        unset($_SESSION['KID']);
        unset($_SESSION['ProfilResim']);
        unset($_SESSION['BLogin']);
        Session::destroy();
        header("Location:" . SITE_URL);
    }

}
?>



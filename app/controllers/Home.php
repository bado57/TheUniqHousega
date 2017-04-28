<?php

class Home extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //Session::destroy();
        $this->home();
    }

    public function home() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/home");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function welcome() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/welcome");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function whytheuniqhouse() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/whytheuniqhouse");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function whatwedo() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/whatwedo");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function presidentsmessage() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/presidentsmessage");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function ourshowroom() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/ourshowroom");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function ourteam() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/ourteam");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function ourfocus() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/ourfocus");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function uniqvision() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/uniqvision");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function uniqpurposeandapproach() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/uniqpurposeandapproach");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function uniqvaluesandprinciples() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/uniqvaluesandprinciples");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function uniqdesigns() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/uniqdesigns");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function uniqquarentee() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/uniqquarentee");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function uniqenvironment() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/uniqenvironment");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function specialkitchen() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/specialkitchen");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function specialbathroom() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/specialbathroom");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function otherproduct() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/otherproduct");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function blog($sayfaid) {
        $ayarray = ["", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        $Panel_Model = $this->load->model("Panel_Model");
        $list = array();
        if (!$sayfaid) {
            $sayfaid = 1;
        }
        $toplamVeri = $Panel_Model->bloglistelecount();
        $limit = 6;
        $sayfaSayisi = ceil($toplamVeri[0]["COUNT(*)"] / $limit);
        if ($sayfaid > $sayfaSayisi) {
            $sayfaid = 1;
        }
        $goster = $sayfaid * $limit - $limit;
        $gorunenSayfa = 6;
        $resultH = $Panel_Model->frontbloglist($goster, $limit);
        $h = 0;
        foreach ($resultH as $resultHh) {
            $list[0][$h]['ID'] = $resultHh['ID'];
            if (strlen($resultHh['baslik']) <= 53) {
                $list[0][$h]['Baslik'] = $resultHh['baslik'];
            } else {
                $list[0][$h]['Baslik'] = mb_substr($resultHh['baslik'], 0, 50, "utf-8") . " ...";
            }
            $resultHh['icerik'] = preg_replace("/<img[^>]+\>/i", "", $resultHh['icerik']);
            $list[0][$h]['Icerik'] = mb_substr(strip_tags($resultHh['icerik']), 0, 110, "utf-8") . " ...";
            $list[0][$h]['Path'] = $resultHh['anaresim'];
            $exp = explode(" ", $resultHh['tarih']);
            $expdate = explode("-", $exp[0]);
            $list[0][$h]["Ay"] = $ayarray[(int) ($expdate[1])];
            $list[0][$h]["Gun"] = $expdate[2];
            $h++;
        }
        $list[1] = $sayfaid;
        $list[2] = $sayfaSayisi;
        $list[3] = $gorunenSayfa;

        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/blog", $list);
        $this->load->view("Template_FrontEnd/footer");
    }

    public function blogdetail($id) {
        $ayarray = ["", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        $Panel_Model = $this->load->model("Panel_Model");
        $list = $Panel_Model->blogdetay($id);
        foreach ($list as $listt) {
            $list[0]['ID'] = $listt['ID'];
            $list[0]['Baslik'] = $listt['baslik'];
            $list[0]['Icerik'] = $listt['icerik'];
            $exp = explode(" ", $listt['tarih']);
            $expdate = explode("-", $exp[0]);
            $list[0]["Tarih"] = $ayarray[(int) ($expdate[1])] . " " . $expdate[2] . "," . $expdate[0];
        }
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/blogdetail", $list);
        $this->load->view("Template_FrontEnd/footer");
    }

    public function contact() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/contact");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function gallery() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/gallery");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function videos() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/videos");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function brochures() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/brochures");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function social() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/social");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function kitchenform() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/kitchenform");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function bathroomform() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/bathroomform");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function page404() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/pagenotfound");
        $this->load->view("Template_FrontEnd/footer");
    }

}
?>


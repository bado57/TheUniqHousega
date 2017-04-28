<?php

class Panel_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $sql = "SELECT * FROM table";
        return $this->db->select($sql);
    }

    public function insert($data) {
        return ($this->db->insert("table", $data));
    }

    public function update($data, $gelenid) {
        return ($this->db->update("table", $data, "table_id=$gelenid"));
    }

    public function delete($gelenid) {
        return ($this->db->delete("table", "table_id=$gelenid"));
    }
    
    public function bloglistelecount() {
        $sql = "SELECT COUNT(*) FROM  blog";
        return $this->db->select($sql);
    }

    public function designformlistelecount() {
        $sql = "SELECT COUNT(*) FROM  designform";
        return $this->db->select($sql);
    }
    
    public function iletisimlistelecount() {
        $sql = "SELECT COUNT(*) FROM  iletisim";
        return $this->db->select($sql);
    }

    public function girisYap($email, $sifre) {
        $sql = "SELECT * FROM uyeler WHERE uyeEmail='$email' AND uyeSifre='$sifre'";
        return $this->db->select($sql);
    }

    public function bloglistele() {
        $sql = "SELECT ID,baslik,aktiflik,tarih FROM blog ORDER BY tarih DESC";
        return $this->db->select($sql);
    }

    public function blogSil($ID) {
        return ($this->db->delete("blog", "ID=$ID"));
    }

    public function iletisimSil($ID) {
        return ($this->db->delete("iletisim", "ID=$ID"));
    }

    public function designformSil($ID) {
        return ($this->db->delete("designform", "ID=$ID"));
    }

    public function blogDetayListele($ID) {
        $sql = "SELECT * FROM blog WHERE ID= $ID";
        return $this->db->select($sql);
    }

    public function iletisimDetayListele($ID) {
        $sql = "SELECT * FROM iletisim WHERE ID= $ID";
        return $this->db->select($sql);
    }

    public function designFormDetayListele($ID) {
        $sql = "SELECT * FROM designform WHERE ID= $ID";
        return $this->db->select($sql);
    }

    public function blogKaydet($data) {
        return ($this->db->insert("blog", $data));
    }

    public function bannerKaydet($data) {
        return ($this->db->insert("banner", $data));
    }

    public function blogupdate($data, $ID) {
        return ($this->db->update("blog", $data, "ID=$ID"));
    }

    public function bannerupdate($data, $ID) {
        return ($this->db->update("banner", $data, "ID=$ID"));
    }

    public function emailGenelDbKontrol($email) {
        $sql = "SELECT uyeID FROM uyeler WHERE uyeEmail='$email'";
        return $this->db->select($sql);
    }

    public function iletisimlistele() {
        $sql = "SELECT ID,adSoyad,email,telefon,tarih FROM iletisim";
        return $this->db->select($sql);
    }

    public function designformlistele() {
        $sql = "SELECT ID,adSoyad,email,state,tarih FROM designform";
        return $this->db->select($sql);
    }

    public function uyeKaydet($data) {
        return ($this->db->insert("uyeler", $data));
    }

    public function uyeUpdate($data, $ID) {
        return ($this->db->update("uyeler", $data, "uyeID=$ID"));
    }

    public function sifreUpdate($data, $ID) {
        return ($this->db->update("uyeler", $data, "uyeID=$ID"));
    }

    public function bloglimitlistele() {
        $sql = "SELECT baslik,icerik FROM blog ORDER BY ID DESC LIMIT 10";
        return $this->db->select($sql);
    }

    public function profillistele($ID) {
        $sql = "SELECT uyeID,uyeAdSoyad,uyeEmail,uyeTelefon,uyeProfilImage FROM uyeler WHERE uyeID=$ID";
        return $this->db->select($sql);
    }

    public function frontbloglist($goster, $limit) {
        $sql = "SELECT ID,baslik,icerik,anaresim,tarih FROM blog WHERE aktiflik=1 ORDER BY tarih DESC LIMIT $goster,$limit";
        return $this->db->select($sql);
    }

    public function blogdetay($id) {
        $sql = "SELECT baslik,icerik,tarih FROM blog WHERE ID=$id AND aktiflik=1";
        return $this->db->select($sql);
    }

    public function insertIletisim($data) {
        return ($this->db->insert("iletisim", $data));
    }

    public function insertDesignForm($data) {
        return ($this->db->insert("designform", $data));
    }

    public function sifre($id) {
        $sql = "SELECT uyeEmail,uyeSifreReal FROM uyeler WHERE uyeID=$id";
        return $this->db->select($sql);
    }

}

?>

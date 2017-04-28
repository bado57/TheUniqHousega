<?php

class Admin_Ajax extends Controller {

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
                case "blogDuzenle":
                    $form->post("ID", true);
                    $ID = $form->values['ID'];
                    if ($ID != "") {
                        $liste = $Panel_Model->blogDetayListele($ID);
                        if ($liste) {
                            $b = 0;
                            foreach ($liste as $listee) {
                                $list[0][0]['ID'] = $listee['ID'];
                                $list[0][0]['Baslik'] = $listee['baslik'];
                                $list[0][0]['Icerik'] = $listee['icerik'];
                                $list[0][0]['Resim'] = $listee['anaresim'];
                                $list[0][0]['Durum'] = $listee['aktiflik'];
                                $b++;
                            }
                            $sonuc["result"] = $list;
                        } else {
                            $sonuc["hata"] = "Bir hata oluştu lütfen tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu lütfen tekrar deneyiniz.";
                    }
                    break;
                case "blogDuzenleme":
                    require "app/otherClasses/class.upload.php";
                    $form->post("ID", true);
                    $form->post("baslik", true);
                    $form->post("aktiflik", true);
                    $form->post('newimage', true);
                    $ID = $form->values['ID'];
                    $baslik = $form->values['baslik'];
                    $icerik = $_POST["icerik"];
                    $aktiflik = $form->values['aktiflik'];
                    $newimage = $form->values['newimage'];
                    if ($baslik != "") {
                        if ($icerik != "") {
                            if ($aktiflik != -1) {
                                if ($newimage != 0) {
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
                                        $image->file_name_body_pre = 'theuniqhouse_';
                                        /*
                                         * xampp-htdocs içerisinde SimpleImage text position için yeterlidir.
                                         */
                                        $image->Process("upload/blog");
                                        if ($image->processed) {
                                            $data = array(
                                                'baslik' => $baslik,
                                                'icerik' => $icerik,
                                                'anaresim' => $image->file_dst_name,
                                                'aktiflik' => $aktiflik
                                            );
                                            $update = $Panel_Model->blogupdate($data, $ID);
                                            if ($update) {
                                                date_default_timezone_set('America/New York');
                                                $sonuc["result"] = "Blog içeriğiniz düzenlenmiştir.";
                                            } else {
                                                $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                                            }
                                        } else {
                                            $sonuc["hata"] = $image->error;
                                        }
                                    } else {
                                        $sonuc["hata"] = $image->error;
                                    }
                                } else {
                                    $data = array(
                                        'baslik' => $baslik,
                                        'icerik' => $icerik,
                                        'aktiflik' => $aktiflik
                                    );
                                    $update = $Panel_Model->blogupdate($data, $ID);
                                    if ($update) {
                                        date_default_timezone_set('America/New York');
                                        $sonuc["result"] = "Blog içeriğiniz düzenlenmiştir.";
                                    } else {
                                        $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                                    }
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen aktiflik durumunu seçiniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen içeriğinizi giriniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen başlık giriniz.";
                    }
                    break;
                case "blogEkle":
                    require "app/otherClasses/class.upload.php";
                    $form->post("baslik", true);
                    $form->post("aktiflik", true);
                    $form->post('newimage', true);
                    $baslik = $form->values['baslik'];
                    $icerik = $_POST["icerik"];
                    $aktiflik = $form->values['aktiflik'];
                    $newimage = $form->values['newimage'];
                    if ($baslik != "") {
                        if ($icerik != "") {
                            if ($aktiflik != -1) {
                                if ($newimage != 0) {
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
                                        $image->file_name_body_pre = 'theuniqhouse_';
                                        /*
                                         * xampp-htdocs içerisinde SimpleImage text position için yeterlidir.
                                         */
                                        $image->Process("upload/blog");
                                        if ($image->processed) {
                                            $data = array(
                                                'baslik' => $baslik,
                                                'icerik' => $icerik,
                                                'anaresim' => $image->file_dst_name,
                                                'aktiflik' => $aktiflik
                                            );
                                            $insert = $Panel_Model->blogKaydet($data);
                                            if ($insert) {
                                                date_default_timezone_set('America/New York');
                                                $sonuc["data"] = $insert;
                                                $sonuc["tarih"] = date('d/m/Y - H:i:s');
                                                $sonuc["result"] = "Yeni blog içeriği eklenmiştir.";
                                            } else {
                                                $delete = $Panel_Model->blogSil($insert);
                                                $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                                            }
                                        } else {
                                            $sonuc["hata"] = $image->error;
                                        }
                                    } else {
                                        $sonuc["hata"] = $image->error;
                                    }
                                } else {
                                    $sonuc["hata"] = "Lütfen anasayfa resmini seçiniz.";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen aktiflik durumunu seçiniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen içeriğinizi giriniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen başlık giriniz.";
                    }
                    break;
                case "blogSil":
                    $form->post("ID", true);
                    $ID = $form->values['ID'];
                    if ($ID) {
                        $delete = $Panel_Model->blogSil($ID);
                        if ($delete) {
                            $sonuc["result"] = "Blog içeriğiniz silinmiştir.";
                        } else {
                            $delete = $Panel_Model->blogSil($ID);
                            $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                    }
                    break;
                case "iletisimSil":
                    $form->post("ID", true);
                    $ID = $form->values['ID'];
                    if ($ID) {
                        $delete = $Panel_Model->iletisimSil($ID);
                        if ($delete) {
                            $sonuc["result"] = "Mailiniz silinmiştir.";
                        } else {
                            $delete = $Panel_Model->iletisimSil($ID);
                            $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                    }
                    break;
                case "iletisimDuzenle":
                    $form->post("ID", true);
                    $ID = $form->values['ID'];
                    if ($ID != "") {
                        $liste = $Panel_Model->iletisimDetayListele($ID);
                        if ($liste) {
                            foreach ($liste as $listee) {
                                $list[0]['AdSoyad'] = $listee['adSoyad'];
                                $list[0]['Email'] = $listee['email'];
                                $list[0]['Tel'] = $listee['telefon'];
                                $list[0]['Mesaj'] = $listee['mesaj'];
                            }
                            $sonuc["result"] = $list;
                        } else {
                            $sonuc["hata"] = "Bir hata oluştu lütfen tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu lütfen tekrar deneyiniz.";
                    }
                    break;
                case "designformSil":
                    $form->post("ID", true);
                    $ID = $form->values['ID'];
                    if ($ID) {
                        $delete = $Panel_Model->designformSil($ID);
                        if ($delete) {
                            $sonuc["result"] = "Design Form içeriği silinmiştir.";
                        } else {
                            $delete = $Panel_Model->designformSil($ID);
                            $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu tekrar deneyiniz.";
                    }
                    break;
                case "designformDuzenle":
                    $form->post("ID", true);
                    $ID = $form->values['ID'];
                    if ($ID != "") {
                        $liste = $Panel_Model->designFormDetayListele($ID);
                        if ($liste) {
                            foreach ($liste as $listee) {
                                $list[0]['AdSoyad'] = $listee['adSoyad'];
                                $list[0]['Email'] = $listee['email'];
                                $list[0]['State'] = $listee['state'];
                            }
                            $sonuc["result"] = $list;
                        } else {
                            $sonuc["hata"] = "Bir hata oluştu lütfen tekrar deneyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu lütfen tekrar deneyiniz.";
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
                                                                                                     

<?php

class Form {

    public $currentValue;
    public $values = array();
    public $errors = array();
    public $count = array();

    public function __construct() {
        
    }

    //post metodu almak için
    public function post($key, $st = false) {
        if ($st) {
            $this->values[$key] = htmlspecialchars(addslashes(trim($_POST[$key])));
            $this->currentValue = $key;
            return $this;
        } else {
            return addslashes(trim($_POST[$key]));
        }
    }

    //get metodundan verileri almak için
    public function get($key, $st = false) {
        if ($st) {
            $this->values[$key] = htmlspecialchars(addslashes(trim($_GET[$key])));
            $this->currentValue = $key;
            return $this;
        } else {
            return addslashes(trim($_GET[$key]));
        }
    }

    //dizi post etme burada özel karekterleri silme gibi durumlar sıkıntı çıkardığı için üsttekinden faklı
    public function dizipost($key, $st = false) {
        if ($st) {
            $this->values[$key] = $_POST[$key];
            $this->currentValue = $key;
            return $this;
        } else {
            return $_POST[$key];
        }
    }

    //dizi sayısı
    public function count($array) {
        $deger = count($array);
        return $deger;
    }

    //en son kullanılan değerin boş mu dolu mu olduğuna bakacak
    public function isEmpty() {
        if (empty($this->values[$this->currentValue])) {
            //boşsa
            $this->errors[$this->currentValue]["empty"] = "Lütfen bu alanı boş Bırakmayınız";
        }
        return $this;
    }

    //kullanıcı 5 ile 10 karekter arası girip girmediği gibi
    public function length($min = 0, $max) {
        if (strlen($this->values[$this->currentValue]) < $min OR strlen($this->values[$this->currentValue]) > $max) {
            $this->errors[$this->currentValue]["length"] = "Lütfen " . $min . "  ve  " . $max . "  değerleri arasında bir yazı giriniz.";
        }
        return $this;
    }

    //mail formatında olup olmadığı gösterilmektedir
    public function isMail() {
        if (!filter_var($this->values[$this->currentValue], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$this->currentValue]['mail'] = "Lütfen geçerli bir email adresi giriniz.";
        }
        return $this;
    }

    //onaylayıp hata kontrolü
    public function submit() {
        if (empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }

    //tarih düzenleme, tarih formatı YYYY/MM/DD şeklinde functiona gelmektedir
    function tarihduzenle() {
        if ($this->values[$this->currentValue]) {
            $tarihim = explode('/', $this->values[$this->currentValue]);
            $son = $tarihim[2] . '-' . $tarihim[1] . '-' . $tarihim[0];
        } else {
            $son = "";
        }
        return $son;
    }

    //substr.İstenilen yerden sonrasını kelimede alma
    function substrEnd($statement, $value) {
        $result = substr($statement, $value);
        return $result;
    }

    //substr.İstenilen karekterler arasını alır
    function substrInterval($statement, $start, $end) {
        $result = substr($statement, $start, $end);
        return $result;
    }

    //uzunluğu kısaltma fonksiyonu
    function kisalt($paremetre, $uzunluk = 50) {

        if (strlen($paremetre) > $uzunluk) {
            //bazı sunucularda mb çalışmıyor onun yerine mb silip direkt substr yazılması gerekir
            $paremetre = mb_substr($paremetre, 0, $uzunluk, "UTF8") . "..";
        }
        return $paremetre;
    }

    //başka sayfaya yönlendirme fonksiyonu
    function yonlendir($paremetre, $time = 0) {
        if ($time == 0) {
            header("Location:{$paremetre}");
        } else {
            header("Refresh: {$time}; url={$paremetre}");
        }
    }

    //diziyi istenilen karekter göre bölme
    function implode($divide, $array) {
        if ($this->count($array) > 0) {
            $implodeArray = implode($divide, $array);
            return $implodeArray;
        } else {
            return $array;
        }
    }

    //gelen değeri  şifreleme
    function md5($value) {
        return md5($value);
    }

    //gelen değeri  şifreleme
    function security($value) {
        return md5(sha1(md5($value)));
    }

    //smtp ile tekli mail controlü yapma
    function mailControl1($validemail) {
        require_once('smtp_validateEmail.class.php');
        // sorgu atacak email. //noreply@floracicek.com
        $sender = 'noreply@kinderlive.com';

        $SMTP_Validator = new SMTP_validateEmail();
        $SMTP_Validator->debug = true;
        // valdiation
        $results = $SMTP_Validator->validate(array($validemail), $sender);
        // sonuç
        //echo $email . ' is ' . ($results[$email] ? 'valid' : 'invalid') . "\n";
        // send email? 
        if ($results[$validemail]) {
            return 1;
        } else {
            return 0;
        }
    }

    function benzersiz_Sayi($uzunluk) {
        $karakterler = array();
        $karakterler = array_merge(range(0, 9));
        srand((float) microtime() * 100000);
        shuffle($karakterler);
        $sonuc = '';
        for ($i = 0; $i < $uzunluk; $i++) {
            $sonuc .= $karakterler[$i];
        }
        unset($karakterler);
        return $sonuc;
    }

    function sifreOlustur() {
        $userSifre = $this->benzersiz_Sayi(11);
        return $userSifre;
    }

    function kadiOlustur() {
        $userKadi = $this->benzersiz_Sayi(8);
        return $userKadi;
    }

    function myip() {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function userSifreOlustur($loginKadi, $loginSifre) {
        $loginDeger = "theuniqhouse";
        $sifreilkeleman = $loginDeger . $loginKadi;
        $sifreilkeleman1 = md5($sifreilkeleman);
        $sifreikincieleman = md5($loginSifre);
        $sifresonuc = $sifreilkeleman1 . $sifreikincieleman;
        return $sifresonuc;
    }

    function mailGonder($email, $setTitle, $isim, $subject, $body) {
        require "Plugins/phpmailler/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 2;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPAuth = true;         // Enable SMTP authentication

        $mail->Host = 'www.kinderlive.com';  // Specify main and backup SMTP servers
        $mail->Username = 'noreply@kinderlive.com';                 // SMTP username
        $mail->Password = 'andromeda478965';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to(ssl ise port 465)

        $mail->setFrom('noreply@kinderlive.com', $setTitle);
        $mail->addAddress($email, $isim);     // Add a recipient
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body = $body;

        if (!$mail->send()) {
            return 0;
        } else {
            return 1;
        }
    }

    //smtp ile mail gönderme işlemi
    function sifreHatirlatMail($email, $setTitle, $isim, $subject, $body) {
        require "Plugins/PHPMailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 2;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPAuth = true;         // Enable SMTP authentication

        $mail->Host = 'www.kinderlive.com';  // Specify main and backup SMTP servers
        $mail->Username = 'noreply@kinderlive.com';                 // SMTP username
        $mail->Password = 'andromeda478965';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to(ssl ise port 465)

        $mail->setFrom('noreply@kinderlive.com', $setTitle);
        $mail->addAddress($email, $isim);     // Add a recipient
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body = $body;

        if (!$mail->send()) {
            return 0;
        } else {
            return 1;
        }
    }

}

?>
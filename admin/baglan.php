<?php
@session_start();
@ob_start();
try {
    $db = new PDO("mysql:host=localhost;dbname=pet;charset=utf8;","root","");
    
} catch (PDOException $hata) {
    print_r($hata->getMessage());
}

$ayarlar = $db->prepare("SELECT * FROM ayarlar");
$ayarlar->execute();
$arow = $ayarlar->fetch(PDO::FETCH_OBJ);

if(isset($_SESSION['oturum'])){
    $oturum = $db->prepare('SELECT * FROM admin WHERE id=:i');
    $oturum->execute([':i'=>$_SESSION['id']]);
    if($oturum->rowCount()){
        $uyerow = $oturum->fetch(PDO::FETCH_ASSOC);
        $uid = $uyerow['id'];
        $ukadi = $uyerow['kadi'];
    }
}
?>
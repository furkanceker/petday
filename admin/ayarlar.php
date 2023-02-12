<?php 
define("guvenlik",true);
require_once 'header.php'; 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Site Ayarları</h1>
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Site Ayarlarınızı Değiştirin</h6>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_SESSION['oturum'])){
                                if(isset($_POST['guncelle'])){
                                    $siteadi = strip_tags(trim($_POST['baslik']));
                                    $telefon = strip_tags(trim($_POST['telefon']));
                                    $email = strip_tags(trim($_POST['mail']));
                                    $adres = strip_tags(trim($_POST['adres']));
                                    $twitter = strip_tags(trim($_POST['twitter']));
                                    $insta = strip_tags(trim($_POST['instagram']));
                                    $face = strip_tags(trim($_POST['facebook']));
                                    if(!$siteadi || !$telefon || !$email || !$adres || !$twitter || !$face || !$insta){
                                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Boş Alanları Doldurun!</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }else{
                                        $guncelle = $db->prepare("UPDATE ayarlar SET 
                                        site_adi=:s,
                                        telefon=:t,
                                        email=:e,
                                        adres=:a,
                                        twitter=:twit,
                                        instagram=:insta,
                                        facebook=:face
                                        
                                        ");
                                        $guncelle->execute([
                                            ':s'=>$siteadi,
                                            ':t'=>$telefon,
                                            ':e'=>$email,
                                            ':a'=>$adres,
                                            ':twit'=>$twitter,
                                            ':insta'=>$insta,
                                            ':face'=>$face
                                        ]);
                                        if($guncelle->rowCount()){
                                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Ayarlar Güncellendi!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                            header('refresh:1;url=ayarlar.php');
                                        }else{
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Güncelleme Başarısız!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>';
                                        }
                                    }
                                }
                            }

                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="baslik">Site Adı</label>
                                <input type="text" class="form-control" name="baslik" placeholder="Site Adı" value="<?= $arow->site_adi ?>">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="baslik">Telefon</label>
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon" value="<?= $arow->telefon ?>">
                                    </div>
                                    <div class="col-4">
                                        <label for="baslik">Mail</label>
                                        <input type="text" class="form-control" name="mail" placeholder="Mail Adresi" value="<?= $arow->email ?>">
                                    </div>
                                    <div class="col-4">
                                        <label for="baslik">Adres</label>
                                        <input type="text" class="form-control" name="adres" placeholder="Lokasyon" value="<?= $arow->adres ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="baslik">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter Linki" value="<?= $arow->twitter ?>">
                                    </div>
                                    <div class="col-4">
                                        <label for="baslik">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="Instagram Linki" value="<?= $arow->instagram ?>">
                                    </div>
                                    <div class="col-4">
                                        <label for="baslik">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Facebook Linki" value="<?= $arow->facebook ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="guncelle">Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
<?php require_once 'footer.php'; ?>
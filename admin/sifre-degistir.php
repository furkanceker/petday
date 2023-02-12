<?php 
define("guvenlik",true);
require_once 'header.php'; 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Şifre Değiştir</h1>
            <div class="col-lg-4">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Şifrenizi Değiştirin</h6>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_SESSION['oturum'])){
                            if(isset($_POST['gonder'])){
                                $eski = strip_tags(trim($_POST['old']));
                                $eskisifreli = sha1(md5($eski));
                                $yeni = strip_tags(trim($_POST['new']));
                                $yenitekrar = strip_tags(trim($_POST['new1']));
                                $sifreli = sha1(md5($yeni));

                                if(!$eski || !$yeni || !$yenitekrar){
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Boş Alanları Doldurun!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                                }else{
                                    if($yeni == $yenitekrar){
                                        $varmi = $db->prepare("SELECT * FROM admin WHERE id=:id AND sifre=:sifre");
                                        $varmi->execute([':id'=>$uid,':sifre'=>$eskisifreli]);
                                        if($varmi->rowCount()){
                                            $guncelle = $db->prepare("UPDATE admin SET sifre=:s WHERE id=:i");
                                            $guncelle->execute([':s'=>$sifreli,':i'=>$uid]);
                                            if($guncelle->rowCount()){
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Şifre Değiştirildi!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }else{
                                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Hata Oluştu!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                        }else{
                                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Mevcut Şifreniz Yanlış!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                        }
                                    }else{
                                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Şifreler Eşleşmiyor!</strong>
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
                                <label for="old">Mevcut Şifre</label>
                                <input type="password" class="form-control" name="old" id="old" placeholder="Mevcut Şifre">
                            </div>
                            <div class="form-group">
                                <label for="new">Yeni Şifre</label>
                                <input type="password" class="form-control" name="new" id="new" placeholder="Yeni Şifre">
                            </div>
                            <div class="form-group">
                                <label for="new1">Yeni Şifre Tekrar</label>
                                <input type="password" class="form-control" name="new1" id="new1" placeholder="Yeni Şifre Tekrar">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="gonder">Şifre Değiştir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
<?php require_once 'footer.php'; ?>
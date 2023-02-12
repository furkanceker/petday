<?php 
define("guvenlik",true);
require_once 'header.php'; 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Yönetici Ekle</h1>
            <!-- Basic Card Example -->
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Yeni Yönetici Ekleyin</h6>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_SESSION['oturum'])){

                                if(isset($_POST['gonder'])){
                                    $kadi = strip_tags(trim($_POST['kadi']));
                                    $sifre = strip_tags(trim($_POST['pass']));
                                    $sifreli = sha1(md5($sifre));

                                    if(!$kadi || !$sifre){
                                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Boş Alanları Doldurun!</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }else{
                                        $varmi = $db->prepare("SELECT * FROM admin WHERE kadi=:k");
                                        $varmi->execute([':k'=>$kadi]);
                                        if($varmi->rowCount()){
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Bu Yönetici Zaten Kayıtlı!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                                        }else{
                                            $ekle = $db->prepare("INSERT INTO admin SET kadi=:k, sifre=:s");
                                            $ekle->execute([':k'=>$kadi,':s'=>$sifreli]);
                                            if($ekle->rowCount()){
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Yönetici Eklendi!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }else{
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Yönetici Eklenirken Hata Oluştu!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                        }
                                    }
                                }
                            }

                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="kadi">Kullanıcı Adı</label>
                                <input type="text" class="form-control" name="kadi" id="kadi" placeholder="Kullanıcı Adı">
                            </div>
                            <div class="form-group">
                                <label for="pass">Şifre</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Şifre">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="gonder">Yönetici Ekle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
<?php require_once 'footer.php'; ?>
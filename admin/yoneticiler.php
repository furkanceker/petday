<?php 
define("guvenlik",true);
require_once 'header.php'; 

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Yönetici Listesi</h1>
            <div class="col-lg-3">
                    <?php
                        if(isset($_SESSION['oturum'])){
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                if(!$id){
                                    header('location:yoneticiler.php');
                                }else{
                                    if($id != $uid){
                                        $varmi = $db->prepare("SELECT * FROM admin WHERE id=:i");
                                        $varmi->execute([':i'=>$id]);
                                        if($varmi->rowCount()){
                                            $sil = $db->prepare("DELETE FROM admin WHERE id=:id");
                                            $sil->execute(array(':id'=>$id));
                                            if($sil->rowCount()){
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Yönetici Silindi!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }else{
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Hata Oluştu!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                        }else{
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Yönetici Bulunamadı!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                        }
                                    }else{
                                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Kendinizi Silemezsiniz!</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                                    }
                                }
                            }
                        }
                    ?>
                        <div class="card shadow mb-4">
                            <?php
                                $yoneticiler = $db->prepare("SELECT * FROM admin");
                                $yoneticiler->execute();
                                $toplam = $yoneticiler->rowCount();
                            ?>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Yöneticiler (<?=$toplam?>)</h6>
                            </div>
                            <div class="card-body">
                                <?php
                                if($yoneticiler->rowCount()) { ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Yönetici Adı</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $say = 1;
                                                foreach($yoneticiler as $row){
                                                
                                                    ?>
                                                        <tr>
                                                            <td><?=$say?></td>
                                                            <td><?=$row['kadi']?></td>
                                                            <td><a href="yoneticiler.php?id=<?=$row['id']?>"><i class="fas fa-trash text-danger"></i></a></td>
                                                        </tr>
                                                    <?php
                                                $say++;    
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
        </div>
    <!-- /.container-fluid -->
<?php require_once 'footer.php'; ?>
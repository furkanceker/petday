<?php 
define("guvenlik",true);
require_once 'header.php'; 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">İletişim</h1>
            <div class="col-6">
            <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            if(isset($_SESSION['oturum'])){
                                if(!$id){
                                    header('location:iletisim.php');
                                }else{
                                        $varmi = $db->prepare("SELECT * FROM iletisim WHERE id=:i");
                                        $varmi->execute([':i'=>$id]);
                                        if($varmi->rowCount()){
                                            $sil = $db->prepare("DELETE FROM iletisim WHERE id=:id");
                                            $sil->execute(array(':id'=>$id));
                                            if($sil->rowCount()){
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Mesaj Silindi!</strong>
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
                                                <strong>Mesaj Bulunamadı!</strong>
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
                                $iletisim = $db->prepare("SELECT * FROM iletisim");
                                $iletisim->execute();
                                $toplam = $iletisim->rowCount();
                            ?>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Destek Mesajları (<?=$toplam?>)</h6>
                            </div>
                            <div class="card-body">
                                <?php

                                if($iletisim->rowCount()) { ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>İsim</th>
                                                <th>Mail</th>
                                                <th>Konu</th>
                                                <th>Mesaj</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $say = 1;
                                                foreach($iletisim as $row){
                                                
                                                    ?>
                                                        <tr>
                                                            <td><?=$say?></td>
                                                            <td><?=$row['isim']?></td>
                                                            <td><?=$row['mail']?></td>
                                                            <td><?=$row['konu']?></td>
                                                            <td><?=$row['mesaj']?></td>
                                                            <td><a href="iletisim.php?id=<?=$row['id']?>"><i class="fas fa-trash text-danger"></i></a></td>
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
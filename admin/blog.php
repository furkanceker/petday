<?php 
define("guvenlik",true);
require_once 'header.php'; 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Bloglar</h1>
            <div class="row">
                <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Yeni Blog</h6>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_SESSION['oturum'])){

                                if(isset($_POST['gonder'])){
                                    
                                }
                            }

                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Blog Adı</label>
                                <input type="text" class="form-control" name="baslik"  placeholder="Blog Adı">
                            </div>
                            <div class="form-group">
                                <label>Blog Metni</label>
                                <textarea name="metin" class="form-control" placeholder="Blog Metni" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Yazar</label>
                                <input type="text" class="form-control" name="yazar"  placeholder="Yazar">
                            </div>
                            <div class="form-group">
                                <label>Resim</label>
                                <input type="file" name="resim" class="form-control p-1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="gonder">Blog Ekle</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-6">
                    <div class="card shadow mb-4">
                        <?php
                            $bloglar = $db->prepare("SELECT * FROM bloglar");
                            $bloglar->execute();
                            $toplam = $bloglar->rowCount();
                        ?>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bloglar (<?=$toplam?>)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Blog Adı</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $say = 1;
                                        foreach($bloglar as $row){
                                                           
                                            ?>
                                            <tr>
                                                <td><?=$say?></td>
                                                <td><?=$row['baslik']?></td>
                                                <td><a href="blog.php?id=<?=$row['id']?>"><i class="fas fa-trash text-danger"></i></a></td>
                                            </tr>
                                        <?php $say++;  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
<?php require_once 'footer.php'; ?>
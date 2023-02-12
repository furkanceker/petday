<?php 
require_once 'baglan.php';
if(isset($_SESSION['oturum'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel Giriş</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tekrar Hoşgeldin!</h1>
                                    </div>
                                    <?php
                                    if(isset($_POST['giris'])){
                                        $kadi = strip_tags(trim($_POST['kadi']));
                                        $sifre = strip_tags(trim($_POST['sifre']));
                                        $sifreli = sha1(md5($sifre));

                                        if(!$kadi || !$sifre){
                                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Boş Alanları Doldurun!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                                        }else{
                                                $giris = $db->prepare("SELECT * FROM admin WHERE kadi=:k AND sifre=:s");
                                                $giris->execute([':k'=>$kadi,':s'=>$sifreli]);
                                                if($giris->rowCount()){
                                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong>Giriş Başarılı!</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                                $row = $giris->fetch(PDO::FETCH_ASSOC);
                                                $_SESSION['oturum'] = true;
                                                $_SESSION['id'] = $row['id'];
                                                $_SESSION['kadi'] = $row['kadi'];
                                                header('refresh:1;url=index.php');
                                            }else{
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Kullanıcı Adı veya Şifre Yanlış!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                        }
                                    }

                                    ?>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Kullanıcı Adı.." name="kadi">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Şifre.." name="sifre">
                                        </div>
                                        <button type="submit" name="giris" class="btn btn-success btn-user btn-block">Giriş Yap</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
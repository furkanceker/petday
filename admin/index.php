<?php
define("guvenlik",true);
require_once 'header.php'; 
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Panel</h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Gelen Kutusu</div>
                                                <?php
                                                    $iletisim = $db->prepare("SELECT * FROM iletisim");
                                                    $iletisim->execute();
                                                    $toplam = $iletisim->rowCount();
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $toplam ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                YÖNETİCİLER</div>
                                                <?php
                                                    $yoneticiler = $db->prepare("SELECT * FROM admin");
                                                    $yoneticiler->execute();
                                                    $toplam2 = $yoneticiler->rowCount();
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $toplam2 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Buttons</h1>

    <div class="row">

        <div class="col-lg-6">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Circle Buttons</h6>
                </div>
                <div class="card-body">
                    <p>Use Font Awesome Icons (included with this theme package) along with the circle
                        buttons as shown in the examples below!</p>
                    <!-- Circle Buttons (Default) -->
                    <div class="mb-2">
                        <code>.btn-circle</code>
                    </div>
                    <a href="#" class="btn btn-primary btn-circle">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-circle">
                        <i class="fas fa-check"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-circle">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                    <!-- Circle Buttons (Small) -->
                    <div class="mt-4 mb-2">
                        <code>.btn-circle .btn-sm</code>
                    </div>
                    <a href="#" class="btn btn-primary btn-circle btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                    <!-- Circle Buttons (Large) -->
                    <div class="mt-4 mb-2">
                        <code>.btn-circle .btn-lg</code>
                    </div>
                    <a href="#" class="btn btn-primary btn-circle btn-lg">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-circle btn-lg">
                        <i class="fas fa-check"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-circle btn-lg">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-circle btn-lg">
                        <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle btn-lg">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>

            <!-- Brand Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Brand Buttons</h6>
                </div>
                <div class="card-body">
                    <p>Google and Facebook buttons are available featuring each company's respective
                        brand color. They are used on the user login and registration pages.</p>
                    <p>You can create more custom buttons by adding a new color variable in the
                        <code>_variables.scss</code> file and then using the Bootstrap button variant
                        mixin to create a new style, as demonstrated in the <code>_buttons.scss</code>
                        file.</p>
                    <a href="#" class="btn btn-google btn-block"><i class="fab fa-google fa-fw"></i>
                        .btn-google</a>
                    <a href="#" class="btn btn-facebook btn-block"><i
                            class="fab fa-facebook-f fa-fw"></i> .btn-facebook</a>

                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
                </div>
                <div class="card-body">
                    <p>Works with any button colors, just use the <code>.btn-icon-split</code> class and
                        the markup in the examples below. The examples below also use the
                        <code>.text-white-50</code> helper class on the icons for additional styling,
                        but it is not required.</p>
                    <a href="#" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Split Button Primary</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Split Button Success</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Split Button Info</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Split Button Warning</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Split Button Danger</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Split Button Secondary</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-light btn-icon-split">
                        <span class="icon text-gray-600">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Split Button Light</span>
                    </a>
                    <div class="mb-4"></div>
                    <p>Also works with small and large button classes!</p>
                    <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Split Button Small</span>
                    </a>
                    <div class="my-2"></div>
                    <a href="#" class="btn btn-primary btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Split Button Large</span>
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Border Utilities</h1>
                    <p class="mb-4">Bootstrap's default utility classes can be found on the official <a
                            href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities
                        below were created to extend this theme past the default utility classes built into Bootstrap's
                        framework.</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Border Left Utilities -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3 border-left-primary">
                                <div class="card-body">
                                    .border-left-primary
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-left-secondary">
                                <div class="card-body">
                                    .border-left-secondary
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-left-success">
                                <div class="card-body">
                                    .border-left-success
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-left-info">
                                <div class="card-body">
                                    .border-left-info
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-left-warning">
                                <div class="card-body">
                                    .border-left-warning
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-left-danger">
                                <div class="card-body">
                                    .border-left-danger
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-left-dark">
                                <div class="card-body">
                                    .border-left-dark
                                </div>
                            </div>

                        </div>

                        <!-- Border Bottom Utilities -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3 border-bottom-primary">
                                <div class="card-body">
                                    .border-bottom-primary
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-secondary">
                                <div class="card-body">
                                    .border-bottom-secondary
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-success">
                                <div class="card-body">
                                    .border-bottom-success
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-info">
                                <div class="card-body">
                                    .border-bottom-info
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-warning">
                                <div class="card-body">
                                    .border-bottom-warning
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-danger">
                                <div class="card-body">
                                    .border-bottom-danger
                                </div>
                            </div>

                            <div class="card mb-4 py-3 border-bottom-dark">
                                <div class="card-body">
                                    .border-bottom-dark
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

<?php require_once 'footer.php'; ?>
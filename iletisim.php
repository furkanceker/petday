<?php require_once 'header.php'; ?>
<!-- Full-Wrapper-Start -->
<main class="full-wrapper" id="home-section">
        <!--Header-Area-Start-->
        <header class="site__header section__overlay section__bg" style="background-image: url('images/site-header-2.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section__heading mb-0">
                            <h2 class="section__heading-title anim_top">İletişim</h2>
                            <h5 class="section__heading-sup-title anim_top"><a href="index.php">Ana Sayfa</a> <span>/</span> <span class="current">İletişim</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__shape">
                <svg class="svg_element">
                    <use xlink:href="#svg__element-1" />
                </svg>
            </div>
        </header>
        <!--Header-Area-End-->
        <!--Contact-Area-Start-->
        <section class="contact__area section__padding">
            <div class="container">
                <div class="row items_space section__padding-bottom">
                    <div class="col-lg-4">
                        <div class="info__box anim_top">
                            <div class="info__box-icon">
                                <svg class="svg_element color__primary">
                                    <use xlink:href="#svg__element-10" />
                                </svg>
                                <i class="icon-phone"></i>
                            </div>
                            <h5 class="info__box-title">Telefon</h5>
                            <div class="info__box-desc">
                                <p>Bizi Arayın <br> 123456789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info__box anim_top">
                            <div class="info__box-icon">
                                <svg class="svg_element color__secondary">
                                    <use xlink:href="#svg__element-10" />
                                </svg>
                                <i class="icon-envelope"></i>
                            </div>
                            <h5 class="info__box-title">Email</h5>
                            <div class="info__box-desc">
                                <p>Bize Mail Atın <br>example@mail.con</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info__box anim_top">
                            <div class="info__box-icon">
                                <svg class="svg_element color__tertiary">
                                    <use xlink:href="#svg__element-10" />
                                </svg>
                                <i class="icon-map-marker"></i>
                            </div>
                            <h5 class="info__box-title">Lokasyon</h5>
                            <div class="info__box-desc">
                                <p>Efeler,Aydın<br> Türkiye</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact__form-row no-gutters anim_top">
                    <div class="col-lg-6">
                        <div class="map__frame">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12602.116673880768!2d27.830314!3d37.847907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c09c5d37b6abd7b!2sPetDay%20Pet%20Kuaf%C3%B6r!5e0!3m2!1str!2str!4v1675983614127!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="contact__form" id="contact-form" action="" method="post">
                            <h3 class="contact__form-title">İletişime Geç</h3>
                            <div class="row">
                                <div class="col-sm-6 form-box">
                                    <input type="text" name="isim" class="input_control" required placeholder="İsim*">
                                </div>
                                <div class="col-sm-6 form-box">
                                    <input type="email" name="email" class="input_control" required placeholder="Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-box">
                                    <input type="text" name="konu" class="input_control" required placeholder="Konu*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-box">
                                    <textarea name="form-message" id="mesaj" class="input_control" required placeholder="Mesajınız*"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="primary__button">Mesaj Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact-Area-End-->
<?php require_once 'footer.php'; ?>
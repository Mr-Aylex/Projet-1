<?php session_start() ?>
<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p>Bienvenu sur le site du lycée privée et UFA Robert Schuman</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <div class="header_right d-flex">
                                <div class="short_contact_list">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-envelope"></i>administration@lyceerobertschuman.com</a></li>
                                            <li><a href="#"> <i class="fa fa-phone"></i>01 48 37 74 26</a></li>
                                        </ul>
                                    </div>
                                    <div class="social_media_links">
                                       <!--<a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>-->
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <!--<a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>-->
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img style="margin-left:-130px; margin-top:-9px;" src="img/logo.png" width="100px" height="60px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Menu</a></li>
                                        <li><a href="#">Vie <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                    <li><a href="case_details.php">Projet</a></li>
                                                    <li><a href="about.php">Voyage</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.php">Entreprise</a></li>
                                        <li><a href="study.php">Formation</a></li>
                                        <li><a href="#">Informations <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.php"> Documents </a></li>
                                                <li><a href="single-blog.php">Date</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                              <?php if ($_SESSION==true) {?>
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="../page/formulaire_connexion.php">Se connecter</a>
                                </div>
                              <?php }
                                      else{?>
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="../page/se_deconnecter.php">Se deconnecter</a>
                                </div>
                              <?php } ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

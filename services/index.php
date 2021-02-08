<?php
$ds = DIRECTORY_SEPARATOR;
if (file_exists('../theme/header.php')) {
    include_once '../theme/header.php';
} else {
    include($_SERVER['DOCUMENT_ROOT'] . 'theme' . $ds . 'header.php');
}
?>

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="/assets/images/photos/parallax-counter.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Services</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->


    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom">
        <div class="container">
            <div class="row">
                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="/services/software-solutions" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h5 class="features-title">Software Solutions</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->

                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="/services/fathi-tech-academy" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h5 class="features-title">Fathi-Tech Academy</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->

                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="/services/cloud-solutions" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <h5 class="features-title">Cloud Solutions</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->

                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="/services/language-services" class="features-small-item">
                        <div class="icon">
                            <i class="fa fa-language"></i>
                        </div>
                        <h5 class="features-title">Language Services</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </a>
                </div>
                <!-- ***** Features Small Item End ***** -->
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>


<!-- ***** Counter Parallax Start ***** -->
<section class="parallax-counter" id="counter">
    <div class="parallax-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>96</strong>
                        <span>Projects<br>Completed</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>190</strong>
                        <span>Happy<br>Customer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>12</strong>
                        <span>Experienced<br>Staff</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>46</strong>
                        <span>Ongoing<br>Project</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Counter Parallax End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="/assets/images/photos/features/blue-2.png" class="img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">Design & Development</h2>
                </div>
                <div class="left-text">
                    <p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus metus ullamcorper vel.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home active" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Web Design</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Mobile App Design</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Android Development</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>iOS Development</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Back-End</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Front-End</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>E-Commerce</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Graphic Design</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<?php
if (file_exists('../theme/footer.php')) {
    include_once '../theme/footer.php';
} else {
    include($_SERVER['DOCUMENT_ROOT'] . 'theme' . $ds . 'footer.php');
}
?>
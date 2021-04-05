<?php
$ds = DIRECTORY_SEPARATOR;
$title = 'Home';
$page = $_SERVER['REQUEST_URI'];

switch ($page) {
    case '/about':
        $title = 'About US';
        break;
    case '/services/':
        $title = 'Services';
        break;
    case '/team':
        $title = 'Team';
        break;
    case '/contact':
        $title = 'Contact US';
        break;
    case '/services/cloud-solutions':
        $title = 'Cloud Solutions';
        break;
    case '/services/language-services':
        $title = 'Language Services';
        break;
    case '/services/professional-courses':
        $title = 'Professional Courses';
        break;
    case '/services/software-solutions':
        $title = 'Software Solutions';
        break;
    default:
        $page = 'Untitled';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> > Fathi-Tech Solutions | PVT LTD</title>
    <meta name="description" content="Fathi-Tech Solutions" />
    <meta name="keywords" content="fathi-tech, it solutions, website, web applications, mobile app, android, ios" />
    <meta name="author" content="Syd Fathi Al Hussaini" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon/favicon.ico" />

    <!-- Bootstrap & Plugins CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="/assets/css/blue5e1f.css?v=2" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div id="loader" class="spinner">
            <div id="shadow"></div>
            <div id="box"></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="/assets/images/logo.png" height="50" alt="LOGO" />
                        </a>
                        <!-- ***** Logo End ***** -->


                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="active"><a href="/#welcome">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/team">Our Team</a></li>
                            <li><a href="/contact">Contact</a></li>

                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
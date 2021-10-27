<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISTEM INFORMASI WISATA PROVINSI DKI JAKARTA</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Multi Profile
        http://www.templatemo.com/preview/templatemo_457_multi_profile
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="templatemo-container">
        <!-- header -->
        <div class="header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 site-name-container">
                        <img src="img/logo.png" alt="Site logo" class="site-logo">
                        <h1 class="site-name">JAKARTA</h1>
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="/index" class="active">Home</a></li>
                                <li><a href="/wisata" >Wisata</a></li>
                                <li><a href="/profile">Profile</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- header image -->
        <div class="header-img"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <center>
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-15">
                        <h2 class="welcome-title">SELAMAT DATANG DI SISTEM INFORMASI WISATA PROVINSI DKI JAKARTA</h2>
                    </div>
                </div>
            </div>
        </div>
        </center>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">DKI JAKARTA</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Daerah Khusus Ibukota Jakarta</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 class="section-title-2 text-uppercase font-weight-100"><b>Daerah Khusus Ibukota Jakarta</b></h3>
                        <p>Daerah Khusus Ibukota Jakarta (disingkat DKI Jakarta) adalah ibu kota negara dan kota terbesar di Indonesia. 
                            Jakarta memiliki luas sekitar 664,01 km² (lautan: 6.977,5 km²), dengan penduduk berjumlah 11.100.929 jiwa (2020).
                            Wilayah metropolitan Jakarta (Jabodetabek) yang berpenduduk sekitar 28 juta jiwa. Terdapat beberapa
                            tempat wisata yang populer diantaranya Monumen Nasional, Taman Mini Indonesia Indah, Kota Tua, 
                            Dunia Fantasi, dan Sea World Ancol</p>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="carousel-container">
                            <div class="crsl-items" data-navigation="navbtns">
                                <div class="crsl-wrap">
                                    <figure class="crsl-item">
                                        <img src="img/1.jpg" alt="Image" class="img-responsive img-thumbnail">
                                    </figure>
                                    <figure class="crsl-item">
                                        <img src="img/2.jpg" alt="Image" class="img-responsive img-thumbnail">
                                    </figure>
                                    <figure class="crsl-item">
                                        <img src="img/3.jpg" alt="Image" class="img-responsive img-thumbnail">
                                    </figure>
                                    <figure class="crsl-item">
                                        <img src="img/3.5.jpg" alt="Image" class="img-responsive img-thumbnail">
                                    </figure>
                                    <figure class="crsl-item">
                                        <img src="img/3.6.jpg" alt="Image" class="img-responsive img-thumbnail">
                                    </figure>
                                </div>
                            </div>
                        </div>   <!-- carousel-container -->
                        <div id="navbtns" class="crsl-nav">
                            <a href="#" class="previous">
                                <img src="img/carousel-arrow-previous.png" alt="previous">
                            </a>
                            <a href="#" class="next">
                                <img src="img/carousel-arrow-next.png" alt="next">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end section content -->
            </div>
        </section>
        <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
        <!-- end main content -->
        <footer class="text-center">
            <p class="small copyright-text">Copyright &copy; 2021 Mertha Indri</p>
        </footer>

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/responsiveCarousel.min.js"></script> <!-- Carousel -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>

            $(function() {
                $('.crsl-items').carousel({
                    visible: 1,
                    itemMinWidth: 320,
                    itemEqualHeight: 320,
                    itemMargin: 9,
                });
                $(".crsl-nav a[href=#]").on('click', function(e) {
                    e.preventDefault();
                });
            });

        </script>
    </body>
</html>

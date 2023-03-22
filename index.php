<?php 
session_start(); 
if(!$_SESSION['email']){ 
    header("Location: php/login.php"); 
    exit; 
} 

?> 


<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BarberShop & Hair Salon HTML Template">
    <meta name="author" content="">
    <title>Berbernica "Brica"</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/elegant-font-icons.css">

    <link rel="stylesheet" href="css/elegant-line-icons.css">

    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/barber-icons.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/venobox/venobox.css">

    <link rel="stylesheet" href="css/nice-select.css">

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/slicknav.min.css">

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div id='preloader'>
        <div class='loader'>
            <img src="img/loading.gif" width="80" alt="">
        </div>
    </div>

    <!--Navbar Start-->
    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar ">
                <a href="#" class="navbar-brand"><img src="img/b11.png" class="logo" alt="Barbershop"></a>
                <div class="d-flex menu-wrap align-items-center">
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li><a data-scroll class="nav-link active" href="index.html">Početna<span
                                        class="sr-only"></span></a>
                               <!--- <ul>
                                    <li><a href="index-2.html">Home Default</a></li>
                                    <li><a href="index-3.html">Home Modern</a></li>
                                    <li><a href="index-4.html">Home Classic</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#about" class="nav-item nav-link active">O nama</a>
                               <!--- <ul>
                                    <li><a href="about-us.html">O nama</a></li>
                                    <li><a href="about-company.html">About Company</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#service" class="nav-item nav-link active">Usluge</a>
                           
                                <!-- <ul>
                                    <li><a href="services.html">Services 01</a></li>
                                    <li><a href="services-2.html">Services 02</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="appointment.html">Appointment</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="pricing.html">Our Pricing</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#contact" class="nav-item nav-link">Kontakt</a></li>
                            <li><a href="#prices" class="nav-item nav-link">Cenovnik</a>
                            <li><a href="php/loginn.php" class="nav-item nav-link"> <i class="fa-solid fa-user"></i></a>
                        </ul>
                    </div>
                   <!--- <div class="header-btn">
                        <a href="#" class="menu-btn">Make Appointment</a>
                    </div> -->
                </div>
            </nav>
        </div>
    </header>

       <!--Navbar End-->


    <section class="slider_section" >
        <ul id="main-slider" class="owl-carousel main_slider">
            <li class="main_slide d-flex align-items-center" style="background-image: url(img/slide-1.jpg);">
                <div class="container py-5">
                    <div class="slider_content">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <h1>Being a barber is about <br>taking care of the people.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                            time and flawless look.</p>
                        <a href="zakazi.html" class="default_btn">Rezerviši!</a>
                    </div>
                </div>
            </li>
            <li class="main_slide d-flex align-items-center" style="background-image: url(img/slide-2.jpg);">
                <div class="container">
                    <div class="slider_content">
                        <h3>Classic Hair Style & Shaves.</h3>
                        <h1>Our hair styles<br>enhances your smile.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                            time and flawless look.</p>
                            <a href="zakazi.html" class="default_btn">Rezerviši!</a>
                    </div>
                </div>
            </li>
            <li class="main_slide d-flex align-items-center" style="background-image: url(img/slide-3.jpg);">
                <div class="container">
                    <div class="slider_content">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <h1>Where mens want <br>to look there very best.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                            time and flawless look.</p>
                            <a href="zakazi.html" class="default_btn">Rezerviši!</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!--Start section About-->
    <section id="about" class="about_section bd-bottom padding">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content align-center">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">O NAMA</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms">Berbernica "Brica"<br>Since 2005</h2>
                        <img class="wow fadeInUp" data-wow-delay="500ms" src="img/about-logo.png" alt="logo" id="brkovi">
                        <p class="wow fadeInUp" data-wow-delay="600ms">Barber is a person whose occupation is mainly to
                            cut dress groom style and shave men's and boys' hair. A barber's place of work is known as a
                            "barbershop" or a "barber's". Barbershops are also places of social interaction and public
                            discourse. In some instances, barbershops are also public forums.</p>
                       <!--- <a href="#" class="default_btn wow fadeInUp" data-wow-delay="600ms">More About Us</a> -->
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="about_img">
                        <img src="img/about-1.jpg" alt="idea-images" class="about_img_1 wow fadeInLeft"
                            data-wow-delay="200ms">
                        <img src="img/about-2.jpg" alt="idea-images" class="about_img_2 wow fadeInRight"
                            data-wow-delay="400ms">
                        <img src="img/about-3.jpg" alt="idea-images" class="about_img_3 wow fadeInLeft"
                            data-wow-delay="600ms">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End section About-->


    <!--Start Service section-->
    <section class="service_section bg-grey padding" id="service">
        <div class="container py-5">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
             
                <h2>USLUGE</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Haircut Styles</h3>
                        <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Beard Triming</h3>
                        <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Smooth Shave</h3>
                        <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Face Masking</h3>
                        <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--End Service section-->

  <!--Start Conctact section-->
    <section class="book_section padding" id="contact"> 
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="https://html.dynamiclayers.net/dl/barbershop/appointment.php" method="post"
                        id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2>Pisite nam!</h2>
                           <!--- <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave
                                men's and boys hair.</p> -->
                        </div>
                        <div class="col-lg-8">
                            <form action="php/admin/formsend.php" method="post" class="forma">
                                <div class="row">
                                 <div class="col-md-6">
                                   <i class="fas fa-user-check" ></i>
                                   <label for="ime" id="ime" > Ime</label><br>
                                   <input  name="ime" onkeypress="returns /[a-z]/i.test(event.key)" required type="text"  minlength="2" class="form-control" placeholder="Ime" >
                                 </div>
                                 <div class="col-md-6">
                                   <i class="fas fa-user-check" ></i>
                                   <label for="prezime"  id="prezime"> Prezime</label>
                                   <input name="prezime" onkeypress="returns /[a-z]/i.test(event.key)" required minlength="2"   type="text" class="form-control" placeholder="Prezime" >
                                 </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-6">
                                  <br>
                                  <i class="fas fa-phone" ></i>
                                  <label for="email" class="form-label" id="telefon" > Telefon</label><br>
                                  <input name="phone" type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{3}/[0-9]{3}-[0-9]{4}" placeholder="064/357-4879"> 
                                </div>
                                <div class="col-md-6">
                                  <br>
                                  <i class="fas fa-envelope" ></i>
                                  <label for="email" class="form-label" id="email" > E-mail adresa</label>
                                   <input type="email" name="email" required class="form-control"    placeholder="mikamikic@gmail.com">
                                </div>
                                
                                </div>
                                <br>
                                
                                <div class="mb-3">
                                <i class="fas fa-comment-alt" ></i>
                                <label for="poruka" class="form-label"  id="poruka"> Poruka</label>
                                <textarea name="poruka" class="form-control" id="poruka"  rows="3"  required placeholder="Unesite Vašu poruku"></textarea>
                                </div>
                                <button type="submit" name="kontaktdugme" class="default_btn" >Pošalji</button>
                                </form> 
                        </div>
                    
                       <!--- <div class=" row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Ime"
                                    required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_surname" name="app_surname" class="form-control" placeholder="Prezime"
                                    required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="email" id="app_email" name="app_email" class="form-control"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_phone" name="app_phone" class="form-control"
                                    placeholder="066/552-6544" required>
                            </div>
                          <div class="col-md-6 padding-10">
                                <input type="text" id="app_free_time" name="app_free_time" class="form-control"
                                    placeholder="Your Free Time" required>
                            </div> 
                        </div>
                       <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="app_services" name="app_services">
                                    <option>Services</option>
                                    <option>Hair Styling</option>
                                    <option>Shaving</option>
                                    <option>Face Mask</option>
                                    <option>Hair Wash</option>
                                    <option>Beard Triming</option>
                                </select>
                            </div>
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="app_barbers" name="app_barbers">
                                    <option>Choose Barbers</option>
                                    <option>Michel Brown</option>
                                    <option>Jonathan Smith</option>
                                    <option>Jack Tosan</option>
                                    <option>Martin Lane</option>
                                </select>
                            </div>
                        </div> 
                        <button id="app_submit" class="default_btn" type="submit">Posalji</button>
                        <div id="msg-status" class="alert" role="alert"></div>
                    </form>
                -->
                </div>
            </div>
        </div>
    </section>

     <!--Start Conctact section-->


    <section id="team" class="team_section bd-bottom padding">
        <div class="container py-5">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Our Barbers</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row">
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="team_member">
                        <img src="img/team-1.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Kyle Frederick</h3>
                            <p>WEB DESIGNER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="team_member">
                        <img src="img/team-2.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>José Carpio</h3>
                            <p>WORDPRESS DEVELOPER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="team_member">
                        <img src="img/team-3.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Michel Ibáñez</h3>
                            <p>ONLINE MARKETER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="team_member">
                        <img src="img/team-4.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Adam Castellon</h3>
                            <p>JAVA SPECIALIST</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

   <!--- <section id="reviews" class="testimonial_section padding">
        <div class="container">
            <ul id="testimonial_carousel" class="testimonial_items owl-carousel">
                <li class="testimonial_item">
                    <p>"There are design companies, and then there are user experience design interface design<br>
                        professional. By far one of the worlds best known brands."</p>
                    <h4 class="text-white">Anita Tran, IT Solutions.</h4>
                </li>
                <li class="testimonial_item">
                    <p>"There are design companies, and then there are user experience design interface design<br>
                        professional. By far one of the worlds best known brands."</p>
                    <h4 class="text-white">Leslie Williamson, Developer.</h4>
                </li>
                <li class="testimonial_item">
                    <p>"There are design companies, and then there are user experience design interface design<br>
                        professional. By far one of the worlds best known brands."</p>
                    <h4 class="text-white">Fred Moody, Network Software.</h4>
                </li>
            </ul>
        </div>
    </section> -->


    <section class="pricing_section bg-grey bd-bottom padding" id="prices">
        <div class="container py-5">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Save 20% On Beauty Spa</h3>
                <h2>Our Barber Pricing</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-padding">
                    <div class="price_wrap">
                        <h3>Hair Styling</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Hair Cut</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$8</span>
                            </li>
                            <li>
                                <h4>Hair Styling</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$9</span>
                            </li>
                            <li>
                                <h4>Hair Triming</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$10</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding">
                    <div class="price_wrap">
                        <h3>Shaving</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Clean Shaving</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$8</span>
                            </li>
                            <li>
                                <h4>Beard Triming</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$9</span>
                            </li>
                            <li>
                                <h4>Smooth Shave</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$10</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding">
                    <div class="price_wrap">
                        <h3>Face Masking</h3>
                        <ul class="price_list">
                            <li>
                                <h4>White Facial</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$8</span>
                            </li>
                            <li>
                                <h4>Face Cleaning</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$9</span>
                            </li>
                            <li>
                                <h4>Bright Tuning</h4>
                                <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                                </p>
                                <span class="price">$10</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!---  <section class="cta_section padding">
        <div class="container">
            <div class="display-table">
                <div class="table-cel">
                    <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                        <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                        <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                            and boys hair.</p>
                        <a href="#" class="default_btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="blog-section bd-bottom padding">
        <div class="container py-5">
            <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>From Blog</h3>
                <h2>A Good Newspaper Is A <br> Nation Talking To Itself</h2>
            </div>
            <div class="row blog-wrap">
                <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="img/post-1.jpg" alt="post">
                            <span class="category"><a href="#">interior</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="img/post-2.jpg" alt="post">
                            <span class="category"><a href="#">Architecture</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="img/post-3.jpg" alt="post">
                            <span class="category"><a href="#">Design</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!---  <div class="sponsor_section bg-grey padding">
        <div class="container">
            <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
                <li class="sponsor_item">
                    <img src="img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-4.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-5.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div> -->

     <!--Start Footer-->
    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo.png" alt="Brand">
                        <p>Our barbershop is the created for men who appreciate premium quality, time and flawless look.
                        </p>
                        <ul class="widget_social">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Headquaters</h3>
                        <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                        <p><a href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="4008252c2c2f0024392e212d29232c21392532336e2e2534">[email&#160;protected]</a>
                            <br>(+123) 456 789 101</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Opening Hours</h3>
                        <ul class="opening_time">
                            <li>Monday - Friday 11:30am - 2:008pm</li>
                            <li>Saturday – Monday: 9am – 8pm</li>
                            <li>Monday - Friday 5:30am - 11:008pm</li>
                            <li>Saturday - Sunday 4:30am - 1:00pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 sm-padding">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input"
                                    placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="copyright">&copy;
                        <script type="text/javascript"> document.write(new Date().getFullYear())</script> Barber Shop
                        
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <ul class="footer_social">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Report Problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

     <!--End Footer-->


    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>

    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>

    <script src="js/vendor/smooth-scroll.min.js"></script>

    <script src="js/vendor/venobox.min.js"></script>

    <script src="js/vendor/jquery.ajaxchimp.min.js"></script>

    <script src="js/vendor/jquery.slicknav.min.js"></script>

    <script src="js/vendor/jquery.nice-select.min.js"></script>

    <script src="js/vendor/jquery.mb.YTPlayer.min.js"></script>

    <script src="js/vendor/wow.min.js"></script>

    <script src="js/contact.js"></script>

    <script src="js/appointment.js"></script>

    <script src="js/main.js"></script>
</body>


</html>
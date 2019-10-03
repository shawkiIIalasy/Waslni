<!DOCTYPE HTML>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name', 'Waslni')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="author" content="FreeHTML5.co" />
<link rel="shortcut icon"  href="/images/sublogo.png" >
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo e(asset('css/icomoon.css')); ?>">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <!-- Modernizr JS -->
    <script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
         

    <div class="gtco-loader"></div>
    
    <div id="page">

    
    <div class="page-inner">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="#"><img src="<?php echo e(asset('images/logo.png')); ?>" style="width:200px;height: 100px;margin-top: 30px;"></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="#bottom" id="top" >Servises</a></li>
                        <li><a href="#hbot" id="tfooter" >About Us</a></li>
                        <li><a href="#hcon" id="cfooter">Contact</a></li>
              
           <li class="btn-cta"> 
            <?php if(Route::has('login')): ?>
          
                    <?php if(Auth::check()): ?>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                                    <?php if((Auth::user()->cover_image)!='team2.jpg'): ?>
                                   <img src="/storage/cover_image/<?php echo e(Auth::user()->cover_image); ?>" class="img-circle" alt="Cinque Terre" width="30px" height="30px"><?php else: ?> <img src="<?php echo e(asset('images/team2.jpg')); ?>" class="img-circle" alt="Cinque Terre" width="30px" height="30px"><?php endif; ?> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" >
                                    <li>
                                         <a href="/trips"  style="color: #000;">
                                            My Profile
                                        </a>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #000;">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                             <?php else: ?>

                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php endif; ?>
                   
                        
                <?php endif; ?>
            </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    

                    <div class="row row-mt-15em">
                        <div class="col-md-15 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1 class="" style="text-align: center;">Welcome to Waslni</h1>
                            <h2 style="text-align: center;">To improve the transportation of the Al-Bayt University </h2> 
                            <br><br>
                       
                      
                            <form method="get" action="/search">
                            <input type="text" name="from" class="form-control2" style="" placeholder="From" required>
                            <input type="text" name="to" class="form-control2" style="" placeholder="To" required>
                            <input type="date" name="date" class="form-control1" style="" placeholder="Date" required>
                            <button type="submit" class="btn btn-primary" style="margin-left:50px;width:200px;">Find A Ride</button></form>
                        </div>
                 
               
                     
                 
                </div>
            </div>
        </div>

    </header>
       
                   
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Explanation of system usage</h2>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/boss.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/boss.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>No office, no boss.</h2>
                            <p>Whether you’re supporting your family or saving for something big, Uber gives you the freedom to get behind the wheel when it makes sense for you. Choose when you drive, where you go, and who you pick up.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/clock.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/clock.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Drive when you want.</h2>
                            <p>Need something outside ? As an independent contractor with Uber, you’ve got freedom and flexibility to drive whenever you have time. Set your own schedule,</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/money.png" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/money.png" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Make good money.</h2>
                            <p>Got a car? Turn it into a money machine. The city is buzzing and Uber makes it easy for you to cash in on the action. Plus, you've already got everything you need to get started.</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/location.png" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/location.png" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Easiest way around</h2>
                            <p>One tap and a car comes directly to you. Hop in—your driver knows exactly where to go. And when you get there, just step out. Payment is completely seamless.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/anytime-anywhere.png" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/anytime-anywhere.png" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Anywhere, anytime</h2>
                            <p>Daily commute. Errand across town. Early morning flight. Late night drinks. Wherever you’re headed, count on Uber for a ride—no reservations required.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/low.png" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="images/low.png" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Low-cost to luxury</h2>
                            <p>Economy cars at everyday prices are always available. For special occasions, no occasion at all, or when you just a need a bit more room, call a black car or SUV.</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    
    <div id="gtco-features" class="border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 href="#top" id="bottom">Servises</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <h3>Time Saving</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-ship"></i>
                        </span>
                        <h3>Facilitate transportation</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-ban"></i>
                        </span>
                        <h3>Reduce costs</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-circle"></i>
                        </span>
                        <h3>Easiest way around</h3>
                        <p>One tap and a car comes directly to you. Hop in—your driver knows exactly where to go. And when you get there, just step out. Payment is completely seamless. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-bullhorn"></i>
                        </span>
                        <h3>Communication</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <h3>Comfort and safety</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-check"></i>
                        </span>
                        <h3>Privacy assessment</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="fa fa-money"></i>
                        </span>
                        <h3>Source of income</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section" >
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="fa fa-users"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Total Users</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="fa fa-taxi"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Total Driver</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="fa fa-plane"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Trips Done</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="fa fa-times"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="12" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Trips canceled</span>

                    </div>
                </div>
                    
            </div>
        </div>
    </div>

    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Meet our drivers</h2>
                    <p>Drive when you want
Make what you need
Driving with Waslni is flexible and rewarding, helping drivers meet their career and financial goals.</p>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <a href="#"><img src="images/1d.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/2d.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/3d.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="images/img_4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2 href="#cfooter" id="hcon">Subscribe</h2>
                    <p>Be the first to know about each update.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-inline">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p   b-md">

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3 href="#tfooter" id="hbot">About <span class="footer-logo">Waslni<span>.<span></span></h3>
                        <p>It is a reservation system in which the student interacts with the student or the driver (student) to facilitate and reduce the congestion on the buses of the Al-albayt University </p>
                    </div>
                </div>

                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3>Links</h3>
                        <ul class="gtco-footer-links">
                            <li><a href="#">Knowledge Base</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Terms of services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> WaslniDriveMe@gmail.com</a></li>

                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2017 Waslni. All Rights Reserved.</small> 
                        <small class="block">Designed by <a href="http://FreeHTML5.co/" target="_blank">Waslni Team</a>
                    </p>
                    <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
    <!-- Carousel -->
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <!-- countTo -->
    <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/magnific-popup-options.js')); ?>"></script>
    <!-- Main -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script type="text/javascript">
        
 $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
    </script>

    </body>
</html>


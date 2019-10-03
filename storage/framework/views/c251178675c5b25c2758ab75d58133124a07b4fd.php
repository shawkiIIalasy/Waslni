<!DOCTYPE HTML>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name', 'Waslni')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="author" content="FreeHTML5.co" />

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
                    <div id="gtco-logo"><a href="/"><img src="<?php echo e(asset('images/logo.png')); ?>" style="width:200px;height: 100px;margin-top: 30px;"></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="/">Servises</a></li>
                        <li><a href="/">About Us</a></li>
                        <li><a href="/">Contact</a></li>
                        
           <li class="btn-cta"> <?php if(Route::has('login')): ?>
          
                    <?php if(Auth::check()): ?>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                                   <img src="/storage/cover_image/<?php echo e(Auth::user()->cover_image); ?>" class="img-circle" alt="Cinque Terre" width="30px" height="30px"> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
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
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small">Welcome to Waslni</span>
                            <h1>To improve the transportation of the Al-Bayt University </h1> 
                            
                        </div>
                 
                 
                        <?php if(Auth::check()): ?>
                                            <?php else: ?>
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">
                                    <ul class="tab-menu">
                                        <li class=" gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
                                        <li class="active gtco-second"><a href="#" data-tab="login">Login</a></li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-content-inner " data-content="signup">
                                            
                                            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                                                 <?php echo e(csrf_field()); ?>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="username">Username</label>
                                                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                                    </div>
                                                </div>
                                                 <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="email">Email</label>
                                                       <input id="email" type="email" class="form-control" name="email" placeholder="example@example.com" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="phone">Phone</label>
                                                         <input id="number" type="tel" class="form-control" name="phone" placeholder="07999887171" size="10" required>

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="password">Password</label>
                                                       <input id="password" type="password" class="form-control" name="password" required>

                                                        <?php if($errors->has('password')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                                            </span>
                                                        <?php endif; ?></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="password2">Repeat Password</label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary" value="Sign up">
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>

                                        <div class="tab-content-inner active" data-content="login">
                                            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                                                 <?php echo e(csrf_field()); ?>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="username">Username or Email</label>
                                                       <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="password">Password</label>
                                                        <input id="password" type="password" class="form-control" name="password" required>

                                                            <?php if($errors->has('password')): ?>
                                                                <span class="help-block">
                                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                                </span>
                                                            <?php endif; ?>
                                                </div></div>
                                                 <div class="row form-group">
                                                    <div class="col-md-12">
                                                      
                                                       <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                                </div>
                                                
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary" value="Login">Login </button>
                                                    
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                                                    </div>
                                                </div>
                                             
                                            </form> 

                                        
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php endif; ?>     
                 
                </div>
            </div>
        </div>

    </header>
       


    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p   b-md">

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>About <span class="footer-logo">Waslni<span>.<span></span></h3>
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
                            <li><a href="#"><i class="icon-mail2"></i> Zead_alnasha@gmail.com</a></li>
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

    </body>
</html>


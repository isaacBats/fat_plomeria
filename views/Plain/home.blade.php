@extends('partials.default')
@section('content')	
	<div id="skipnav"><a href="#maincontent">Pèrez Pérez</a></div>

	    <!-- Navigation -->
	    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand" href="#page-top">Pérez Plomería</a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#portfolio">HOME</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#about">QUIENES SOMOS</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#contact">SERVICIOS</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#contact">CONTACTO</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>

	    <!-- Header -->
	    <header>
	        <div class="container" id="maincontent" tabindex="-1">
	            {{-- <div class="row">
	                <div class="col-lg-12">
	                    <img src="/assets/images/site/plomeria.jpg" alt="">
	                    <div class="intro-text">
	                        <h1 class="name">Start Bootstrap</h1>
	                        <hr class="star-light">
	                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
	                    </div>
	                </div>
	            </div> --}}
	        </div>
	    </header>
	    
	    <!-- About Section -->
	    <section class="success" id="about">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>QUIENES SOMOS</h2>
	                    <h3>Pérez y Pérez Plomeria</h3>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-4 col-lg-offset-2">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                </div>
	                <div class="col-lg-4">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- Portfolio Grid Section -->
	    <section id="portfolio">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Servicion</h2>
	                    
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-4 portfolio-item">
	                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="/assets/img/portfolio/cabin.png" class="img-responsive" alt="Cabin">
	                    </a>
	                </div>
	                <div class="col-sm-4 portfolio-item">
	                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="/assets/img/portfolio/cake.png" class="img-responsive" alt="Slice of cake">
	                    </a>
	                </div>
	                <div class="col-sm-4 portfolio-item">
	                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="/assets/img/portfolio/circus.png" class="img-responsive" alt="Circus tent">
	                    </a>
	                </div>
	                <div class="col-sm-4 portfolio-item">
	                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="/assets/img/portfolio/game.png" class="img-responsive" alt="Game controller">
	                    </a>
	                </div>
	                <div class="col-sm-4 portfolio-item">
	                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="/assets/img/portfolio/safe.png" class="img-responsive" alt="Safe">
	                    </a>
	                </div>
	                <div class="col-sm-4 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="/assets/img/portfolio/submarine.png" class="img-responsive" alt="Submarine">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- Contact Section -->
	    <section id="contact">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Contact Me</h2>
	                    
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2">
	                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
	                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
	                    <form name="sentMessage" id="contactForm" novalidate>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 floating-label-form-group controls">
	                                <label for="name">Name</label>
	                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 floating-label-form-group controls">
	                                <label for="email">Email Address</label>
	                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 floating-label-form-group controls">
	                                <label for="phone">Phone Number</label>
	                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 floating-label-form-group controls">
	                                <label for="message">Message</label>
	                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <br>
	                        <div id="success"></div>
	                        <div class="row">
	                            <div class="form-group col-xs-12">
	                                <button type="submit" class="btn btn-success btn-lg">Send</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- Footer -->
	    <footer class="text-center">
	        <div class="footer-above">
	            <div class="container">
	                <div class="row">
	                    <div class="footer-col col-md-4">
	                        <h3>Dirección</h3>
	                        <p>3481 Melrose Place
	                            <br>Beverly Hills, CA 90210</p>
	                    </div>
	                    <div class="footer-col col-md-4">
	                        <h3>Servicios</h3>
	                        <ul>
	                        	<li>Servicio</li>	
	                        	<li>Servicio</li>	
	                        	<li>Servicio</li>	
	                        	<li>Servicio</li>	
	                        </ul>
	                    </div>
	                    <div class="footer-col col-md-4">
	                        <ul class="list-inline">
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
	                            </li>
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="footer-below">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-12">
	                        Copyright &copy; Pérez Plomeria 2017
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>

	    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
	        <a class="btn btn-primary" href="#page-top">
	            <i class="fa fa-chevron-up"></i>
	        </a>
	    </div>

	    <!-- Portfolio Modals -->
	    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-content">
	            <div class="close-modal" data-dismiss="modal">
	                <div class="lr">
	                    <div class="rl">
	                    </div>
	                </div>
	            </div>
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-8 col-lg-offset-2">
	                        <div class="modal-body">
	                            <h2>Project Title</h2>
	                            
	                            <img src="/assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                            <ul class="list-inline item-details">
	                                <li>Client:
	                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
	                                    </strong>
	                                </li>
	                                <li>Date:
	                                    <strong><a href="http://startbootstrap.com">April 2014</a>
	                                    </strong>
	                                </li>
	                                <li>Service:
	                                    <strong><a href="http://startbootstrap.com">Web Development</a>
	                                    </strong>
	                                </li>
	                            </ul>
	                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-content">
	            <div class="close-modal" data-dismiss="modal">
	                <div class="lr">
	                    <div class="rl">
	                    </div>
	                </div>
	            </div>
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-8 col-lg-offset-2">
	                        <div class="modal-body">
	                            <h2>Project Title</h2>
	                            
	                            <img src="/assets/img/portfolio/cake.png" class="img-responsive img-centered" alt="">
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                            <ul class="list-inline item-details">
	                                <li>Client:
	                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
	                                    </strong>
	                                </li>
	                                <li>Date:
	                                    <strong><a href="http://startbootstrap.com">April 2014</a>
	                                    </strong>
	                                </li>
	                                <li>Service:
	                                    <strong><a href="http://startbootstrap.com">Web Development</a>
	                                    </strong>
	                                </li>
	                            </ul>
	                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-content">
	            <div class="close-modal" data-dismiss="modal">
	                <div class="lr">
	                    <div class="rl">
	                    </div>
	                </div>
	            </div>
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-8 col-lg-offset-2">
	                        <div class="modal-body">
	                            <h2>Project Title</h2>
	                            
	                            <img src="/assets/img/portfolio/circus.png" class="img-responsive img-centered" alt="">
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                            <ul class="list-inline item-details">
	                                <li>Client:
	                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
	                                    </strong>
	                                </li>
	                                <li>Date:
	                                    <strong><a href="http://startbootstrap.com">April 2014</a>
	                                    </strong>
	                                </li>
	                                <li>Service:
	                                    <strong><a href="http://startbootstrap.com">Web Development</a>
	                                    </strong>
	                                </li>
	                            </ul>
	                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-content">
	            <div class="close-modal" data-dismiss="modal">
	                <div class="lr">
	                    <div class="rl">
	                    </div>
	                </div>
	            </div>
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-8 col-lg-offset-2">
	                        <div class="modal-body">
	                            <h2>Project Title</h2>
	                            
	                            <img src="/assets/img/portfolio/game.png" class="img-responsive img-centered" alt="">
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                            <ul class="list-inline item-details">
	                                <li>Client:
	                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
	                                    </strong>
	                                </li>
	                                <li>Date:
	                                    <strong><a href="http://startbootstrap.com">April 2014</a>
	                                    </strong>
	                                </li>
	                                <li>Service:
	                                    <strong><a href="http://startbootstrap.com">Web Development</a>
	                                    </strong>
	                                </li>
	                            </ul>
	                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-content">
	            <div class="close-modal" data-dismiss="modal">
	                <div class="lr">
	                    <div class="rl">
	                    </div>
	                </div>
	            </div>
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-8 col-lg-offset-2">
	                        <div class="modal-body">
	                            <h2>Project Title</h2>
	                            
	                            <img src="/assets/img/portfolio/safe.png" class="img-responsive img-centered" alt="">
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                            <ul class="list-inline item-details">
	                                <li>Client:
	                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
	                                    </strong>
	                                </li>
	                                <li>Date:
	                                    <strong><a href="http://startbootstrap.com">April 2014</a>
	                                    </strong>
	                                </li>
	                                <li>Service:
	                                    <strong><a href="http://startbootstrap.com">Web Development</a>
	                                    </strong>
	                                </li>
	                            </ul>
	                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-content">
	            <div class="close-modal" data-dismiss="modal">
	                <div class="lr">
	                    <div class="rl">
	                    </div>
	                </div>
	            </div>
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-8 col-lg-offset-2">
	                        <div class="modal-body">
	                            <h2>Project Title</h2>
	                            
	                            <img src="/assets/img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                            <ul class="list-inline item-details">
	                                <li>Client:
	                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
	                                    </strong>
	                                </li>
	                                <li>Date:
	                                    <strong><a href="http://startbootstrap.com">April 2014</a>
	                                    </strong>
	                                </li>
	                                <li>Service:
	                                    <strong><a href="http://startbootstrap.com">Web Development</a>
	                                    </strong>
	                                </li>
	                            </ul>
	                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- jQuery -->
	    <script src="/assets/vendor/jquery/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	    <!-- Plugin JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	    <!-- Contact Form JavaScript -->
	    <script src="/assets/js/jqBootstrapValidation.js"></script>
	    <script src="/assets/js/contact_me.js"></script>

	    <!-- Theme JavaScript -->
	    <script src="/assets/js/freelancer.min.js"></script>
@stop
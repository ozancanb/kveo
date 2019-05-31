<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KveO - Birlikte Dünyayı Geziyoruz.</title>

        <!-- Bootstrap -->
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css-->
        <link href="asset/css/kveo.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="asset/css/yamm.css" rel="stylesheet" type="text/css">
        <!--google fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- flex slider css -->
        <link href="asset/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="asset/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!--Revolution slider css-->
        <link href="asset/css/plug-in/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="asset/css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
        <!--owl carousel css-->
        <link href="asset/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="asset/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--cube css-->
        <link href="asset/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">	
        <!-- font awesome for icons -->
        <link href="asset/css/font-awesome.min.css" rel="stylesheet">		
        <!--sky form pro css-->
        <link href="asset/css/sky-forms.css" rel="stylesheet">		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="asset/img/logo.png" alt="KveO"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=" ">
                            <a href="#"  >Anasayfa </a>
                        </li>
                        <!--menu home li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Gezilerimiz</a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li><a tabindex="-1" href="#">Yurtiçi Gezilerimiz</a></li>
                                <li><a tabindex="-1" href="#">Turkiye Gezilerimiz</a></li>
                                <li><a tabindex="-1" href="#">Gunubirlik Gezilerimiz</a></li>
								<li><div class="clearfix"></div></li>
                                <li><a tabindex="-1" href="#">Planlanan	 Gezilerimiz</a></li>
								
                            </ul>
                        </li>
                        <li>
                            <a href="#">Hakkimizda </a>
                        </li>
                        <li>
                            <a href="#" >Iletisim </a>
                        </li>
						
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->
	

        <div class="divide20"></div>
		
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-offset-1 margin30 sky-form-columns contact-sky-option">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center-heading">
                                <h2>Bize Ulaşın!</h2>
                                <span class="center-line"></span>
                                <p>
                                    Aklınıza takılan her konu hakkında görüş ve önerilerinizi bekliyor olacağız.
                                </p>
                            </div>
                        </div>                   
                    </div><!--center heading row-->
                    <div class="row margin40">
                    
                        
                    </div>
                     <p class="margin30">
                            We are waiting to here from you!
                        </p>
                        <form action="sky-form/php_files/demo-contacts-process.php" method="post" id="sky-form" class="sky-form sky-form-columns">
				
				
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							
							<label class="input">
								<i class="icon-append fa fa-user"></i>
                                                                <input type="text" name="name" id="name" placeholder="Name">
                                                                <b class="tooltip tooltip-top-right">Enter your name</b>
							</label>
						</section>
						<section class="col col-6">
							
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="email" name="email" id="email" placeholder="Email">
                                                                <b class="tooltip tooltip-top-right">Your mail address</b>
							</label>
						</section>
					</div>
					
					<section>
						
						<label class="input">
							<i class="icon-append fa fa-tag"></i>
                                                        <input type="text" name="subject" id="subject" placeholder="Subject">
                                                         <b class="tooltip tooltip-top-right">Subject (optional)</b>
						</label>
					</section>
					
					<section>
						
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
                                                        <textarea rows="4" name="message" id="message" placeholder="Message"></textarea>
                                                         <b class="tooltip tooltip-top-right">Your message (minimum 10 Characters)</b>
						</label>
					</section>
					
					<section>
						
						<label class="input input-captcha">
                                                    <img src="http://bootstraplovers.com/templates/assan-v1.7.5/sky-form/captcha/image.php?1436966023" width="100" height="35" alt="Captcha image" />
                                                    <input type="text" maxlength="6" name="captcha" id="captcha" placeholder="Enter characters below:">
						 <b class="tooltip tooltip-bottom-right">Enter Correct Captcha</b>
                                                </label>
					</section>
					
					<section>
						<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
					</section>
				</fieldset>
				
				<footer>
					<button type="submit" class="btn btn-theme-bg btn-lg ">Send message</button>
				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>
			</form>	
        						
                </div>

            </div>
        </div><!--contact advanced container end-->

		<div class="divide60"></div>
		
		
        <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center margin30">
                        <div class="footer-col footer-3">
                            <p>
                                Gezilerimizden resimler, hikayeler, yaşananlar. Oranın hikayeleri sizleri alıp oralara götüreceğiz.
                            </p>
                            <ul class="list-inline social-1">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
          
             
                   

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span>&copy;2015. by K&O</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--default footer end here-->
		
		
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="asset/js/jquery-1.11.3.min.js"></script>
        <!--bootstrap js plugin-->
        <script src="asset/js/bootstrap.min.js" type="text/javascript"></script>  
        <!--sticky header-->
        <script type="text/javascript" src="asset/js/jquery.sticky.js"></script>
        <!--easing plugin for smooth scroll-->
        <script src="asset/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--flex slider plugin-->
        <script src="asset/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="asset/js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="asset/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="asset/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="asset/js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="asset/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="asset/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>        
        <!--customizable plugin edit according to your needs-->
        <script src="asset/js/custom.js" type="text/javascript"></script>

		
        <!--revolution slider plugins-->
        <script src="asset/js/plug-in/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="asset/js/plug-in/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="asset/js/plug-in/revolution-custom.js" type="text/javascript"></script>
        <!--cube portfolio plugin-->
        <script src="asset/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="asset/js/cube-portfolio.js" type="text/javascript"></script>
		
		        <!--sky form plugin js-->
        <script src="asset/js/jquery.form.min.js" type="text/javascript"></script>
        <script src="asset/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="asset/js/sky-forms-custom.js" type="text/javascript"></script>

		
    </body>
</html>	
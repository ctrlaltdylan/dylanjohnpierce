<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
		<title>Dylan Pierce | Web Developer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}">
		<link rel="apple-touch-icon" href="{{asset('assets/apple-touch-icon.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/apple-touch-icon-114x114.png')}}">
		
		<!-- ==============================================
		CSS
		=============================================== -->    
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
		<link rel="stylesheet" href="{{asset('css/designr-theme-cyan.css')}}">
		
		
		<!-- ==============================================
		Fonts
		=============================================== -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
		
		<!-- ==============================================
		JS
		=============================================== -->
			
		<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src="{{asset('js/libs/modernizr.min.js')}}"></script>
			
		{{--Google analytics script--}}
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-38271182-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
  
	<body data-spy="scroll" data-target="#main-nav" data-offset="200">
	
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="main-nav" class="navbar navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
					<!-- ======= LOGO ========-->
					<a class="navbar-brand scrollto" href="#home">Dylan Pierce<br><span>Web Developer</span></a>
					<!-- <a class="navbar-brand scrollto ir-logo" href="#">Dylan Pierce<br><span>UI Designer</span></a> -->
				
				</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="sr-only">
							<a href="#home" class="scrollto">Home</a>
						</li>
						<li>
							<a href="#services" class="scrollto">What I do</a>
						</li>
						<li>
							<a href="#about" class="scrollto">About Me</a>
						</li>
						<li>
							<a href="#portfolio" class="scrollto">My Works</a>
						</li>
						<li>
							<a href="#contact" class="scrollto">Contact Me</a>
						</li>
					</ul>
				</div><!--End navbar-collapse -->
				
			</div><!--End container -->
			
		</div><!--End main-nav -->
		
		<!-- ==============================================
		HEADER
		=============================================== -->
		<header id="home" class="jumbotron">
		
			<div class="container">
			
				<div class="message-box clearfix">
				
					<div class="left-col col-md-4">
						<p>I AM <br/><span>Dylan Pierce</span><br/>and I'm a web</p>
					</div>	
					
					<div class="right-col flexslider home-slider">

						<ul class="slides" style = 'margin-top:20px'>
						
							<li><p>Developer</p></li>
							
							<li><p>Designer</p></li>
							
							<li><p>Expert</p></li>
							
						</ul>
						
					</div><!--End home-slider -->
					
				</div><!--End message-box -->
				
			</div><!--End container -->
			
		</header><!--End header -->

		<!-- ==============================================
		SERVICES
		=============================================== -->
		<section id="services">
		
			<div class="container">
			
				<h1 class="section-title scrollimation scale-in">The <span>Services</span> I offer<i class="icon-wrench"></i></h1>
				
				<div class="row services scrollimation fade-left">
					<div class="col-md-3 text-center">
						<a href="#fakelink" class="icon"><i class="icon-flag"></i></a>
						<h2>Agile Methodology</h2>
					</div>
					<div class="col-md-3 details">
						<p>Using modern technologies like Pivot Tracker, Trello, and Git; I have real world experience collaborating with a team.</p>
					</div>
					<div class="col-md-3 text-center">
						<a href="#fakelink" class="icon"><i class="icon-code"></i></a>
						<h2>Development</h2>
					</div>
					<div class="col-md-3 details">
						<p>I have created simple and complex systems with multiple frameworks. My expertise lies in architecting complex problems into manageable pieces. I strive to adapt DRY and SOLID principles in my work.</p>
					</div>
				</div><!--End row (top) -->
				
				<div class="row line visible-md visible-lg">
					<div class="col-md-3"><span class="spot"></span></div>
					<div class="col-md-3"><span class="spot"></span></div>
					<div class="col-md-3"><span class="spot"></span></div>
					<div class="col-md-3"><span class="spot"></span></div>
				</div><!--End row -->
				
				<div class="row services bottom-row scrollimation fade-right">
					<div class="col-md-3 text-center col-md-push-3">
						<h2>Teaching</h2>
						<a href="#fakelink" class="icon"><i class="icon-pencil"></i></a>
					</div>
					<div class="col-md-3 details col-md-pull-3">
						<p>Nothing beats the 'ah ha' moment when you finally understand a difficult concept. I love passing on my experience to <strike>newbies</strike> new developers.</p>
					</div>
					<div class="col-md-3 text-center  col-md-push-3">
						<h2>Learning</h2>
						<a href="#fakelink" class="icon"><i class="icon-rocket"></i></a>
					</div>
					<div class="col-md-3 details  col-md-pull-3">
						<p>There is no "one size fits all" method when it comes to developing an information system. My web applications take advantage of the newest or the most stable frameworks depending on the problem at hand.</p>
					</div>
				</div><!--End row (bottom)-->
				
			</div><!--End container -->
			
		</section><!--End services section-->
		
		<!-- ==============================================
		ABOUT
		=============================================== -->		
		<section id="about">
		
			<div class="container">
			
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1 scrollimation fade-right">
						<img class="img-responsive img-circle img-center" src="{{asset('assets/me_cropped.jpg')}}" alt="">
					</div>
					<div class="col-sm-6 col-sm-offset-1 scrollimation fade-left">
						<h1>Hello, I am Dylan Pierce...</h1>
						<p>I'm a web designer living in <a href="https://goo.gl/maps/Yttdd">Philadephia, Pennsylvania</a>.<br/>

						 I have worked with companies like <a href="http://coventryhealthcare.com/">Coventry Healthcare</a> and <a href="https://www.ldc.upenn.edu/">Linguistic Data Consortium</a> and currently working as a web developer at the University of Pennsylvania's <a href="http://www.med.upenn.edu/pmacs/">Perelman School of Medicine</a>.

						 <br/>My passion is creating, and I love the challenges my projects bring.</p>
						<a href="#portfolio" class="btn btn-theme transparent scrollto">View my Works</a>
					</div>
				</div><!--End row -->
				
			</div><!--End container -->
			
		</section><!--End about section -->
	
		<!-- ==============================================
		SKILLS
		=============================================== -->			
		<section id="skills">
		
			<div class="container">
			
				<div class="row skills">

					<div class="col-sm-6 col-md-3 text-center">
						<span class="chart" data-percent="80"><span class="percent">80</span></span>
						<h2 class="text-center">Laravel</h2>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span class="chart" data-percent="70"><span class="percent">70</span></span>
						<h2 class="text-center">Symfony</h2>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span class="chart" data-percent="60"><span class="percent">60</span></span>
						<h2 class="text-center">jQuery</h2>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span class="chart" data-percent="90"><span class="percent">90</span></span>
						<h2 class="text-center">Bootstrap</h2>
					</div>
					
				</div><!--End row -->
				
			</div><!--End container -->
			
		</section><!--End skills section -->
	
		<!-- ==============================================
		PORTFOLIO
		=============================================== -->		
		<section  id="portfolio">
		
			<div id="portfolio-header" class="text-center">
				
				<h1 class="section-title scrollimation scale-in">The <span>works</span> I am proud of<i class="icon-pencil"></i></h1>
				
				<!--==== Portfolio Filters ====-->
				<div id="filter-works">
					<ul>
						<li class="active">
							<a href="#fake" data-filter="*">All</a>
						</li>
						<li>
							<a href="#fake" data-filter=".web">Web</a>
						</li>
						<li>
							<a href="#fake" data-filter=".volunteering">Volunteering</a>
						</li>
						<li>
							<a href="#fake" data-filter=".awards">Awards</a>
						</li>
					</ul>
				</div><!--End portfolio filters -->
				
			</div><!--End portfolio header -->
			
			<div class="container masonry-wrapper scrollimation fade-in">
			
				<div id="projects-container">
				
					<!-- ==============================================
					SINGLE PROJECT ITEM
					=============================================== -->	
					<a class="project-item web" href="http://www.booksmart.it" data-images="assets/projects/project-slide.jpg, assets/projects/project-slide.jpg">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/booksmart-preview.jpg')}}"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Booksmart</h2><!--Project Title -->
							<p>A Music Industry Application</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<img class="img-responsive img-center" src="assets/projects/booksmart-logo.png"  alt="">
							<p>Booksmart is a music industry application designed to streamline the process of booking live entertainment acts. The software aims to revolutionize how talent is booked by creating a standard process for the various tasks to book an artist.</p>
							
							<p>Booksmart is designed with multiple user roles in mind, along with complex states of various documents and processes.</p>

							<p>As Technical Co-Founder and Lead Web Developer, I develop alongside and coordinate the efforts of our multi-disciplinary team.</p>
						</div>
						
					</a>
					<!-- ==============================================
					END PROJECT ITEM
					=============================================== -->						
					
					<a class="project-item icons volunteering" href="http://philly.gopilot.org/" data-images="{{asset('assets/projects/pilot-philly-site-preview.png, assets/projects/pilot-philly-scene.jpg')}}">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/pilot-philly-preview.png')}}" alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Pilot Philly</h2><!--Project Title -->
							<p>philly.gopilot.com</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p class="clearfix">PilotPhilly is a Pilot-run event. Pilot is a national organization focused on giving students the ability to turn their ideas in real apps and products.</p>
							<p>I was a mentor as the first annual PilotPhilly hosted at the University of Pennsylvania. I assisted several teams with web related questions.</p>
						</div>
						
					</a><!--End Project Item -->
{{--
					<a class="project-item volunteering" href="#somelink" data-images="assets/projects/project-slide.jpg, assets/projects/project-slide.jpg">
						
						<img class="img-responsive project-image" src="assets/projects/project-thumb.jpg"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">314 for Autism</h2><!--Project Title -->
							<p>http://www.drexel.edu/now/features/archive/2012/May/314-for-Autism/</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p class="clearfix">314 for Autism was an event I set up to raise awareness and funds for Autism support and research.</p>
							<p>I ran an entire marathon on a 1/12th of a mile indoor track at Drexel University. I setup a website to explain my event and to accept donations.</p>
							<p>In total I was able to raise over $3,000 in donations for <a href="http://autismspeaks.org">Austim Speaks</a>, and it was a very rewarding experience.</p>
						</div>
						
					</a><!--End Project Item -->
--}}
					<a class="project-item awards" href="http://cci.drexel.edu/resources/current-students/undergraduate/senior-design-challenge.aspx" data-images="assets/projects/project-slide.jpg, assets/projects/project-slide.jpg">
						
						<img class="img-responsive project-image" src="assets/projects/CCI-logo.gif"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">IST Senior Design Challenge</h2><!--Project Title -->
							<p>Drexel College of Computing and Informatics</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p>The Senior Design Challenge is a annual competition at the Drexel Unversity. The top Senior Group Design projects are selected based on their application's merit and the quality of documentation.</p>
							<img class="img-responsive img-center" src="assets/projects/company-logo.png"  alt="">
							<p>We were judged on our SDS, SRS, User Documentation, a poster board and a presentation. </p>
							<p>Our project was selected as the overall winner.</p>
						</div>
						
					</a><!--End Project Item -->
{{--
					<a class="project-item icons" href="#somelink" data-images="{{asset('assets/projects/project-slide.jpg')}}, {{asset('assets/projects/project-slide.jpg')}}">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/project-thumb.jpg')}}"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Project 5</h2><!--Project Title -->
							<p>microsoft.com</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p class="clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<img class="img-responsive img-center" src="assets/projects/company-logo.png" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu. Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
						</div>
						
					</a><!--End Project Item -->
--}}
{{--
					<a class="project-item web-design" href="#somelink" data-images="{{asset('assets/projects/project-slide.jpg')}}, {{asset('assets/projects/project-slide.jpg')}}">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/project-thumb.jpg')}}"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Project 6</h2><!--Project Title -->
							<p>amazon.com</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p class="clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<img class="img-responsive img-center" src="assets/projects/company-logo.png"  alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
						</div>
						
					</a><!--End Project Item -->
--}}
{{--
					<a class="project-item web-design" href="http://www.google.com" data-images="{{asset('assets/projects/project-slide.jpg')}}, {{asset('assets/projects/project-slide.jpg')}}">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/project-thumb.jpg')}}"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Project 7</h2><!--Project Title -->
							<p>google.com</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<img class="img-responsive img-center" src="assets/projects/company-logo.png"  alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
						</div>
						
					</a><!--End Project Item -->
--}}
{{--					
					<a class="project-item icons" href="#somelink" data-images="a{{asset('ssets/projects/project-slide.jpg')}}, {{asset('assets/projects/project-slide.jpg')}}">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/project-thumb.jpg')}}"  alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Project 8</h2><!--Project Title -->
							<p>microsoft.com</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p class="clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<img class="img-responsive img-center" src="assets/projects/company-logo.png" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu. Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
						</div>
						
					</a><!--End Project Item -->
--}}
{{--				
					<a class="project-item web-design" href="#somelink" data-images="{{asset('assets/projects/project-slide.jpg')}}, {{asset('assets/projects/project-slide.jpg')}}, {{asset('assets/projects/project-slide.jpg')}}">
						
						<img class="img-responsive project-image" src="{{asset('assets/projects/project-thumb.jpg')}}" alt=""><!--Project thumb -->
						
						<div class="hover-mask">
							<h2 class="project-title">Project 9</h2><!--Project Title -->
							<p>amazon.com</p><!--Project Subtitle -->
						</div>
						
						<!--==== Project Preview HTML ====-->
						
						<div class="sr-only project-description">
							<p class="clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							<img class="img-responsive img-center" src="assets/projects/company-logo.png"  alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
						</div>
						
					</a><!--End Project Item -->
--}}
				</div><!-- End projects --> 
				
			</div><!-- End container --> 
			
			<!-- ==============================================
			PROJECT PREVIEW MODAL (Do not alter this markup)
			=============================================== -->	
			<div id="project-modal" class="modal fade">
			
				<div class="modal-dialog">
				
					<div class="modal-content">
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						
						<div class="modal-body">
						
							<div class="left-col">
								<img class="img-responsive" src="{{asset('assets/imac.png')}}" alt="">
								<div class="loader"></div>
								<div class="image-wrapper"></div>
							</div>
							
							<h1></h1>
							
							<div class="project-descr"></div>
							
							<div class="clearfix"></div>
							
							<p class="text-center"><a class="btn btn-theme"><i class="icon-external-link"></i>Visit Website</a></p>
						
						</div><!-- End modal-body -->
						
					</div><!-- End modal-content -->
					
				</div><!-- End modal-dialog -->
				
			</div><!-- End modal -->
			
		</section><!-- End portfolio section -->
		
		<!-- ==============================================
		TWITTER FEED
		=============================================== -->	
		<section id="twitter">
			<div class="container">
				<div class="row scrollimation fade-in">
					<div class="col-sm-1 twitter-icon">
						<i class="icon-twitter"></i>
					</div>
					<div class="col-sm-11">
						<div id="twitter-slider" class="flexslider" data-widget-id="345690956013633536" data-tweets-length="5">
						
						</div>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
			
		</section><!-- End Twitter section -->

		<!-- ==============================================
		CONTACT
		=============================================== -->	
		<section  id="contact">
		
			<div class="container">
			
				<h1 class="section-title scrollimation scale-in">Keep in <span>Touch</span> with me</h1>
				
				<div class="row">
				
					<div class="col-sm-5 contact-info scrollimation fade-right">
						
						<p>Need help with a project? Want to share an idea? Have a website design or just want to talk tech? Feel free to reach out!</p>
						
						<address>
							Dylan Pierce<br>
							Port Fishington<br>
							Philadephia, PA(Philadelphia) 19125<br>
							(300) 730 - 9623
						</address>
						
						<ul class="socials">
							<li><a href="https://twitter.com/ctrlaltdylan"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/dylanjpierce"><i class="icon-facebook"></i></a></li>
							<li><a href="www.linkedin.com/in/dylanpierce/"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://github.com/B1nTree"><i class="icon-github"></i></a></li>
						</ul>
						
					</div>
					
					<!--=== Contact Form ===-->

					<form id="contact-form" class="col-sm-7 scrollimation fade-left" action="{{action('HomeController@handleContact')}}" method="post" novalidate>
						
						<div class="form-group">
						  <label class="control-label" for="contact-name">Name</label>
						  <div class="controls">
							<i class="icon-user"></i>
							<input id="contact-name" name="contactName" placeholder="My name is..." class="form-control input-lg requiredField" type="text" data-error-empty="Please enter your name">
						  </div>
						</div><!-- End name input -->
						
						<div class="form-group">
						  <label class="control-label" for="contact-mail">Email</label>
						  <div class=" controls">
							<i class="icon-envelope"></i>
							<input id="contact-mail" name="email" placeholder="Please respond at..." class="form-control input-lg requiredField" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
						  </div>
						</div><!-- End email input -->
						
						<div class="form-group">
						  <label class="control-label" for="contact-message">Message</label>
							<div class="controls">
								<i class="icon-comment"></i>
								<textarea id="contact-message" name="comments"  placeholder="I wanna talk about..." class="form-control input-lg requiredField" rows="5" data-error-empty="Please enter your message"></textarea>
							</div>
						</div><!-- End textarea -->
						
						<p><button name="submit" type="submit" class="btn btn-theme btn-lg" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="icon-location-arrow"></i>Send Message</button></p>
						<input type="hidden" name="submitted" id="submitted" value="true" />
						
					</form><!-- End contact-form -->
				  
				</div><!-- End row -->
				
			</div><!-- End container -->
			
		</section><!-- End contact section -->
		
		<!-- ==============================================
		FOOTER
		=============================================== -->	
		<footer id="main-footer">
		
			<div class="container">
			
				<div class="row">
				
					<div class="col-sm-6 left-col">
						<h1 class="small-logo">Dylan Pierce<br><span>Web Developer</span></h1>
						<ul class="footer-nav">
							<li><a class="scrollto" href="#home">Home</a></li>
							<li><a class="scrollto" href="#services">Services</a></li>
							<li><a class="scrollto" href="#portfolio">Portfolio</a></li>
							<li><a class="scrollto" href="#contact">Contact</a></li>
						</ul>
						<p>&copy;Copyright 2014 / All Rights Reserved</p>
					</div>
					
					<div class="col-sm-6 right-col">
						<h2>Who Am I?</h2>
						<p>I am a Web Developer, iPhone Jailbreaker, Traveler, and Redditor.</p>
					</div>
					
				</div><!-- End row -->
				
			</div><!-- End container -->
			
		</footer><!-- End footer -->

		<!-- ==============================================
		SCRIPTS
		=============================================== -->	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.2.min.js">\x3C/script>')</script>
		
		<script src="{{asset('js/libs/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('js/jquery.flexslider.min.js')}}"></script>
		<script src="{{asset('js/twitterFetcher_v10_min.js')}}"></script>
		<script src="{{asset('js/jquery.masonry.min.js')}}"></script>
		<script src="{{asset('js/waypoints.min.js')}}"></script>
		<script src="{{asset('js/jquery.easypiechart.js')}}"></script>
		<script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
		<script src="{{asset('js/contact.js')}}"></script>
		<script src="{{asset('js/designr.js')}}"></script>
		
	</body>
	
</html>
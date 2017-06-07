 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kamil Jade Corpuz</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
	
	<!-- CSS -->
	<link href="css/owl.carousel.css" rel="stylesheet">

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<script type="text/javascript">
			
			
								function aboutMe(){
								document.getElementById('aboutme').hidden = false; 
								document.getElementById('experience').hidden = true; 
								document.getElementById('portfolio').hidden = true; 
								}
								
								
								function experience(){
								document.getElementById('aboutme').hidden = true; 
								document.getElementById('experience').hidden = false; 
								document.getElementById('portfolio').hidden = true; 
								}
								
								
								function portfolio(){
								document.getElementById('aboutme').hidden = true; 
								document.getElementById('experience').hidden = true; 
								document.getElementById('portfolio').hidden = false; 
								}
								
				
								
								
			</script>
</head>

<body id="page-top" class="index" onload="myFunction()">
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 10000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").hidden = false;
}
</script>
<div id="loader"></div>
<div id="myDiv" hidden>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">KAMIL JADE CORPUZ</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
					<li>
                        <a class="page-scroll" href="#aboutme" onclick="aboutMe()">&nbsp;About</a>
                    </li>
					
					<li>
                        <a class="page-scroll" href="#experience" onclick="experience()">&nbsp;Experiences</a>
                    </li>
					
					<li>
                        <a class="page-scroll" href="#portfolio" onclick="portfolio()">&nbsp;Portfolio</a>
                    </li>
                    
					
					<!-- <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;Portfolio
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="#tee" class="page-scroll" onClick="port1()">T-shirt Designs</a></li>
						  <li><a href="#print" class="page-scroll" onClick="port2()">Printed Designs</a></li>
						  <li><a href="#logo" class="page-scroll" onClick="port3()">Logo Designs</a></li> 
						  <li><a href="#artworks" class="page-scroll" onClick="port5()">My Artwoks</a></li> 
						  <li><a href="#webdesigns" class="page-scroll" onClick="port4()">Web Designs</a></li> 
						  <li><a href="#3d" class="page-scroll" onClick="port6()">3D Modeling</a></li> 
						  <li><a href="#system" class="page-scroll" onClick="port7()">Systems</a>
						  
						  </li> 
						</ul>
					  </li> 
					
                    <li>
                        <a class="page-scroll" href="#certificates">&nbsp;Certificates</a>
                    </li>-->
					
					   
         <!-- 
		 
		 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		  <i class="fa fa-fw fa-user" style="font-size:14px;"></i>&nbsp;login<span class="caret">&nbsp; </span></a><ul class="dropdown-menu">
            <li><a href="log_customer.php">Customer</a></li>
             
            <li><a href="logging_in.php">Employee</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="careers.php">Careers</a></li>
            
          </ul> --> 
        </li>

                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>

			
				
        <div class="intro-text">
            <div class="container">
				<div class="col-lg-3" hidden>	
				<h4 class="service-heading" >Designer | Programmer | Developer</h4>
				</div>	
				
				
				<div class="col-lg-6">
					
                               <!-- <img class="img-circle img-responsive" align="right" src="img/about/3.jpg" alt=""> -->
                          <br><br><br>
						<div class=" text-left well_dark" >
						<p class="service-heading1" >Bachelor of Science in Computer Science</p>
						<p class="service-subheading1">University of Caloocan City <br>South Campus,Metro Manila</p>
						<hr>
						<p class="service-heading1" >Electronics and Communication Engineering Technology</p>
						<p class="service-subheading1">Mariano Quinto Alarilla Polytechnic College <br>Meycauayan, Bulacan</p>
						<hr>
						<a href="#contact" class="page-scroll btn btn-default"> Contact Me</a>
						
						</div>
					
					</div>
						
				<div class="col-lg-6 center" hidden>
					<br><br><br>
					<div class="owl-carousel3 text-center">
						<div class="item img-responsive"><img src="img/system1.png" class=""></div>
						<div class="item img-responsive"><img src="img/system2.png" class=""></div>
						<div class="item img-responsive"><img src="img/system3.png" class=""></div>
						<div class="item img-responsive"><img src="img/system4.png" class=""></div>
						<div class="item img-responsive"><img src="img/system5.png" class=""></div>
						<div class="item img-responsive"><img src="img/system6.png" class=""></div>
						<div class="item img-responsive"><img src="img/system7.png" class=""></div>
						<div class="item img-responsive"><img src="img/system8.png" class=""></div>
						<div class="item img-responsive"><img src="img/system9.png" class=""></div>
						<div class="item img-responsive"><img src="img/system10.png" class=""></div>
						<div class="item img-responsive"><img src="img/system11.png" class=""></div>
						<div class="item img-responsive"><img src="img/system12.png" class=""></div>
						
						<div class="item img-responsive"><img src="img/web1.png" class=""></div>
						<div class="item img-responsive"><img src="img/web2.png" class=""></div>
						<div class="item img-responsive"><img src="img/web3.png" class=""></div>
						<div class="item img-responsive"><img src="img/web4.png" class=""></div>
						<div class="item img-responsive"><img src="img/web5.png" class=""></div>
					
					</div>
				</div>
					
					
					
			</div>
		</div>
		
    </header>
	
	

    <!-- about me Section -->
  
       
	<div id="aboutme">
		<section class="bg-maze">

			<div class="container text-center">
				<br>
				<div class="row">
					<div class="col-lg-3 well_trans">
						
						<span class="fa-stack fa-4x  text-dark">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-level-up fa-stack-1x fa-inverse"></i>
						</span>
						
						<h4 class="service-heading">My Objectives</h4>
						<hr style="width:70px;height:2px;border:none;color:#333;background-color:#333;" />
						<p class="text-muted">To apply all the knowledge gained from previous experiences, to enhance my skills and decision making. Acquire more knowledge and to be tenured as well.</p>
					</div>
					
					<div class="col-lg-3  well_trans">
						<span class="fa-stack fa-4x text-dark">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">My Creativity</h4>
						<hr style="width:70px;height:2px;border:none;color:#333;background-color:#333;" />
						<p class="text-muted">I like experimenting and creating something out of the box. I can make a design manually or digitally and do some related stuffs simultaneously.  </p>
						
					</div>
					<div class="col-lg-3 well_trans">
						<span class="fa-stack fa-4x text-dark">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-heart-o fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">My Passion</h4>
						<hr style="width:70px;height:2px;border:none;color:#333;background-color:#333;" />
						<p class="text-muted">I love both programming and designing. I like showing my talents, sharing ideas and inspiring other people. I'm always expressing my unique self this way.</p>
						
					</div>
					<div class="col-lg-3 well_trans">
						<span class="fa-stack fa-4x text-dark">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">My Skills</h4>
						<hr style="width:70px;height:2px;border:none;color:#333;background-color:#333;" />
						<p class="text-muted">I'm a fast learner, eager to learn and flexible. I'm also good in marketing strategies, and had a basic knowledge in electronics and communication engineering</p>
					
					</div>
					<div class="col-lg-12" hidden>
					<br>
					<a href="#experience" onclick="showExpe()" class="page-scroll"><button class="btn showmore">Show experiences &nbsp;<span class="caret"></span></button></a>
					</div>
					<br><br><br>
				</div>
				
			</div>
		</section>
		
		<section>	
		
			<div class="container">	
		
			<div class="col-lg-8">	
				<div class="col-lg-12 bg-story">
					<a href="#mystory4" class="preview" data-toggle="collapse">View Story</a>
					<div class="col-lg-3">
						<img src="img/expe/ucc_logo.png">
					</div>
					<div class="col-lg-9">	
						<p class="service-heading">Teaching at University of Caloocan City<br><small>November 16, 2016</small></p>
						
						<p class="text-muted">
							Teaching is not just about discussions. It is also a technique on how people get your ideas.
							It is not just giving grades to your students. While inside the room, what they have to learn/experience
							is what matters most. You have to deal with different people everyday. 
							<br><br>
							Teaching needs patience. You have to clarify the things that they don't understand.
							You have to repeat your lesson until they get it.
							<br><br>
							At the of the day, you'll feel that immeasureable happiness. You're seeing their smiles because they learned something from you.
						
						</p>
						<div id="mystory4" class="collapse">
							<div class="container_box">
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class1.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class2.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class3.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class4.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class5.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class6.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class7.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/class8.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of my Story -->
				
				<div class="col-lg-12 bg-story">
					<a href="#mystory3" class="preview" data-toggle="collapse">View Story</a>
					<div class="col-lg-3">
						<img src="img/expe/csd_logo.jpg">
					</div>
					<div class="col-lg-9">	
						<p class="service-heading">Thesis Exhibit 2016<br><small>February 7, 2016</small></p>
						
						<p class="text-muted">
							In University of Caloocan City CSD, we are celebrating our Annual Thesis Exhibit.
							All graduating students will show their theses to amaze our young students.
							This exhibit shows the outcome of our sleepless nights, stragedy or gimick for the marketing of
							our piece and how did we decide to come up with the idea.
							
						</p>
						<div id="mystory3" class="collapse">
							<div class="container_box">
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/ucc.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/ucc1.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/ucc5.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/ucc4.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/ucc2.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of my Story -->
				
				
				<div class="col-lg-12 bg-story">
					<a href="#mystory2" class="preview" data-toggle="collapse">View Story</a>
					<div class="col-lg-3">
						<img src="img/expe/dotweblabs_logo.jpg">
					</div>
					<div class="col-lg-9">	
						<p class="service-heading">Dotweblabs Web Technologies<br><small>May 21, 2015</small></p>
					
						<p class="text-muted">
							Here's my cool experience while spending our OJT with Dotweblabs. We are taking the tasks seriously.
							We're having brainstorming, online meeting since we're homebase OJT students and remotely tasks.
							I had a chance to improve my skills in web design and web development but before that ofcourse,
							I also experienced tough situations where in I need to do the urgent task and doing self-study simultaneously.
							Eventually, I was able to manage my time and learn how to prioritize tasks that were given to me.
							
						</p>
						<div id="mystory2" class="collapse">
							<div class="container_box">
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/dotweblabs.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/dotweblabs2.jpg">
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/dotweblabs3.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of my Story -->
				
				<div class="col-lg-12 bg-story">
					<a href="#mystory1" class="preview" data-toggle="collapse">View Story</a>
					<div class="col-lg-3">
						<img src="img/expe/mcdo_quirino.jpg">
					</div>
					<div class="col-lg-9">	
						<p class="service-heading">McDonald's All Star Competition<br><small>October 30, 2012</small></p>
					
						<p class="text-muted">
							I had the opportunity to participate in our Mcdonald's All Star Competition where every store has
							their own participants for every field of expertise. I'm representing our store in Quirino Taft for Fries Competition.
							Indeed, it was a great experience for me as a crew. I was very careful during that time. I had a down time but easily
							caught up with the goal.
						</p>
						<div id="mystory1" class="collapse">
							<div class="container_box">
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/mcdo_cert.jpg"> 
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/mcdo_quirino2.jpg"> 
								</div>
								<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" >
								<img src="img/expe/mcdo_quirino3.jpg"> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of my Story -->
				<br><br><br>
			</div> <!-- End of Column Story-->
			
			<div class="col-lg-4">
				<div  class="well_white_links">
					<a  href="https://mypersonality.info/kamiljadecorpuz/" target="_blank">
						<p class="text-muted">My Personality Test Result</p>
						<img src="img/header-mpi-logo.gif"> 
					</a>
				</div>
				
				<div  class="well_white_links">
					<a  href="https://www.upwork.com/o/profiles/users/_~0178b3cc401418e7de/" target="_blank">
						<p class="text-muted">Check me on Upwork</p>
						<img src="img/Upwork.jpg"> 
					</a>
				</div>
				
				<div  class="well_white_links">
					<a  href="https://trello.com/kamiljadecorpuz1" target="_blank">
						<p class="text-muted">Remote Tasks on Trello</p>
						<img src="img/trello.jpg"> 
					</a>
				</div>
				
				<div  class="well_white_links">
					<a  href="https://www.facebook.com/kamscreativedesigns/" target="_blank">
						<p class="text-muted">Kams Creative Designs</p>
						<img src="img/Ads1.png"> 
					</a>
				</div>
			
			</div><!-- End of right Side -->
		</div>
	
		<div class="bg-bible"hidden>
		
				
					<div class="owl-carousel3 text-center">
		
					<div class="item"><h2>I'm enough of an ARTIST to draw freely<br> upon my imagination</h2><p>- Albert Einstein	</p></div>
					<div class="item"><h2>For God so loved the world that he gave his <br>one and only Son,<br> that whoever believes in him shall not perish<br> but have eternal life.</h2><p>- John 3:16</p></div>
					<div class="item"><h2>Trust in the LORD with all your heart and <br>lean not on your own understanding;<br>in all your ways submit to him,<br> and he will make your paths straight.</h2><p>- Proverbs 3:5-6</p></div>
					<div class="item"><h2>So do not fear, for I am with you;<br> do not be dismayed, for I am your God. <br>I will strengthen you and help you;<br> I will uphold you with my righteous right hand.</h2><p>- Isaiah 41:10 </p></div>
					</div>
				
		
		</div>
		
		
		</div> 
	</section>	
		
		
	
		<section id="experience" class="bg-white" hidden>
			
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="col-lg-12 well_white2 ">
								
									<img src="img/id.png" class="item"/>
									<br><br>
									<h4 class="service-heading">Objectives</h4>
									<p>To apply all the knowledge gained from previous experiences, 
									to enhance my skills and decision making. Acquire more knowledge and to be tenured as well.
									
									</p>
								
							</div>
						
							<div><h4 class="service-heading">Awards & Certificates</h4></div>
							
							<div class="container_collapse">
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/18.png"  class="large" data-toggle="modal" data-target="#myModal">3D Modeling</a>
										<small>EGlobio Trainings & Seminars</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/17.png" class="large" data-toggle="modal" data-target="#myModal">IT Interskills 2014</a>
										<small>University of Caloocan City</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/16.png"  class="large" data-toggle="modal" data-target="#myModal">Best Popular Thesis Award</a>
										<small>University of Caloocan City</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/15.png"  class="large" data-toggle="modal" data-target="#myModal">IT Interskills 2013</a>
										<small>University of Caloocan City</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/14.png"  class="large" data-toggle="modal" data-target="#myModal">Big Data Analytics</a>
										<small>by Mr. Erwin E. Globio</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/13.png"  class="large" data-toggle="modal" data-target="#myModal">Android App Development</a>
										<small>by Mr. Erwin E. Globio</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/12.png"  class="large" data-toggle="modal" data-target="#myModal">CC: Adobe Magic</a>
										<small>by Mr. Rollan Banez </small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/11.png"  class="large" data-toggle="modal" data-target="#myModal">Robotics using Arduino</a>
										<small>by Mr. Aljabri Alam</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/10.png"  class="large" data-toggle="modal" data-target="#myModal">On the Job Training</a>
										<small>Dotweblabs Web Technologies</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
							
							
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/9.png"  class="large" data-toggle="modal" data-target="#myModal">Adobe After Effects</a>
										<small>by Ms. Jestine Zulaybar</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/8.png"  class="large" data-toggle="modal" data-target="#myModal">Adobe Premiere</a>
										<small>by by Mr. harvey Octaviano</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/7.png"  class="large" data-toggle="modal" data-target="#myModal">Adobe After Effects</a>
										<small>by Mr. harvey Octaviano</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/6.png"  class="large" data-toggle="modal" data-target="#myModal">3GS vs. Wifi</a>
										<small>by Mr. harvey Octaviano</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/5.png"  class="large" data-toggle="modal" data-target="#myModal">Benefits of Being a Graphic Designer</a>
										<small>by Ms. Kamil Jade Corpuz</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/4.png"  class="large" data-toggle="modal" data-target="#myModal">Infographics</a>
										<small>by Ms. Kamil Jade Corpuz</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/3.png"  class="large" data-toggle="modal" data-target="#myModal">Logo Making </a>
										<small>by Ms. Kamil Jade Corpuz</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/2.png"  class="large" data-toggle="modal" data-target="#myModal">Vector & Vexel Art</a>
										<small>by Ms. Kamil Jade Corpuz</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
								
								<div class="col-lg-12  bg-cert">
									<div class="col-lg-12" >
										<a src="img/certs/1.png"  class="large" data-toggle="modal" data-target="#myModal">Blender Tutorial</a>
										<small>by Ms. Kamil Jade Corpuz</small>
										
									</div>
								</div>
								<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
								
							</div>	<!-- end of column1 Certificates Section-->
							<br><br><br>
						</div>
						<div class="col-lg-6">
							<div class="col-lg-12  bg-light-gray ">
									<a href="#12" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Freelance Graphic Artist</h4>
									<small class="">Remote | Home-based <br>
									Kams Creative Designs 
									</small>
									<br>
									
									<div  id="12" class="collapse">
										<p class="text-muted">
										<i class="fa fa-check"></i> Creating Logos <br>
										<i class="fa fa-check"></i> Web Design <br> 
										<i class="fa fa-check"></i> Web Development <br> 
										<i class="fa fa-check"></i> Game Design & Development <br> 
										<i class="fa fa-check"></i> Brochures and Magazine etc. 
										</p>
								
									</div>
							</div>
							
							
							
					
							<div class="col-lg-12  bg-light-gray">
									<a href="#11" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">College I.T. Professor</h4>
									<small class="">University of Caloocan City <br>
									Biglang Awa St., Edsa Caloocan City, Metro Manila	<br>
									November 16, 2016 - to present
									</small>
									<br>
									
									<div  id="11" class="collapse">
										<p class="text-muted">
										I'm teaching different subjects for every I.T Course in Computer Studies Department. 
										Currently handling a Multimedia club that enhance students capabilities.<br><br>
										Teaching Load/Subjects: <br>
										<i class="fa fa-check"></i> Java Programming <br>
										<i class="fa fa-check"></i> Operating System <br>
										<i class="fa fa-check"></i> Advance Database System <br>
										<i class="fa fa-check"></i> Intro to Computer Application <br>
										<i class="fa fa-check"></i> Computer Graphics <br>
										<i class="fa fa-check"></i> Game Programming <br>
										<i class="fa fa-check"></i> Usability, HCI, UI, Design
										</p>
									</div>
							</div>

						
							<div class="col-lg-12  bg-light-gray">
									<a href="#10" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Associate ICT Teacher</h4>
									<small class="">STI College Caloocan <br>
									June 6, 2016 - October 5, 2016
									</small>
									<br>
									
									<div  id="10" class="collapse">
										<p class="text-muted">
										I'm teaching ICT Students and Non- ICT Students<br><br>
										Teaching Load/Subjects: <br>
										<i class="fa fa-check"></i> Java Programming <br>
										<i class="fa fa-check"></i> Media and Information Literacy
										</p>
									</div>
					
							</div>

						
							
							<div class="col-lg-12  bg-light-gray">
									<a href="#9" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Web Developer/3D Modeler</h4>
									<small class="">GarageFarm.NET Render Farm<br>
									1702 Condo Unit, Paranaque <br>
									April 3, 2016 - May 17, 2016
									</small>
									<br>
									<div  id="9" class="collapse">
										<p class="text-muted">
										Created a Logo, Web Design mockups, Web Development, improving my logic skills through coursera
										</p>
									</div>
							</div>

							
						
									
								
							<div class="col-lg-12  bg-light-gray">
									<a href="#8" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Freelance Video Editor</h4>
									<small class="">Coachibs<br>
									April 15 2016 - April 22, 2016
									</small>
									<br>
									<div  id="8" class="collapse">
										<p class="text-muted">
										Compiled pictures from previous activities of their client, edited and compiled the videos. Added some animations and transitions.
										</p>
							
									</div>
							</div>
							
							
							
							<div class="col-lg-12  bg-light-gray">
									<a href="#7" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Layout Designer</h4>
									<small class="">DMCJ Graphic Center<br>
									232 Juan Luna, Binondo, Metro Manila <br>
									March 17, 2016 - March 31, 2016
									</small>
									<br>
									
									<div  id="7" class="collapse">
										<p class="text-muted">
										Created a newsletter from cover to back cover. Responsible for the layout and content designs and graphics.
										</p>
						
									</div>
							</div>

							
						
							<div class="col-lg-12  bg-light-gray">
									<a href="#6" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Freelance Graphic Designer</h4>
									<small class="">GarageFarm.NET Render Farm<br>
									December 1, 2015
									</small>
									<br>
									<div  id="6" class="collapse">
										<p class="text-muted">
										Edited a flyer/leaflet for the company. Removing and adjusting of contents base on my client's idea. This is an impromptu and not a homebase work.
										</p>
							
									</div>
							</div>

							
							<div class="col-lg-12  bg-light-gray">
									<a href="#5" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">OJT Web & Graphic Designer</h4>
									<small class="">Dotweblabs Web Technologies<br>
									Gen. Trias Cavite <br>
									May 5, 2015 - July 26, 2015
									</small>
									<br>
									<div  id="5" class="collapse">
										<p class="text-muted">
										Created a Logo, Web Design mockups, Web Development, we help our clients to create a website for them. 
										Responisble for graphic materials, UI and UX.
										</p>
									
									</div>
							</div>
							
							
							<div class="col-lg-12  bg-light-gray">
									<a href="#4" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Part time Layout Designer</h4>
									<small class="">Aidalin Press Inc.<br>
									Kabulusan 1 Street, Caloocan City<br>
									July 12, 2013 - November 30, 2013
									</small>
									<br>
									<div  id="4" class="collapse">
										<p class="text-muted">
										Scanning and editing of documents. I was assigned to check confidential files, create receipts and edit the contents etc.
										</p>
								
									</div>
							</div>
							
							
							<div class="col-lg-12  bg-light-gray">
									<a href="#3" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Service Crew</h4>
									<small class="">Golden Arches Development Inc.<br>
									Pres. Quirino Ave., cor. San Andres St. Malate, Manila<br>
									February 6, 2012 - June 5, 2013
									</small>
									<br>
									<div  id="3" class="collapse">
										<p class="text-muted">
										Had experience as an assembler, counter person, fry and lobby person. Flexible with different tasks given within the day.
										</p>
							
									</div>
							</div>
							
							
							<div class="col-lg-12  bg-light-gray">
									<a href="#2" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Service Crew</h4>
									<small class="">Franchising McDLC Seafood's Inc.<br>
									McDonald's SM City Marilao, Ibayo Marilao, Bulacan<br>
									May 16, 2011 - January 5, 2012
									</small>
									<br>
									<div  id="2" class="collapse">
										<p class="text-muted">
										Had experience as a fry and lobby person. I was assigned as spagetti person, gravy person, rice person, and buns & grill person.
										</p>
									
									</div>
							</div>
							
							<div class="col-lg-12  bg-light-gray">
									<a href="#1" class="showinfo" data-toggle="collapse"><i class="fa fa-info-circle"></i></a>
									<h4 class="service-heading">Sales Lady</h4>
									<small class="">Miani's School and Office Supplies<br>
									1121 San Andres St. Malate, Manila<br>
									April 7, 2010 - April 23, 2011
									</small>
									<br>
									<div  id="1" class="collapse">
										<p class="text-muted">
										Responsible for the sales/marketing strategy. Maintaining the cleanliness of the store as well as the items/products.
										</p>
								
									</div>
							</div>
							<br><br><br>
						</div><!-- end of column 2 Experience Section-->
						
							<div class="col-lg-3 ">	
						
									<div class="col-lg-12">
										<h4 class="service-heading"> PROGRAMMING SKILLS</h4>
										<p class="text-muted">
										You may now a lot of programming language but being able to use it is when you can call it skill.
										</p>
										<!-- <a href="#progskills" class="readmore" data-toggle="collapse">Show >></a> -->
										
									</div>	
								
									<div id="progskills">
										
										<div class="col-lg-12">
											<p class="large">Game Development</p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="70"
												aria-valuemin="0" aria-valuemax="100" style="width:80%">
												<span class="sr-only">80% Complete</span>
												</div>
											</div>
										</div>
										
										
										<div class="col-lg-12">
											<p class="large">Web Development</p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="70"
												aria-valuemin="0" aria-valuemax="100" style="width:75%">
												<span class="sr-only">75% Complete</span>
												</div>
											</div>
										</div>
										
										<div class="col-lg-12">
											<p class="large">System/Applications</p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="70"
												aria-valuemin="0" aria-valuemax="100" style="width:70%">
												<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</div>
										
									</div> <!-- end of progskills -->
										
										
									<div class="col-lg-12">
										<br><br>
										<h4 class="service-heading">TOOLS / SOFTWARE APPLICATIONS</h4>
										<p class="text-muted">
										Knowing more software will help you create a better output.
										</p>
										<a href="#tools" class="readmore" data-toggle="collapse">Show >></a>
										<br><br>
										
										
									</div>	
									<div id="tools" class="collapse">
										<div class="col-lg-12 text-center">
												<img src="img/icons/icons_resume.png" >
												
										
										</div>
									</div><!-- end of hide / show -->
							</div> <!-- end of column3 Programming Section -->
							
					</div>		<!-- end of row -->
				</div>		<!-- end of container-->
		</section>
		
	<div id="portfolio" hidden>
		<div class=" text-center bg-blue" >
				
			 <h1 style="font-size:30px;" align="center" class="">MY PORTFOLIO</h1>
			<p>Compilation of my ideas.</p>
			<p class="btn btn-default btn-xs"> Graphic Design <span class="badge"> 23 </span></p> &nbsp;&nbsp;
			<p class="btn btn-default btn-xs"> Illustration <span class="badge"> 18 </span></p> &nbsp;&nbsp;
			<p class="btn btn-default btn-xs"> 3D Design <span class="badge"> 2 </span></p> &nbsp;&nbsp;
			<p class="btn btn-default btn-xs"> Infographics <span class="badge"> 1 </span></p> &nbsp;&nbsp;
			<p class="btn btn-default btn-xs"> Logo <span class="badge"> 9 </span></p> &nbsp;&nbsp;
			<p class="btn btn-default btn-xs"> Tee Design <span class="badge"> 14 </span></p> &nbsp;&nbsp;
			<p class="btn btn-default btn-xs"> Game Design <span class="badge"> 5 </span></p>
		</div>
		 
		<div  class="bg-gray">
			<div class="container">	
				<br><br><br>
				
				<div class="container_box">

					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR19.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR18.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN8.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN9.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN10.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN11.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN12.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN13.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN14.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR16.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS24.jpg"><div ><p class="portfolio-tags">Infographics </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR17.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS22.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS23.jpg"><div ><p class="portfolio-tags">Graphics | 3D Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR12.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR13.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR14.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR15.jpg"><div ><p class="portfolio-tags">Illustration </p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS14.jpg"><div ><p class="portfolio-tags">Illustration <a href="http://online.fliphtml5.com/rixe/jaae/" target="_blank" class="preview">Preview</a></p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS15.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS16.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS17.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS18.jpg"><div ><p class="portfolio-tags">Graphic Design <a href="http://online.fliphtml5.com/rixe/jxtl/" target="_blank" class="preview">Preview</a></p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS19.jpg"><div ><p class="portfolio-tags">Graphic Design <a href="http://online.fliphtml5.com/rixe/jxtl/" target="_blank" class="preview">Preview</a></p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS20.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS21.jpg"><div ><p class="portfolio-tags">Graphic Design <a href="http://online.fliphtml5.com/rixe/jxtl/" target="_blank" class="preview">Preview</a></p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR6.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR7.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS2.jpg" alt="dfvs"><div ><p  class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign1.jpg"><div ><p class="portfolio-tags">3D Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO1.jpg"><div ><p class="portfolio-tags">Logo | Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO2.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS7.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS8.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO3.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR8.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR9.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN1.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO4.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO5.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS3.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN2.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR10.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR11.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign2.jpg"><div ><p class="portfolio-tags">Game Design | Game Devt</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN3.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN4.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO6.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO7.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO8.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/LOGO9.jpg"><div ><p class="portfolio-tags">Logo</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS4.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS5.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS6.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN5.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN6.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/TEEDESIGN7.jpg"><div ><p class="portfolio-tags">Tee Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign3.jpg"><div ><p class="portfolio-tags">Game Design | Game Devt</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign4.jpg"><div ><p class="portfolio-tags">Game Design | Game Devt</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign5.jpg"><div ><p class="portfolio-tags">Interior Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign6.jpg"><div ><p class="portfolio-tags">Interior Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign7.jpg"><div ><p class="portfolio-tags">Interior Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign8.jpg"><div ><p class="portfolio-tags">Interior Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign9.jpg"><div ><p class="portfolio-tags">Game Design | Game Devt	</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign10.jpg"><div ><p class="portfolio-tags">Game Design | Game Devt</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign11.jpg"><div ><p class="portfolio-tags">Character Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/3Ddesign12.jpg"><div ><p class="portfolio-tags">Character Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS1.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS9.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS10.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS11.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS12.jpg"><div ><p class="portfolio-tags">Graphic Design <a href="http://online.fliphtml5.com/rixe/bgyu/" target="_blank" class="preview">Preview</a></p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/PRINTS13.jpg"><div ><p class="portfolio-tags">Graphic Design</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR1.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR2.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR3.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR4.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
					<div class="gallery_pics well_white pic"  data-toggle="modal" data-target="#myModal" ><img src="img/lowres/VECTOR5.jpg"><div ><p class="portfolio-tags">Illustration</p></div></div>
				  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
				</div>
				<br><br><br>
			</div>
        </div>
	</div>

		

		
		<div class=" text-center bg-blue-thin" >
		</div>
    <footer class="bg-footer" id="contact">
		
        <div class="container">
            <div class="row">
				<div class="col-md-2">
						
                </div>
                <div class="col-md-2">
						<br><img src="img/logo_me.png" class="img-responsive"><br><br>
                </div>
                <div class="col-md-2 text-left	">
				<br>
					<div class="well_trans">
						<a href="#aboutme" onclick="aboutMe()"class="page-scroll">ABOUT ME</a><br>
						
                        <a href="#experience" onclick="experience()" class="page-scroll">EXPERIENCES</a><br>
                        <a href="#portfolio"  onclick="portfolio()"class="page-scroll">PORTFOLIO</a><br><br>
                        
                        <a href="https://www.facebook.com/kamscreatiivedesigns/" target="_blank">Kams Creative Designs</a><br><br>
					</div>	
						
                </div>
			
				
				
                <div class="col-md-4 text-left	">
					<div class="well_trans">
						<br>
                       <!-- <a href="#" class="social-buttons"><i class="fa fa-twitter"></i>&nbsp; twitter</a><br> 
                       <a href="#"><i class="fa fa-facebook"></i>&nbsp; facebook</a><br>
                       <a href="#"><i class="fa fa-linkedin"></i>&nbsp; linkedin</a><br>
                       <a href="#"><i class="fa fa-google-plus"></i>&nbsp; google</a><br>-->
                    
              
					
					<a href="https://ph.linkedin.com/in/kamil-jade-corpuz-5b0978b7" target="_blank"><i class="fa fa-2x fa-linkedin"></i></a> &nbsp;&nbsp;&nbsp;
					<a href="https://www.behance.net/Kamiljade" target="_blank"><i class="fa fa-2x fa-behance"></i></a>&nbsp;&nbsp;&nbsp;
					
					
					<br><br>
					<i class="fa fa-envelope"></i>&nbsp; kamiljadecorpuz1404@gmail.com<br>
					<i class="fa fa-phone"></i> &nbsp; (02) 618-5933 <br>
					&nbsp;<i class="fa fa-mobile"></i> &nbsp; (+63) 926 - 319 - 7128
					<br>
					<span class="copyright  text-left" >Copyright &copy; All rights reserved KJC 2016</span><br>
					</div>	
                </div>
            </div>
        </div>
    </footer>

			  
			  
		<div id="myModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
					
						<img class="img-thumbnail" src=""/>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

	
		<script>

				
				$(document).ready(function() {
				
				
				
				$('img').on('click', function () {
					var image = $(this).attr('src');
					
					$('#myModal').on('show.bs.modal', function () {
					$(".img-thumbnail").attr("src", image);
			
					
					});
					
					
				});
				
				$('a').on('click', function () {
					var image1 = $(this).attr('src');
					
					$('#myModal').on('show.bs.modal', function () {
					$(".img-thumbnail").attr("src", image1);
			
					
					});
					
					
				});

 
					$('.owl-carousel_1').owlCarousel({
						loop:true,
						margin:10,
						nav:true,
						responsive:{
							0:{
								items:2
							},
							600:{
								items:3
							},
							1000:{
								items:8
							}
						}
					});
					
					$('.owl-carousel2').owlCarousel({
						loop:true,
						margin:10,
						nav:true,
						responsive:{
							0:{
								items:1
							},
							600:{
								items:3
							},
							1000:{
								items:3
							}
						}
					});
				
					var owl = $('.owl-carousel');
						owl.owlCarousel({
							items:1,
							loop:true,
							margin:10,
							autoplay:true,
							autoplayTimeout:3000,
							autoplayHoverPause:true
						});
						$('.play').on('click',function(){
							owl.trigger('autoplay.play.owl',[3000])
						});
						$('.stop').on('click',function(){
							owl.trigger('autoplay.stop.owl')
						});
						
						
						
						
						var owl = $('.owl-carousel3');
						owl.owlCarousel({
							items:1,
							loop:true,
							margin:10,
							autoplay:true,
							autoplayTimeout:4000,
							autoplayHoverPause:true,
							responsive:{
							0:{
								items:1
							},
							600:{
								items:1
							},
							1000:{
								items:1
							}
							
							
						}
							
						});
						$('.play').on('click',function(){
							owl.trigger('autoplay.play.owl',[3000])
						});
						$('.stop').on('click',function(){
							owl.trigger('autoplay.stop.owl')
						});
						
						
						var owl = $('.owl-carousel4');
						owl.owlCarousel({
							items:1,
							loop:true,
							margin:10,
							autoplay:true,
							autoplayTimeout:3000,
							autoplayHoverPause:true,
							responsive:{
							0:{
								items:2
							},
							600:{
								items:3
							},
							1000:{
								items:5
							}
							
							
						}
							
						});
						$('.play').on('click',function(){
							owl.trigger('autoplay.play.owl',[3000])
						});
						$('.stop').on('click',function(){
							owl.trigger('autoplay.stop.owl')
						});
						
						$('.owl-carousel5').owlCarousel({
						loop:true,
						margin:10,
						responsiveClass:true,
						responsive:{
							0:{
								items:1,
								nav:true
							},
							600:{
								items:3,
								nav:false
							},
							1000:{
								items:5,
								
								
							}
						}
					})
											
					
				});
			
								
			</script>
			
	</div>
</body>

</html>

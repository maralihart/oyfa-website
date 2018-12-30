<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
<style type="text/css">
		.jumbotron masthead{
			background-image: url('back.jpg');
		}
		
		.relief {
			text-align: center;
		}
		
		#hero, .foot{
			padding: 10px 60px;
			background-color: #FFFFFF;
			box-shadow: 5px 5px 3px #888888;
			border-style: solid;
			border-width: 2px;
			border-color: #C0C0C0;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
					
		}
		
		.imgborder{
		border-style: transparent;
			border-width: 2px;
			border-color: #C0C0C0;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			<!-- box-shadow: 5px 5px 3px #888888;
			border-radius: 6px; -->
		}
		
		.bw {
			-webkit-transition: all 1s ease;
			-moz-transition: all 1s ease;
			-o-transition: all 1s ease;
			-ms-transition: all 1s ease;
			transition: all 1s ease;
		}
		
		.footer{
			background-color: #000000;
			
		}
 
		.bw:hover {
			-webkit-filter: grayscale(100%);
			cursor:pointer;
		}
		
	 /* Carousel base class */
    .carousel {
	  margin-top: 28px;
      margin-bottom: 0px;
	  padding-bottom: 0px;
	  
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 400px;
    }
    

    .carousel-caption {
      background-color: transparent;
      position: static;
      padding: 0 0px;
	  margin-top: 150px;
	  
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 2px 1px rgba(0,0,0,.4);
    }

      .carousel-caption h1 {
        font-size: 40px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 14px;
      }
		#butn{
		padding-left:100px;
		padding-right:100px;
		}
	.responsive-iframe-container {
		position: relative;
		padding-bottom: 56.25%;
		padding-top: 30px;
		height: 0;
		overflow: hidden;
		}

		.responsive-iframe-container iframe,
		.vresponsive-iframe-container object,
		.vresponsive-iframe-container embed {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		}	
	.hr1 {
		height: 20px;
		background: url(img/horizontal-rule-ornamental-3-black.png) no-repeat center;
		border: none;
		}
    </style>
	<!--
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('#myModal').modal('show');
		});
	</script>-->
</head>

<body>
<!--
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><a href="relief.php">Donate to Typhoon Haiyan relief efforts</a></h4>
        </div>
        <div class="modal-body">
			<img src="img/aftermath.jpg">
			<br><br>
			<p>"The stories coming out of the Philippines are unimaginable. Rushing water and wind tearing children away from their parents' arms. A death toll that may be over 10,000. A city of 200,000 in which no buildings appear to have survived intact.</p>
			<p>One of the most intense typhoons on record, Haiyan (locally known as Yolanda) left catastrophic destruction behind." -CNN.com (<a href="http://www.cnn.com/2013/11/09/world/iyw-how-to-help-typhoon-haiyan/index.html">source</a>)</p>
			<p>Please help if you can. A small donation will go a long way in helping those in the Philippines who have lost basically everything... </p>
			<p>Check out local news coverage of typhoon relief and OYFA's part in it:</p>
			<p><a href="http://www.nbc29.com/story/23936787/uva-student-group-fundraises-for-typhoon-survivors">NBC29 story</a></p>
			<p><a href="http://www.newsplex.com/home/headlines/Local-Students-Raising-Money-For-Typhoon-Haiyan-Victims-231494671.html">CBS Newsplex story</a></p>
			<p><a href="relief.php">Click here for more information -></a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
-->
	<!-- Index page uses different header because of carousel element and carousel styles -->
		
		<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <!-- Start Jumbotron -->
			<div class="jumbotron masthead" style="background-image:url(img/oyfa2015.jpg);">
				<div class="container">
					<div class="row-fluid">

						
						<div class="span4 offset4">
							<img src = "img/oyfalogo.png"></a>
						</div>

					</div>
					
					<div class="row-fluid">
						<!--Social Media Icons Max: 4 Due to Span 4 -->
						<div class="span1 bw offset4">
							<a href="https://www.facebook.com/groups/2200026638/"><img src="social_icons/facebook.png  "></a>
						</div>
						<div class="span1 bw">
							<a href="https://twitter.com/oyfaatuva"><img src="social_icons/twitter.png  "></a>
						</div>
						<div class="span1 bw">
							<a href="http://www.youtube.com/uvaoyfa"><img src="social_icons/youtube.png "></a>
							</div>
						<div class="span1 bw">
							<a href="http://instagram.com/oyfaatuva"><img src="social_icons/instagram.png "></a>
						</div>

					</div>
			</div>
		</div>
		<!-- End Jumbotron -->
          
	  </div>
    </div>
      
	  <!-- /.carousel -->
	  <!--<div class="relief">
		<h1><a href="relief.php">DONATE TO TYPHOON HAIYAN RELIEF EFFORTS &raquo;</a></h1>
		<h2>Total raised so far: <strong>$6,316.52</strong></h2>
	  </div>-->

		
			<!-- Start Body Page -->
    	<div class="container" style="padding-top:20px; padding-bottom: 20px;" >

			<!-- features -->
					<div class="row">
					<h1 style="text-align:center;">WHAT'S OYFA UP TO?</h1> <h5 style="text-align:center;"> You must be logged into your Netbadge Account to see the OYFA Calendar </h5>
					<hr class="hr1">
					<div class= "span3 offset1">
					
					<iframe src="https://www.google.com/calendar/embed?src=virginia.edu_u56v4fbba5vnl358nvef8qhd6s%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>					
					</div>
					</div>
					<hr class="hr1">
					<div class="row-fluid" style="padding-bottom: 20px">
					
					
					<div class="span3 bw">
					<a href="newcouncil.php">
					<img src="features/officers.jpg" class="imgborder">
					</div>
					<div class="span3 bw" class="imgborder">
					<a href="donate.php">
					<img src="features/donate.jpg" class="imgborder"></a>
					</div>
					<div class="span3 bw">
					<a href="barrio2015.php">
					<a href="barrio2015.php">
					<img src="features/barrioLink.png" class="imgborder"></a>
					</div>
					<div class="span3 bw" >
					<a href="https://www.facebook.com/groups/362869790424548/">
					<img src="features/alumni.jpg" class="imgborder"></a>
					</div>
				</div>
			
			<!--<div class="offset1" >
			
			<iframe src="http://www.google.com/calendar/embed?src=virginia.edu_t8p5g8tsfepu4218ijskqeoihc%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			
			<br>			
			</div> --> 
			
			<div class="row-fluid">
				<div class="span12">
			<!-- Start Hero Unit -->
			<div id="hero" class="hero-unit">
				
				
				<ul class="nav nav-tabs">
					<li class = "active"><a href="#home" data-toggle="tab"><b>Why Join?</b></a></li>
					<li><a href="#donate" data-toggle="tab"><b>Donate</b></a></li>
					<li><a href="#barrio" data-toggle="tab"><b>Barrio Fiesta</b></a></li>
					<li><a href="#cio" data-toggle="tab"><b>CIO of the Year 2013</b></a></li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="home"><div class="row-fluid">
	
				<div class="span10">
						<h1>Why Join?</h1><hr>
						<p>The Organization of Young Filipino Americans (OYFA) takes pride in the fact that one need not be young, nor Filipino, nor American to join. We are an extraordinarily diverse group that welcomes anyone with open arms, like a true Filipino family. OYFA offers endless opportunities for community service, intramural sports, networking, learning about Filipino culture, overall camaraderie, and so much more. Won’t you join our OYFAmily?
						
						</p>
						<div class="span6">
						<img src="img/whyjoin.jpg" class="img-polaroid">
					</div>
					</div>
				</div></div>
				
				
					<div class="tab-pane" id="donate"><p><h1>OYFA Excellence Scholarship</h1></p>
						<p>The OYFA Excellence Scholarship shall be awarded to an outstanding first-year student who displays enthusiasm and dedication to OYFA and its goals, has excelled in his/her academic studies, and demonstrates financial need. The Scholarship shall also be awarded based on extra-curricular activities, leadership ability and experience and community service.</p>
						<p><button class="btn btn-large btn-primary" type="button" onclick="location.href='./donate.php'">Learn more &raquo;</button> </p></div>
						
					<div class="tab-pane" id="barrio"><h1>Barrio Fiesta</h1>
					<blockquote><p><strong>"It showed,rather than told the audience of what it means to be Filipino and what values are most important to Filipino culture: family, working hard, and support/loyalty."</strong></p>
					<small>Mary Wang, ASU</small></blockquote>
					
				
						<p>We know what you’re thinking, “Whats the big deal about Barrio?”. It’s only one of the best cultural shows around the campus, showcasing ~100 performers. It’s only the culmination of months of skit and dance practice and bonding with your best friends everyday. Many (actually probably most) of our choreographers, dancers, and actors/actresses aren’t Filipino at all!  Doing Barrio will be something that you’ll remember even after you leave college. Just hear the cheering from the front row of UVa alumni that come every year.</p>			
						<img src="features/barrio2015.jpg" class="img-polaroid">
						<p><button class="btn btn-large btn-primary" type="button" onclick="location.href='./barrio-review.php'">Read the review &raquo;</button> </p>
						<p><button class="btn btn-large btn-primary" type="button" onclick="location.href='./barrio.php'">Barrio 2014 &raquo;</button> </p></div>
					
					
					
					<div class="tab-pane" id="cio"><h1>StudCo CIO of the Year 2013</h1><blockquote><p><strong>The title says it all: our diversity, our events, our members are the best!</strong></p>
					</blockquote>
					<div class="row-fluid"><div class="span6 offset2"><img src="img/cio2013.jpg"  class="img-polaroid"></div>
						<div class="span10">
						
						</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
			</div>
			
			<!-- End Hero Unit -->
			
      
		
      <!-- Disclosure Statement -->
     <!-- End Disclosure -->

				</div>
		
     <!-- End container -->

<?php include 'footer.php'; ?>
</body>
</html>

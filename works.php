<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!--Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="The website of Graphic, Motion, UI artist Andres Aranguibel">
<meta name="viewport" content="width=device-width" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<!--Icon -->
<link rel="icon" 
      type="image/gif" 
      href="img/icon.gif" />
<!--Title -->
<link rel="prev" href="http://www.designerandres.com/philosophy.php"/>
<link rel="next" href="http://www.designerandres.com/presence.php"/>
<link rel="prefetch" href="http://www.designerandres.com/presence.php"> <!-- Firefox -->
<link rel="prerender" href="http://www.example.com/presence.php"> <!-- Chrome -->
<title>Designs and Videos - DesignerAndres: Graphic Designer Andres Aranguibel</title>
<!-- Load Bootstrap -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

<!-- ******************************************************** -->
<!-- *** Load B2W  styles  -  include in your web page header -->
<!-- ******************************************************** -->

<link href="css/tooltip.css" rel="stylesheet">
<!--<link href="css/prettyPhoto.css" rel="stylesheet">-->

<!-- ******************************************************** -->
<!-- *** End B2W  styles                                      -->
<!-- ******************************************************** -->

<!--styles -->
<link rel="stylesheet" type="text/css" href="css/careers.css" />
<link rel="stylesheet" href="css/magnific-popup.css"> 


<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->


<!--[if lt IE 9]>
<script>
  var e = ("abbr,article,aside,audio,canvas,datalist,details," +
    "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
    "progress,section,time,video").split(',');
  for (var i = 0; i < e.length; i++) {
    document.createElement(e[i]);
  }
</script>
<![endif]-->
<script>
	<!--Google Analytics-->
	var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39443927-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
</script>

</head>

<body>
<!-------------HEADER -->
<header class="careersPageHeader" id="">
		<section class="headerContainer">
		<a href="index.php" class="" id="" title="Click to go home"><img title="DesignerAndres Logo" class="topLogo" alt="Logo" src="img/Logo.png" width="100%" height"100%"/>
		<h1 class="siteName">DesignerAndres</h1></a>
		<nav class="careersPageNav">
			<div class="navItemsContainer">
				<a href="presence.php" class="navItems">
					PRESENCE
				</a>
				<a href="works.php" class="navItems" style="color:black;">
					WORKS
				</a>
				<a href="philosophy.php" class="navItems">
					PHILOSOPHY
				</a>
				<a href="story.php" class="navItems">
					STORY
				</a>
				<a href="index.php" class="navItems">
					HOME
				</a>
			</div>
			<button type="button" class="headerButton reachMe">REACH ME!</button>
			</div>
			<div class="menuButton">
				<img class="menuButtonImg" title="Menu Button" alt="Click for more options" src="img/menuButton.png" width="50" height="31"/>
			</div>
		</nav>
		</section>
		<div class="mobileNavContainer" title="">
			<a href="index.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonHome">HOME</div>
			</a>
			<a href="story.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonAbout">STORY</div>
			</a>
			<a href="philosophy.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonInternships">PHILOSOPHY</div>
			</a>
			<a href="works.php" class="mobileNavButtons" style="background-color:#f9af00;color:white;">
				<div alt="" class="mobileButtonBenefits">WORKS</div>
			</a>
			<a href="presence.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonCareers">PRESENCE</div>
			</a>
		</div>
	</header>
<!-------------BODY -->
<?php  

    // check for a successful form post  
    if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  

    // check for a form error  
    elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

?>
<div id="contact" style="display:none;">
   <div class="contact-title">Send me a message!</div>
   <div class="contact-message">
        <div class="inputContainer">
            <form role="form" method="POST" action="contact-form-submission.php">
            <div class="inputLabel">
                <p>Name:</p>
                <input tabindex=1 type="text" name="contact_name" class="form-control" id="input1" required/>
            </div>
            <div class="inputLabel">
                <p>Phone Number:</p>
                <input tabindex=2 type="phone" name="contact_phone" class="form-control" id="input2" required/>
            </div>
            <div class="inputLabel">
                <p>Your E-mail Address:</p>
                <input tabindex=3 type="email" name="contact_email" class="form-control" id="input3" required/>
            </div>
            <div class="inputLabelFreeform">
                <p>Message:</p>
                <textarea tabindex=4 name="contact_message" class="form-control" id="input4" placeholder="Please don't submit any website URLs. Your message will be discarded. Don't take it to heart - just spam prevention." required></textarea>
            </div>
	        <input type="hidden" name="save" value="contact">
            <?php
              require_once('recaptchalib.php');
              $publickey = "6LeMP_wSAAAAAPzRe29-kZM3XuTnz-EDchl6Md5F"; // you got this from the signup page
              echo recaptcha_get_html($publickey);
            ?>
            <button tabindex=5 type="submit" class="contentButton shipIt" title="Send that message!" name="sendMessage">SHIP IT!</button>
            </form>
         </div>
   </div>
</div>
<!-------------END CONTACT -->
<div class="universalContainer"> 
	<section class="careersBody" id="benefits">
		<div class="headerQuoteContainer">
			<article class="headerQuote left indigo">
				<h1>To build identities, and make brands universal.</h1>
			</article>
		</div>
		<div class="mainContentContainer main">
			<article class="mainContent">
				<div class="mainContentTitle">It's always about the big idea.</div>
				<div class="skillsDesktop">
					<p class="mainContentCopy">Call it vision, imagination, or seeing; it all comes down to the same thing: the ability to envision a final result in your mind's eye, and then to make it so with your tools at hand. It's never been about the gear. It's always been about seeing something, knowing how you want it to look, and making it so. Making it so is the easy part; seeing it in the first place is what makes a designer. Powers of observation are everything. </p>
					<p class="mainContentCopy"><b>The tools I use to share ideas:</b>
						<div class="skillsWrapper">
							<div class="skillsItem">
								<img src="img/skill-1.png" class="skillsImage"/>
								<div class="skillsContent">
									<ul>
										<li>After Effects</li>
										<li>Premiere</li>
										<li>Final Cut Pro</li>
										<li>Flash</li>
									</ul>
								</div>
							</div>
							<div class="skillsItem">
								<img src="img/skill-2.png" class="skillsImage"/>
								<div class="skillsContent">
									<ul>
										<li>PhotoShop</li>
										<li>Illustrator</li>
										<li>InDesign</li>
									</ul>
								</div>
							</div>
							<div class="skillsItem">
								<img src="img/skill-3.png" class="skillsImage"/>
								<div class="skillsContent">
									<ul>
										<li>InVision</li>
										<li>Proto.io</li>
										<li>Solidify</li>
										<li>Axure</li>
									</ul>
								</div>
							</div>
							<div class="skillsItem">
								<img src="img/skill-4.png" class="skillsImage"/>
								<div class="skillsContent">
									<ul>
										<li>HTML5/CSS3</li>
										<li>JS/jQuery</li>
										<li>Processing.js</li>
										<li>Bootstrap</li>
									</ul>
								</div>
							</div>
							<div class="skillsItem">
								<img src="img/skill-5.png" class="skillsImage"/>
								<div class="skillsContent">
									<ul>
										<li>Wordpress</li>
										<li>Drupal</li>
										<li>Joomla</li>
									</ul>
								</div>
							</div>
							<div class="skillsItem">
								<img src="img/skill-6.png" class="skillsImage"/>
								<div class="skillsContent">
									<ul>
										<li>Github (Git)</li>
										<li>Bitbucket (Git)</li>
										<li>Subversion</li>
									</ul>
								</div>
							</div>
						</div>
					</p>
				</div>
				<div class="skillsMobile">
					<p class="mainContentCopy">Call it vision, imagination, or seeing; it all comes down to the same thing: the ability to envision a final result in your mind's eye, and then to make it so with your tools at hand. It's never been about the gear. It's always been about seeing something, knowing how you want it to look, and making it so. Making it so is the easy part; seeing it in the first place is what makes a designer. Powers of observation are everything. </p>
					<p class="mainContentCopy"><b>The tools I use to share ideas:</b>
						<ul>
							<li><b>Motion Graphics:</b> After Effects, Premiere, Final Cut Pro, Motion, Flash<span class="subcaption"> (7+ yrs.)</span></li>
							<li><b>Graphic Layout & Composition:</b> PhotoShop, Illustrator, InDesign<span class="subcaption"> (7+ yrs.)</span></li>
							<li><b>Wireframing, UI/UX Design:</b> InVision, Proto.io, Solidify, Axure<span class="subcaption"> (5+ yrs.)</span></li>
							<li><b>Front-End Web:</b> HTML5, CSS3, JavaScript, jQuery, Processing.js, Bootstrap<span class="subcaption"> (3+ yrs.)</span></li>
							<li><b>Content Management Systems:</b> Wordpress, Drupal, Joomla<span class="subcaption"> (2+ yrs.)</span></li>
							<li><b>Versioning:</b> Git (Github, Bitbucket), Subversion<span class="subcaption"> (2+ yrs.)</span></li>
						</ul>
					</p>
				</div>
                <!--<button type="button" class="contentButton reachMe">TELL ME ABOUT YOUR BIG IDEA</button>-->
			</article>
		</div>
		<!--<div id="livesearch"></div><p id="output"></p>-->
        <div class="thirdsWrapper parent-container">
        	<h1 class="sectionTitle">A few of my works:</h1>
        <!-- ******************************************************** -->
        <!-- *** Start of container which will hold  Behance  gallery -->
        <!-- Paste this into your HTML way you want your gallery to appear -->
        <!-- ******************************************************** -->
        <div class="container" style="text-align:left;">
            <div class="row">
                <div class="span12">

                    <!-- Start Behance -->

                    <!-- Animated loading GIF -->
                    <div id="loading" class="hide">
                        <img src="imgs/loading.gif">    
                    </div>
                    <!-- End Animated loading GIF -->

                    <!--  thumbnails container -->
                    <div id="imagescontainer">
                        <ul id="imageslist" class="clearfix hide"></ul>
                    </div><!-- end imagescontainer --> 

                    <!-- Project details container -->
                    <div id="projectcontainer" class="hide">
                        <a id="back-to-imageslist" href="#"><div id="back-to-imageslistB">Back to Gallery</div></a>
                        <div id="behance-detail"></div>
                    </div><!-- end projectcontainer --> 

                    <!-- end Behance -->

                </div>  <!-- end span 12 -->
            </div>  <!-- end row -->
        </div> <!-- end container -->

        <!-- ******************************************************** -->
        <!-- ** End of container which will hold  Behance  gallery ** -->
        <!-- ******************************************************** -->
        </div>
	</section>
<!-------------FOOTER -->
<footer class="careersPageFooter">
	<h4>Designed and hand-coded with heart and passion. Andres Aranguibel &copy; 2014</h4>
</footer>
</div>
<!--scripts -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/careers.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script>
	$('.parent-container').magnificPopup({
  delegate: 'a.gallery', // child items selector, by clicking on it popup will open
  type: 'image'
  // other options
});
	$('.mobileNavContainer').hide();
</script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>

<!-- ******************************************************** -->
<!-- *** Load B2W Required scripts -->
<!-- ******************************************************** -->

<script src="js/handlebars.js"></script>
<script src="js/behance.min.js"></script>
<script src="js/b2w.js"></script>

<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
	   $('.reachMe').click(function(){
		   $('#contact').dialog({modal:true}); 
	   });
		$(".shipIt").click(function(){
			$("#contact").dialog("close");
		});
	});
</script>
</body>
</html>

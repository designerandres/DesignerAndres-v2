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
<link rel="next" href="http://www.designerandres.com/story.php"/>
<link rel="prefetch" href="http://www.designerandres.com/story.php"> <!-- Firefox -->
<link rel="prerender" href="http://www.example.com/story.php"> <!-- Chrome -->
<title>DesignerAndres Home - Graphic Designer Andres Aranguibel</title>
<!--styles -->
<link rel="stylesheet" type="text/css" href="css/careers.css" />
<!--[if lt IE 9]>
<script>
  var e = ("abbr,article,aside,audio,canvas,datalist,details," +
    "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
    "progress,section,time,video").split(',');
  for (var i = 0; i < e.length; i++) {
    document.createElement(e[i]);
  }
  
  function iE8(){
  	document.getElementById("iE8video").setAttribute("style","display:block !important;");
  }
</script>
<![endif]-->
<script type="text/javascript">
  (function(){
    var NodeTypes = ['ELEMENT', 'ATTRIBUTE', 'TEXT', 'CDATA_SECTION',
                     'ENTITY_REFERENCE', 'ENTITY', 'PROCESSING_INSTRUCTION',
                     'COMMENT', 'DOCUMENT', 'DOCUMENT_TYPE',
                     'DOCUMENT_FRAGMENT', 'NOTATION'];
    for(var i=0;i<NodeTypes.length;i++){
      window[NodeTypes[i] + '_NODE'] = (i + 1);
    }
  })();
</script>
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
				<a href="works.php" class="navItems">
					WORKS
				</a>
				<a href="philosophy.php" class="navItems">
					PHILOSOPHY
				</a>
				<a href="story.php" class="navItems">
					STORY
				</a>
				<a href="index.php" class="navItems" style="color:black;">
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
			<a href="index.php" class="mobileNavButtons" style="background-color:#f9af00;color:white;">
				<div alt="" class="mobileButtonHome">HOME</div>
			</a>
			<a href="story.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonAbout">STORY</div>
			</a>
			<a href="philosophy.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonInternships">PHILOSOPHY</div>
			</a>
			<a href="works.php" class="mobileNavButtons">
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
	<section class="careersBody" id="home">
		<div class="headerQuoteContainer">
			<article class="headerQuote right yellow">
				<h1>To see the world through the artist's set of eyes.</h1>
			</article>
		</div>
		<div class="mainContentContainer main">
			<div class="floatClearer">
				<article class="mainContent twoThirds left">
					<div class="mainContentTitle">A world of pixel-perfect love...</div>
					<p class="mainContentCopy">
					Hey, I'm Andres! I design <b>motion graphics, print layouts, front-end web, and UI/UX.</b> I've lived in Caracas, Orlando, New York City, and San Francisco. In my many travels I've gained a love for the art of design and its impact on culture and business. I've designed at <i>Google, NeoReach, AAA National, The Walt Disney Company,</i> and <i> INROADS Inc.</i><a href="story.php" style="white-space:nowrap;"> Check it out! &raquo;</a></p>

					<p>Below I share a couple of motion graphic clips I've worked on recently. In addition, <b>this portfolio website is a showcase of my front-end development work.</b> From wireframing, to responsive concepting, UX flow, and into hardcoded, semantic HTML5, CSS and Javascript, this site represents a major portion of my late-night coding. Luckily, this has brought me and Coffee closer together over time. We couldn't be happier. </p>
				</article>
				<article class="sideQuoteContainer oneThird right">
					<div class="sideQuote home">I chose design because I believe that what designers do is magic.</div>
				</article>
			</div>
		</div>
        <div class="thirdsWrapper parent-container">
        	<h1 class="sectionTitle">Latest Works:</h1>
            <div class="ContentContainerThirds works home">
                <div class="videoContainer">
                    <div class="video">
                        <img src="img/poster.jpg" onclick="iE8()">
                        <!-- <iframe class="mainContentMedia" width="560" height="315" src="http://www.youtube.com/embed/vTfJFf8f5eg?autoplay=1&controls=1&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>-->
                        <iframe id="iE8video" width="1280" height="720" src="http://www.youtube.com/embed/vTfJFf8f5eg?rel=0&wmode=opaque" frameborder="0" allowfullscreen style="display:none; z-index:25 !important;"></iframe>
                    </div>
                </div>	
                <div class="content">
                    <div class="thirdsTitle"><a href="http://www.google.com/webdesigner" target="_blank">Google Web Designer &raquo;</a></div>
                    <p class="thirdsSubtitle" id="leadership">Featured on <a href="http://techcrunch.com/2014/08/05/googles-html5-web-designer-gets-animation-tools-deeper-adwords-and-doubleclick-integrations/" target="_blank">TechCrunch</a>, <a href="https://plus.google.com/116242822999984732184/posts/iwq4oGqgsfo" target="_blank">Google's Design blog, </a> and with over 35,000 views on <a href="https://www.youtube.com/watch?v=vTfJFf8f5eg" target="_blank"> Google Web Designer's YouTube Channel,</a> this is one of my favorite animations to date. I worked with several of Google's business lines to envision, and scope this clip. I created all graphics and animations myself. The soundtrack is part of the Youtube Music Library. Created with Adobe Illustrator, Photoshop, and After Effects. <span class="subcaption">2014.</span></p>
                </div>
            </div>		
            <div class="ContentContainerThirds works" style="position: relative;">
                <div class="videoContainer">
                    <div class="video">
                        <img src="img/poster2.jpg" onclick="iE8()">
                        <!-- <iframe class="mainContentMedia" width="560" height="315" src="http://www.youtube.com/embed/XKlBJmMYETM?autoplay=1&controls=1&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>-->
                        <iframe id="iE8video" width="1280" height="720" src="http://www.youtube.com/embed/XKlBJmMYETM?rel=0&wmode=opaque" frameborder="0" allowfullscreen style="display:none; z-index:25 !important;"></iframe>
                    </div>
                </div>	
                <div class="content" style="min-height:400px;">
                    <div class="thirdsTitle"><a href="http://www.youtube.com/user/designerAndres" target="_blank">DoubleClick by Google &raquo;</a></div>
                    <p class="thirdsSubtitle" id="leadership"><span>One of my core projects while working at Google was the scriptwriting, illustrating, and animating of a promotional video for Google's DoubleClick Studio dynamic creative platform. The video rolled out along with a revamped website whose target audience are creative agencies that partner with Google to advertise to millions of consumers worldwide. All graphics were created within PhotoShop and Illustrator and animated within After Effects. <span class="subcaption">2014.</span></span><br /></p>
                    <a href="works.php" style="position:absolute;bottom:0;left:0;width:100%;">
                        <button type="button" class="contentButton homeButton">VIEW MORE WORKS</button>
                    </a>
                </div>
            </div>
        </div>
		<!--<div id="livesearch"></div><p id="output"></p>-->
	</section>
<!-------------FOOTER -->
<footer class="careersPageFooter">
	<h4>Designed and hand-coded with heart and passion. Andres Aranguibel &copy; 2014</h4>
</footer>
</div>
<!--scripts -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
  $('.mobileNavContainer').hide();
</script>
<script type="text/javascript" src="js/careers.js"></script>
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

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
<link rel="prev" href="http://www.designerandres.com/story.php"/>
<link rel="next" href="http://www.designerandres.com/works.php"/>
<link rel="prefetch" href="http://www.designerandres.com/works.php"> <!-- Firefox -->
<link rel="prerender" href="http://www.example.com/works.php"> <!-- Chrome -->

<title>Artistic Philosophy - DesignerAndres: Graphic Designer Andres Aranguibel</title>
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
				<a href="works.php" class="navItems">
					WORKS
				</a>
				<a href="philosophy.php" class="navItems" style="color:black;">
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
			<a href="philosophy.php" class="mobileNavButtons" style="background-color:#f9af00;color:white;">
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
	<section class="careersBody" id="internships">
		<div class="headerQuoteContainer">
			<article class="headerQuote right green">
				<h1>To be always learning new things.</h1>
			</article>
		</div>
		<div class="mainContentContainer main">
			<article class="mainContent twoThirds left">
				<div class="mainContentTitle">1. The Sky's Only There for Dreamers</div>
                <p class="mainContentCopy">One of the most incredible things about design is the infinite amount of ways a creative mind can choose to represent a concept or idea. It's being able to share a new way of thinking through visual means.</p>
				<p class="mainContentCopy">Often, in our line of work, there is a tendency and a want to draw inspiration from design trends around us. As the system pushes and pulls, similar to the fashion and music industries, new movements become popularized, and eventually over-popularized. </p>
				<p class="mainContentCopy"><b>We cannot subject ourselves to a trend on the sole basis of "this seems to work for everyone else."</b> We risk becoming outdated. A successful brand builds its image on the principle of the avant-garde, the cutting-edge: the crazy, so-far-out-there ideas that demand attention. In Nietzche's words, "the surest way to corrupt a youth is to instruct him to hold in higher esteem those who think alike, than those who think differently."</p>
			</article>
			<article class="sideQuoteContainer">
				<div class="sideImage about oneThird right"><img src="img/circle-internship.jpg" style="width:83%;"/></div>
				<!--<img src="img/circle-about.png" width="100%" height="auto">-->
			</article>
		</div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">2. Quirkiness is Human</div>
				<p class="mainContentCopy">A design is the envelope to a message. Therefore, <b>the most successful way to design, is to connect.</b> It's how we encourage our viewer to understand what we have to say. No one sees the world in monochrome. Don't be afraid to play with colors, diagonals, curves, cloonkiness, and funky, made-up words. </p>
				<p class="mainContentCopy">"Stare. It is the way to educate your eye, and more. Stare, pry, listen, eavesdrop. Die knowing something." - Walker Evans.</p>
			</article>
		</div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">3. Fit and Finish is the Attention-Grabber</div>
				<p class="mainContentCopy">Each industry has its niche, each client his target audience, each project its context. A designer accessories gallery might want to appeal to a "snappier," sleeker, at times more fashion-savvy clientele. We must be receptive to each of the minute, but indispensable, intricacies of a project and its stakeholders. <b>Fit and finish, and a laser-sharp attention to detail will ensure that every product we make is uniquely its own.</b></p>
			</article>
		</div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">4. Never Settle</div>
				<p class="mainContentCopy"><b>We must put so much fervor and passion into every project, that we'd be willing to defend it under any circumstances.</b> If we aren't proud of our work, we haven't put our best into it. To stand tall among the rest, we have to be our own toughest critic, and set our highest expectations. We have to maintain a continuous workflow, and learn throughout every step of the way. Winners aren't born, they're made. </p>
				<p class="mainContentCopy">"Being realistic is the most common path to mediocrity" - Will Smith.</p>
			</article>
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

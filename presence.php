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
<link rel="prev" href="http://www.designerandres.com/works.php"/>
<link rel="next" href="http://www.designerandres.com/index.php"/>
<link rel="prefetch" href="http://www.designerandres.com/index.php"> <!-- Firefox -->
<link rel="prerender" href="http://www.example.com/index.php"> <!-- Chrome -->

<title>Community Presence - DesignerAndres: Graphic Designer Andres Aranguibel</title>
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
				<a href="presence.php" class="navItems" style="color:black;">
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
			<a href="works.php" class="mobileNavButtons">
				<div alt="" class="mobileButtonBenefits">WORKS</div>
			</a>
			<a href="presence.php" class="mobileNavButtons" style="background-color:#f9af00;color:white;">
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
	<section class="careersBody" id="careers">
		<div class="headerQuoteContainer">
			<article class="headerQuote right blue">
				<h1>To be a member of the design community.</h1>
			</article>
		</div>
		<div class="mainContentContainer main">
			<div class="floatClearer">
				<article class="mainContent twoThirds left">
					<div class="mainContentTitle">I've always stood by the idea that...</div>
					<p class="mainContentCopy">We as designers have the power to better our industry by being involved in our local community. <b>The more ideas we can share with - and pick up from - others, the faster we can allow design to grow.</b> Users of everyday products and software depend on innovative and effective usability, as well as appropriate aesthetic. We can only achieve those goals through collaboration and exploration.  </p>
                    <p class="mainContentCopy">As I get increasingly involved in the Orlando design and development scene, I feel constantly more aware of the trends and best practices around me. This is something that I plan on continuing to do throughout the development of my career as a graphic designer, web/ux developer, and video editor/motion graphics artist.</p>
				</article>
				<article class="sideQuoteContainer oneThird right">
					<div class="sideQuote careers">"We don't understand the unabashed power of a community until we're part of one."</div>
				</article>
			</div>
			<div class="floatClearer">
				<article class="mainContent twoThirds right">
					<div class=" desktopOnly">
						<div class="mainContentTitle">A recent thought...</div>
						<p class="mainContentCopy">These past two years I've had the honor of serving as President of the <a href="http://www.gdsaucf.com" target="_blank">Graphic Design Student Association</a>, a registered organization at the University of Central Florida. I've gotten to know each and everyone of our members very well, and have been learning little by little a few of the differences between our design sub-cultures. I've come to realize that web designers come from a culture of crowd-sourcing - of collaboration, and versioning, and forking, and cloning, and merging, and forums, and tuts, etc. Pure graphic designers and illustrators are more often than not accustomed to a DIY attitude. This really has caught my attention. I feel that if we, as designers, opened ourselves to global collaboration and critique on our own projects, we might be able to unleash a level of creativity in ourselves beyond anything we ever thought ourselves capable of. </p>
						<p class="mainContentCopy">So I reacted to this idea in a small, yet positive and actionable way. Along with two close friends in UCF's web program, I co-founded the <a href="https://www.facebook.com/mastersofwebUCF" target="_blank">Design + Code meetups</a>: a group that serves today as a sister organization to GDSA, gathering members from both programs to meet weekly and engage in open collaborations. <b>The intent is to bring new ideas to life faster, and to focus on building a stronger, more tight-knit design community at school.</b> I'm very excited about where this is going. Only time will tell. </p> <p><i>10/2014</i></p>
					</div>
				<a href="https://twitter.com/DesignerAndres" target="_blank">
				<button type="button" class="contentButton">TWEET AT ME!</button>
				</a>
				</article>
				<article class="sideQuoteContainer">
					<div class="sideImage about oneThird left"><img src="img/circle-careers.jpg" /></div>
				</article>
			</div>

		</div>
        <div class="thirdsWrapper">
        	<h1 class="sectionTitle">My UCF Organizations:</h1>
            <a href="http://www.gdsaucf.com" target="_blank"><div class="ContentContainerThirds">
                <div class="thirdsTitle">Graphic Design Student Assoc. &raquo;</div>
                <p class="thirdsSubtitle" id="leadership">
                	<p><b>President</b><br />2013 - 2015</p>
                	<p>Responsible for contacting and bringing community design presence to club meetings, in the form of local artists, designers, and developers.<br /><br />Also, in collaboration with officer team, responsible for the planning and executing of the following major club events:</p>
                    <ul>
                        <li>Bi-monthly member networking/social event</li>
                        <li>Monthly art sales</li>
                        <li>Weekly tutoring and design talks</li>
                        <li>Yearly Senior BFA gallery exhibit</li>
                        <li>Yearly art/design conference trip</li>
                    </ul>
                </p>
        	</div></a>
            <a href="https://www.facebook.com/mastersofwebUCF" target="_blank"><div class="ContentContainerThirds">
                <div class="thirdsTitle">Design + Code Meetups &raquo;</div>
                <p class="thirdsSubtitle" id="leadership">
                	<p><b>Co-Founder, Board Member</b><br />2014</p>
                	<p>Responsible for creating all marketing materials, organizing leadership team, setting up location, overseeing program content.<br /><br />In collaboration with leadership team, responsible for the planning and executing of the following:</p>
                    <ul>
                        <li>Bi-weekly demos & tutorials</li>
                        <li>Q&amp;A sessions</li>
                        <li>Speaker eventss</li>
                    </ul>
                </p>
        	</div></a>
            <a href="https://www.facebook.com/events/170579673133403/" target="_blank"><div class="ContentContainerThirds">
                <div class="thirdsTitle">UCF Starter Meetups &raquo;</div>
                <p class="thirdsSubtitle" id="leadership">
                	<p><b>Co-Host</b><br />Fall 2013</p>
                	<p>Monthly event for students to network with peers who are working hard to turn their ideas for businesses into a reality. This is an event that strives to foster creativity and collaboration. Starter MeetUps are about ideas. Finding them, developing them and most importantly starting them.<br /><br />In collaboration with officer team, responsible for the planning of the following:</p>
                    <ul>
                        <li>Monthly member networking/social event</li>
                        <li>Providing graphic/web design resources</li>
                        <li>Marketing materials and advertising at other organizations</li>
                    </ul>
                </p>
        	</div></a>
        </div>
        <h1 class="sectionTitle" style="text-align:center;">I'm an active member of:</h1>
		<div class="mainContentContainer" style="text-align:center;">
			<a href="http://www.meetup.com/Design-Orlando/" target="_blank">
				<button type="button" class="headerButton orgButton">DESIGN ORLANDO</button>
			</a>
			<a href="http://www.creativemornings.com/" target="_blank">
				<button type="button" class="headerButton orgButton">CREATIVE MORNINGS</button>
			</a>
			<a href="http://www.meetup.com/UX-Orlando-the-Orlando-User-Experience-and-Usability-Group/" target="_blank">
				<button type="button" class="headerButton orgButton">UX ORLANDO</button>
			</a>
			<a href="http://www.meetup.com/Starter-Studio/" target="_blank">
				<button type="button" class="headerButton orgButton">STARTER STUDIO</button>
			</a>
			<a href="http://www.gdsaucf.com/" target="_blank">
				<button type="button" class="headerButton orgButton">GDSA @ UCF</button>
			</a>
		</div>
        
        <h1 class="sectionTitle" style="text-align:center;">Also find me on:</h1>
		<div class="mainContentContainer" style="text-align:center;">
            <a href="http://be.net/AndresAranguibel" target="_blank">
				<button type="button" class="headerButton socialButton">BEHANCE</button>
			</a>
            <a href="http://www.linkedin.com/in/andresaranguibel" target="_blank">
				<button type="button" class="headerButton socialButton">LINKEDIN</button>
			</a>
            <a href="https://twitter.com/DesignerAndres" target="_blank">
				<button type="button" class="headerButton socialButton">TWITTER</button>
			</a>
            <a href="http://www.gplus.to/designerAndres" target="_blank">
				<button type="button" class="headerButton socialButton">GOOGLE+</button>
			</a>
            <a href="https://www.youtube.com/user/designerAndres/videos" target="_blank">
				<button type="button" class="headerButton socialButton">YOUTUBE</button>
			</a>
            <a href="http://www.designerandres.tumblr.com" target="_blank">
				<button type="button" class="headerButton socialButton">TUMBLR</button>
			</a>
            <a href="http://dribbble.com/DesignerAndres" target="_blank">
				<button type="button" class="headerButton socialButton">DRIBBBLE</button>
			</a>
		</div>

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

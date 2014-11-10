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
<link rel="prev" href="http://www.designerandres.com/home.php"/>
<link rel="next" href="http://www.designerandres.com/philosophy.php"/>
<link rel="prefetch" href="http://www.designerandres.com/philosophy.php"> <!-- Firefox -->
<link rel="prerender" href="http://www.example.com/philosophy.php"> <!-- Chrome -->

<title>School and Employment - DesignerAndres: Graphic Designer Andres Aranguibel</title>
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
				<a href="philosophy.php" class="navItems">
					PHILOSOPHY
				</a>
				<a href="story.php" class="navItems" style="color:black;">
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
			<a href="story.php" class="mobileNavButtons" style="background-color:#f9af00;color:white;">
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
	<section class="careersBody" id="about">
		<div class="headerQuoteContainer">
			<article class="headerQuote left purple">
				<h1>To tell a story, and reach others' hearts.</h1>
			</article>
		</div>
		<div class="mainContentContainer main">
			<article class="centerTitleContainer">
				<div class="centerTitle">Andres E. Aranguibel</div>
				<div class="centerSubtitle">Orlando, FL &middot; <a class="mobilesOnly" href="tel:14074442053">407.346.1818</a> &middot; <a href="https://www.behance.net/AndresAranguibel" style="white-space:nowrap;">Behance Portfolio</a></div>
			</article>
			<article class="mainContent twoThirds left">
				<div class="mainContentTitle">About Me</div>
                <p class="mainContentCopy">It's hard sometimes, describing ourselves to others. The idea of sharing our interests, our likes and dislikes, our passions, the things that make us tick. I think we only ever realize how important this is once we've experienced the connection it can make with someone else. That is, once a new co-worker looks at us and says how much she loves to draw also, or how he's also learning programming. I think, as humans, connecting is what sets us apart. It's what makes us different. So, in the interest of connecting, here's a bit about me:</p>
				<p class="mainContentCopy">In a few, somewhat quirky words, I like to consider myself that sidewalk-doodler, that classroom-hand-raiser, that 5-am-designer, that stubborn re-trier. I’m that “darer,” that rule-bender, that word-maker-upper. Today more than ever, we live in a culture of rule-bending dreamers.<b> And, above all else, I would like to consider myself "that darned dreamer”.</b> Below are a few of the roles that have brought me to the position I'm in today.</p>
            <a href="img/GraphicResume.pdf" target="_blank">
                <button type="button" class="contentButton resumeButton">GRAPHIC RESUME</button>
            </a>
            <a href="img/AranguibelAndres_Resume.pdf" target="_blank">
                <button type="button" class="contentButton resumeButton">PDF RESUME</button>
            </a>
			</article>
			<article class="sideQuoteContainer">
				<div class="sideImage about oneThird right" style="margin-top: -65px;"><img src="img/circle-about.jpg" /></div>
				<!--<img src="img/circle-about.png" width="100%" height="auto">-->
			</article>
        </div>
        <div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">VP Design &amp; Brand Strategy, Aug. 2014 - Present<br /><span style="font-size:18px; color:#666;">NeoReach, Inc. - Orlando, FL</span></div>
				<p class="mainContentCopy">
					<ul>
						<li>Strategize and execute a national brand identity, including logo and marketing materials for print and web media. </li>
						<li>Co-organize monthly design and development meet-ups in tandem with VP of Communications by establishing high-profile tech relationships in the Orlando market.</li>
                        <li>Lead the company's focus on high-quality consumer-facing design, user experience and marketing campaigns by implementing consistent design layouts and experiences across web, mobile native, video, and print.</li>
                    </ul>
                    <a href="http://designerandres.com/works.php#!/behance-19765199">
                    <button type="button" class="contentButton resumeButton"> SAMPLE WORKS</button>
                    </a>
                </p>
			</article>
        </div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">Creative Innovations Design Intern, May 2014 - Aug. 2014<br /><span style="font-size:18px; color:#666;">Google, Inc. - Mountain View, CA</span></div>
				<p class="mainContentCopy">
					<ul>
						<li>Design and produce 2 motion-graphics promo reels for external-facing Google apps – Google Web Designer and DoubleClick Studio. These videos have been featured in <a href="http://techcrunch.com/2014/08/05/googles-html5-web-designer-gets-animation-tools-deeper-adwords-and-doubleclick-integrations/" target="_blank">TechCrunch</a>, <a href="https://plus.google.com/116242822999984732184/posts/iwq4oGqgsfo" target="_blank">Google's Design blog, </a> and gathered over 30,000 views on <a href="https://www.youtube.com/watch?v=vTfJFf8f5eg" target="_blank"> Google's YouTube Channel,</a>. </li>
						<li>Redesign UX flow and interface of Google’s internal Ad Campaign and Client Management tool.</li>
                        <li>Created graphic assets in Photoshop and Illustrator for DoubleClick Studio Dynamic site redesign.</li>
                    </ul>
                    <a href="http://techcrunch.com/2014/08/05/googles-html5-web-designer-gets-animation-tools-deeper-adwords-and-doubleclick-integrations/" target="_blank">
                    <button type="button" class="contentButton resumeButton"> SAMPLE WORKS</button>
                    </a>
                </p>
			</article>
        </div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">Graphic/Web Designer & Video Editor, Apr. 2011 - May 2014<br /><span style="font-size:18px; color:#666;">AAA National - Heathrow, FL</span></div>
				<p class="mainContentCopy">
					<ul>
						<li>Design and build conference displays and web interface elements for <a href="http://www.behance.net/gallery/AAA-National-Tech-Conference-2012/8007721" target="_blank">national product marketing campaigns. &raquo; </a> 
<br /><span class="subcaption">*Reach: 2000+ AAA Club representatives.</span></li>
						<li>Design, develop, mobile-optimize, and maintain aaa.com <a href="http://careers.aaa.com" target="_blank">subdomain &amp; partner pages. &raquo; </a> 
<br /><span class="subcaption">*Reach: 53+ million AAA members across the US/Canada.</span></li>
						<li>Conceptualize, film, and post-produce 3 annual AAA National  <a href="http://youtu.be/co4ZgfvGD-c" target="_blank">conference videos. &raquo; </a> 
<br /><span class="subcaption">*Reach: 500+ AAA annual conference attendees.</span></li>
					</ul>
					<a href="img/SMahajan_Recommendation.pdf" target="_blank">
                            <button type="button" class="contentButton resumeButton">RECOMMENDATION</button>
                    </a>				
                </p>
			</article>
        </div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">Professional Photographer (PT), Feb. 2012 - Oct. 2013<br /><span style="font-size:18px; color:#666;">The Walt Disney Co. - Lake Buena Vista, FL</span></div>
				<p class="mainContentCopy">
					<ul>
						<li>Trained in Commercial, Professional, and Portrait Photography, lighting principles, composition, digital photo enhancement, and studio interaction principles.</li>
						<li>Work with heavy guest interactions in French, Spanish and English. 500+ photos taken per day.</li>
					</ul>
				</p>
			</article>
		</div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">Graphic Design & Web Content Management Intern, Aug. - Dec. 2012<br /><span style="font-size:18px; color:#666;">The Social Learning Project - New York, NY</span></div>
				<p class="mainContentCopy">
					<ul>
						<li>Create web elements, promo videos and co-ordinate design for online learning management system.</li>
						<li>Pitch interactivity and design elements to B2B clientele, elaborating on aesthetic and efficiency.</li>
						<li>Co-authored current <a href="http://www.sociallearningproject.com/" target="_blank">product marketing campaign: slogan, look & feel, logo revamp. &raquo; </a></li>
					</ul>
                    <a href="img/SLP_Recommendation.pdf" target="_blank">
                        <button type="button" class="contentButton resumeButton">RECOMMENDATION</button>
                    </a>
				</p>
			</article>
		</div>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">Graphic Design & Social Media Marketing Intern, Aug. - Dec. 2012<br /><span style="font-size:18px; color:#666;">INROADS, Inc. - New York, NY</span></div>
				<p class="mainContentCopy">
					<ul>
						<li>Social media management, design for media layouts, and other graphic elements for print/web.</li>
						<li>Lead designer in webpage redesign, national newspaper ad campaign design, web analytics.</li>
					</ul>
                    <a href="img/INROADS_Recommendation.pdf" target="_blank">
                        <button type="button" class="contentButton resumeButton">RECOMMENDATION</button>
                    </a>
				</p>
			</article>
        </div>
		<!--<div id="livesearch"></div><p id="output"></p>-->
        <div class="thirdsWrapper">
        	<h1 class="sectionTitle">Leadership:</h1>
            <a href="http://www.gdsaucf.com" target="_blank"><div class="ContentContainerThirds">
                <div class="thirdsTitle">Graphic Design S.A. &raquo;</div>
                <p class="thirdsSubtitle" id="leadership"><span>President</span><br />2013 - 2015
                </p>
        	</div></a>
            <a href="https://www.facebook.com/mastersofwebUCF" target="_blank"><div class="ContentContainerThirds">
                <div class="thirdsTitle">Design + Code Meetups &raquo;</div>
                <p class="thirdsSubtitle" id="leadership"><span>Co-Founder, Board Member</span><br />2014
                </p>
        	</div></a>
            <a href="https://www.facebook.com/events/170579673133403/" target="_blank"><div class="ContentContainerThirds">
                <div class="thirdsTitle">UCF Starter Meetups &raquo;</div>
                <p class="thirdsSubtitle" id="leadership"><span>Co-Host</span><br />2013 - 2014
                </p>
        	</div></a>
        </div>
       	<h1 class="sectionTitle" style="text-align:center;">Studies &amp; Honors:</h1>
		<div class="mainContentContainer">
			<article class="mainContent">
				<div class="mainContentTitle">Emerging Media - Graphic Design, B.F.A.<br /><span style="font-size:18px; color:#666;">University of Central Florida, 2010 - 2015</span></div>
				<p class="mainContentCopy">
					<ul>
                    	<li>
                        	<span style="color:black;">Introspective, Juried Photography Exhibit // </span> 
                        	<a href="http://gallery.cah.ucf.edu/events.php?id=2089" target="_blank">
                            	UCF SVAD Gallery, May-July 2013 &raquo;
                            </a>
                        </li>
                    	<li>
                        	<span style="color:black;">James R. Hopes Art Scholarship //</span>
                            <a href="http://scholarships.cah.ucf.edu/hopes/winners-2013.php" target="_blank">
                            	Spring 2013 &raquo;
                            </a>
                        </li>    
                    	<li><span style="color:black;">UCF President's Honor Roll - 4.0 GPA //</span> 2011 - 2012 </li>
                    	<li>
                        	<span style="color:black;">Hispanic Heritage Scholarship Fund Recipient //</span> 
                        	<a href="http://hispanicheritagescholarshipfund.org/announcing-the-2011-scholarship-recipients/" target="_blank">
                            	 2011 - 2012 &raquo;
                           </a>
                        </li>
                        <li><span style="color:black;">INROADS Intern of the Year //</span> Summer 2011<br /></li>
                    	<li style="border-bottom:none;"><span style="color:black;">Florida Bright Futures Scholarship  //</span> 2010-Present<br /></li>
					</ul>
				</p>
			</article>
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

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Aspiration World - Celebrating Creativity & Imagination</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
</head>
<body>
<br><br>
	<div class="content">		
		<div id="sun">
			<img src="img/sun.gif"/>
		</div>		
		<div id="top">
			<img src="img/top.png" width="100%" height="219"/>
		</div>
		<div id="grass">
			<img src="img/grass.png" width = "100%" height = "250px"/>
		</div>
		<div id="balloon">
			<img src="img/balloon.png"/>
		</div>
		<div id="balloon1">
			<img src="img/balloon.png"/>
		</div>
		<div id="balloon2">
			<img src="img/balloon.png"/>
		</div>
		<div id="kite">
			<img src="img/kite.png"/>
		</div>		
		<div id="boy">
			<img src="img/sackboy.png"/>
		</div>		
		<div id="rat">
			<img src="img/rat.png"/>
		</div>
		<div id="mike">
			<img src="img/mike.png"/>
		</div>
		<div id="dart1">
			<img src="img/dart1.png"/>
		</div>
		<div id="dart2">
			<img src="img/dart2.png"/>
		</div>
		<div id="dart3">
			<img src="img/dart3.png"/>
		</div>
		<div id="bush">
			<img src="img/bush.png"/>
		</div>
		<div id="ball">
			<img src="img/ball.png"/>
		</div>
		<div id="marble">
			<img src="img/marble.png"/>
		</div>
		<div id="marble1">
			<img src="img/marble1.png"/>
		</div>
		<div id="marble2">
			<img src="img/marble2.png"/>
		</div>
		<div id="hoop">
			<img src="img/hoop.png"/>
		</div>
		<div id="strip">
		</div>
		<div id="cloud0">
			<a href="javascript:GotoPage(3);"><img src="img/cloud1.png"/></a>
		</div>
		<div id="cloud2">
			<a href="javascript:GotoPage(2);"><img src="img/cloud.png"/></a>
		</div>
		<div id="cloud3">
			<a href="javascript:GotoPage(1);"><img src="img/cloud2.png"/></a>
		</div>		
		<div id="logo">
			<img src="img/logo.png"/>
		</div>		
		<div id="motto">Celebrating Creativity & Imagination</div>		
		<div id="messagebox" style="display:none;">
			<div id="contact">
				<form action="contact.php" method="post" align="center">
					<input id="name" name="nam" type="text" required placeholder="NAME" style="width:200px;"></input><br>
					<input id="email" name="email" type="email" required placeholder="EMAIL" style="width:200px;"></input><br>
					<textarea id="wazzup" name="wazzup" type="text" required placeholder="WAZZUP?" style="width:196px;" rows="5"></textarea><br>
					<input type="submit" value="Submit"></input>
					<input type="reset" value="Clear"></input>
				</form>
				<div id="address">
					National Design Business Incubator (NDBI)<br>						
					NID, Paldi, Ahmedabad - 380 007, India<br><br>
	 
					Phone: +91 - 79 - 2662 3692, +91-848-795-9825<br>
					Fax: +91 - 79 - 2660 0524<br><br>
	 
					Email: abhijeet@fundooz.in
				</div>
			</div>
			<div id="about" valign="center">
				<h2 align="left">Aspiration == "Hope & Ambition". We aspire to create fun filled moments for people round the globe.<br><br>
					Our goal is to provide quality entertainment by transporting aur audience to imaginary worlds full of fascinating stories and uncanny characters.<br><br>
					We lie at the intersection of art, technology, storytelling and choose different mediums to tell our stories.</h2>
			</div>
			<div id="games" align="center">				
					<div id="gamesmenu" align="center">
						<a href="javascript:ShowProjects('all');" class="active">All</a><div class="verlinespacer">&nbsp;</div>
						<a href="javascript:ShowProjects('ipad')" >iPad</a><div class="verlinespacer">&nbsp;</div>
						<a href="javascript:ShowProjects('iphone')" >iPhone</a><div class="verlinespacer">&nbsp;</div>
						<a href="javascript:ShowProjects('android')" >Android</a><div class="verlinespacer">&nbsp;</div>
						<a href="javascript:ShowProjects('web')" >Web</a><div class="verlinespacer">&nbsp;</div>
						<a href="javascript:ShowProjects('kinect')" >Kinect</a>
					</div>
					<div id="gameselection">
						<div id="gameslist">
							<div class="row">								
								<div class="col" id="web">
									<a href="javascript:showInfo('naijamee');"><img src="img/projects/avatar.png"/></a>
								</div>											
								<div class="col android">
									<a href="javascript:showInfo('fasttrack');"><img src="img/projects/fasttrack.jpg"/></a>
								</div>				
								<div class="col idevice">
									<a href="javascript:showInfo('khale');"><img src="img/projects/khale.png"/></a>
								</div>								
							</div><br><br>
							<div class="row">								
								<div class="col android">
									<a href="javascript:showInfo('hangman');"><img src="img/projects/hangman.jpg"/></a>
								</div>
								<div class="col idevice">
									<a href="javascript:showInfo('game');"><img src="img/projects/game.png"/></a>
								</div>														
								<div class="col" id="kinect">
									<a href="javascript:showInfo('apohati');"><img src="img/projects/apohati.png"/></a>
								</div>
								<div class="android">									
									<div class="col">
										<a href="javascript:showInfo('tintrouble');"><img src="img/projects/tintrouble.jpg"/></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="detailview">
						
					</div>
					
			</div>
		</div>
	</div>	
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
		$(document).ready(function(){			
			var padHeight = (window.innerHeight - 220)/2;
			$("#homemax").css("padding",padHeight + "px 0 "+ padHeight + "px 0");
			$("#homemax").hide();
			$("#messagebox").hide();			
			
			$("#page2").hover(function(){
					$("#page2").css("opacity",0.8);
			});
			setInterval(animations,500);
			function animations()
			{
				//$("#logo img").animate({"height":"+=1px"},10);
			}
			$(".fancybox").fancybox();
			$(".col a span").hide();
			$(".col a").hover(function(){
				$(".col a span").show();
			},
			function(){
				$(".col a span").hide();
			}
			);
		});
		function GotoPage(val)
			{
				if(val == 1)
				{
					$("#messagebox").show(500);
					$("#contact").show(500);
					$("#about").hide();
					$("#games").hide();			
				}
				else if(val == 2)
				{	
					$("#messagebox").show(500);
					$("#contact").hide();
					$("#about").show(500);
					$("#games").hide();
				}
				else if(val == 3)
				{
					$("#messagebox").show(500);
					$("#contact").hide();
					$("#about").hide();
					$("#games").show(500);
				}
			}
		function ShowProjects(val)
		{
			if($("#gamesmenu a").hasClass('active'))			
				{$("#gamesmenu a").removeClass();}
			
			if(val == "ipad" || val == "iphone")
			{
				$('.idevice').show();
				$('.android').hide();				
				$('#kinect').hide();
				$('#web').hide();			
				
				if(val == "ipad") { $("#gamesmenu a:nth-child(3)").addClass('active');}else {  $("#gamesmenu a:nth-child(5)").addClass('active');}
			}
			else if(val == 'android')
			{
				$('.idevice').hide();
				$('.android').show();				
				$('#kinect').hide();
				$('#web').hide();
				$("#gamesmenu a:nth-child(7)").addClass('active');				
			}
			else if(val == 'web')
			{
				$('.idevice').hide();
				$('.android').hide();				
				$('#kinect').hide();
				$('#web').show();
				$("#gamesmenu a:nth-child(9)").addClass('active');
			}		
			else if(val == 'kinect')
			{
				$('.idevice').hide();
				$('.android').hide();				
				$('#kinect').show();
				$('#web').hide();
				$("#gamesmenu a:nth-child(11)").addClass('active');
			}
			else if(val == 'all')
			{
				$('#detailview').html('');
				$('#gameselection').show();				
				$('.idevice').show();
				$('.android').show();
				$('#kinect').show();
				$('#web').show();
				$("#gamesmenu a:nth-child(1)").addClass('active');
			}
		}
		function showInfo(val)
		{
			if(val == 'naijamee')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2><a href='http://weeworld.herokuapp.com'>Naijamee<span>&nbsp;&nbsp;&nbsp;(Click to visit)<span></a></h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h3>Info</h3><h5>Show yourself off! <br><br>Own cool glasses,accessories and devices. Be in the places you have only dreamed of.<br><br>It doesn't end here. Dress up your virtual self with the coolest hairstyle. <br><br>Their is a lot more to be explored.</h5>	</div><div id='screenshots'><h3> Screenshots</h3><div id='row'>	<div class='col1'><a class='fancybox' rel='group1' href='img/projects/naijamee/1.png'><img src='img/projects/naijamee/1.png' width='80' height='80'></a></div><div class='col1'><a class='fancybox' rel='group1' href='img/projects/naijamee/2.png'><img src='img/projects/naijamee/2.png' width='80' height='80'/></a></div></div><div id='row'><div class='col1'><a class='fancybox' rel='group1' href='img/projects/naijamee/3.png'><img src='img/projects/naijamee/3.png' width='80' height='80'/></a>	</div><div class='col1'><a class='fancybox' rel='group1' href='img/projects/naijamee/4.png'><img src='img/projects/naijamee/4.png' width='80' height='80'/></a></div></div></div>");
			}
			else if(val == 'apohati')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2>Apohati</h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h3>Info</h3><h5>Sex condom safety. sshhhh!! Still a taboo.<br><br>You are hesitant to talk about it with a human being. But what about a machine interactively teaching you all their is to know in a friendly and amusing way?</h5></div><div id='screenshots'><h3> Screenshots</h3><div id='row'>	<div class='col1'><a class='fancybox' rel='group3' href='img/projects/apohati/img.png'><img src='img/projects/apohati/img.png' width='80' height='80'/></a></div></div></div></div>");
			}
			else if(val == 'tintrouble')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2>Tin Trouble</h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h3>Info</h3><h5>Remember the good old days when you used to accompany your grandparents to the village Carnival ('Mela'). Ahh!! nostalgic Moments. Their you were ... a Stack of steel glasses on the table in front of you & three cosco balls in your hand .... Go Shoot & make sure none of the glasses remain on the table.<br>Have Fun!!</h5>	</div><div id='screenshots'><h3> Screenshots</h3><div id='row'>	<div class='col1'><a class='fancybox' rel='group2' href='img/projects/tintrouble/1.jpg'><img src='img/projects/tintrouble/1.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group2' href='img/projects/tintrouble/2.jpg'><img src='img/projects/tintrouble/2.jpg' width='80' height='80'/></a></div></div></div>");
			}
			else if (val == 'khale')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2>Le Kha Le</h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h3>Info</h3><h5>In mood for some Samosa, Idly, Chicken Tikka? What's your taste? Veg/Non-Veg? We have laid separate tables for your taste. Green for Veg, Red for non-veg.<br>Now feed your avatar with veg/non-veg food according to the table color.<br>Have fun with this yummy foody advenure.</h5>	</div><div id='screenshots'><h3> Screenshots</h3><div id='row'>	<div class='col1'><a class='fancybox' rel='group4' href='img/projects/lekha/1.png'><img src='img/projects/lekha/1.png' width='80' height='80'/></a></div><div class='col1'><div class='col1'><a class='fancybox' rel='group4' href='img/projects/lekha/2.png'><img src='img/projects/lekha/2.png' width='80' height='80'/></a></div></div><div id='row'><div class='col1'><div class='col1'><a class='fancybox' rel='group3' href='img/projects/lekha/3.png'><img src='img/projects/lekha/3.png' width='80' height='80'/></a></div></div></div>");
			}
			else if (val == 'game')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2>Alphabets</h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h3>Info</h3><h5>Learning alphabets for the kids was never more fun. Kids learn to associate alphabets with animals name and travel into their own fairy tale world to learn and explore.</h5></div><div id='screenshots'><h3> Screenshots</h3><div id='row'>	<div class='col1'><a class='fancybox' rel='group5' href='img/projects/alphabets/1.png'><img src='img/projects/alphabets/1.png' width='80' height='80'/></a></div><div class='col1'><div class='col1'><a class='fancybox' rel='group5' href='img/projects/alphabets/2.png'><img src='img/projects/alphabets/2.png' width='80' height='80'/></a></div></div></div>");
			}
			else if (val == 'hangman')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2>Hangman</h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h3>Info</h3><h5>Make sure you get the letters right or else your friend is gonna die at gallows - one step closer at a time.</h5></div><div id='screenshots'><h3> Screenshots</h3><div id='row'>	<div class='col1'><a class='fancybox' rel='group6' href='img/projects/hangman/1.jpg'><img src='img/projects/hangman/1.jpg' width='80' height='80'/></a></div></div></div>");
			}
			else if (val == 'fasttrack')
			{
				$('#gameselection').hide();
				$('#detailview').html("<h2>Fast Track</h2><a href="+"javascript:ShowProjects('all');"+"><< Back</a><br><div id='info' align='left'><h4>Info</h4><h5>Need for Speed in an Indian context with tracks from all across India... Pune, Ahmedabad, Mumbai, Ladakh.</h5></div><div id='screenshots'><h3> Screenshots</h3><div class='scrollbar' id='style-1'><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/1.jpg'><img src='img/projects/fasttrack/1_sm.jpg'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/2.jpg'><img src='img/projects/fasttrack/2_sm.jpg' width='80' height='80'/></a></div></div><div id='row'><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/3.jpg'><img src='img/projects/fasttrack/3_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/4.jpg'><img src='img/projects/fasttrack/4_sm.jpg' width='80' height='80'/></div></div><div id='row'><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/5.jpg'><img src='img/projects/fasttrack/5_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/6.jpg'><img src='img/projects/fasttrack/6_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/7.jpg'><img src='img/projects/fasttrack/7_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/8.jpg'><img src='img/projects/fasttrack/8_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/9.jpg'><img src='img/projects/fasttrack/9_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/10.jpg'><img src='img/projects/fasttrack/10_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/11.jpg'><img src='img/projects/fasttrack/11_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/12.jpg'><img src='img/projects/fasttrack/12_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/13.jpg'><img src='img/projects/fasttrack/13_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/14.jpg'><img src='img/projects/fasttrack/14_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/15.jpg'><img src='img/projects/fasttrack/15_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/16.jpg'><img src='img/projects/fasttrack/16_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/17.jpg'><img src='img/projects/fasttrack/17_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/18.jpg'><img src='img/projects/fasttrack/18_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/19.jpg'><img src='img/projects/fasttrack/19_sm.jpg' width='80' height='80'/></a></div><div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/20.jpg'><img src='img/projects/fasttrack/20_sm.jpg' width='80' height='80'/></a></div></div><div id='row'>	<div class='col1'><a class='fancybox' rel='group7' href='img/projects/fasttrack/21.jpg'><img src='img/projects/fasttrack/21_sm.jpg' width='80' height='80'/></a></div></div></div></div>");
			}
		}			
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42755701-1', 'fundooz.in');
	  ga('send', 'pageview');

	</script>
</body>
</HTML>

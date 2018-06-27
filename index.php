<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SoundSlave | A Tribute to Soundgarden and Audioslave | San Diego, CA</title>

<!-- MAKE SURE TO UNCOMMENT META TAGS -->

<!-- <meta name="description" content="SoundSlave is a Soundgarden and Audioslave tribute band based in San Diego, CA."/> -->
<!-- <meta name="keywords" content="SoundSlave, Soundgarden, Audioslave, Chris Cornell, San Diego, tribute, band"/> -->

<link href="css/style.css" rel="stylesheet" type="text/css"/>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

</head>
<body>

	<div class="wrapper">

		<br/>
		<img class="logo" src="images/SSWheel2.jpg"/>
		<br/>

		
		<img class="band" src="images/group2.jpg"/>
		
		<div class="bord">
			<h2><u><b>NEXT SHOW</b></u></h2>
			<h2>Saturday, July 14th with 10,000 Dudes (Tool Tribute)</h2>
			<h2>@ Navajo Live</h2>
			<h2>8515 Navajo Road, San Diego CA 92119</h2>
			<br>
			<img class="band" src="images/navajoshow.jpg"/>
			<br>
		</div>
		<br>
		<h5><a href="SSlist/emailform.php"><b><u>JOIN OUR MAILING LIST</u></b></a></h5>
		
		<div class="left">
			<br>
			<br>
			<br>
			<br>
			<p style:"font-size:24px;">SoundSlave is Southern California's premier Soundgarden / Audioslave tribute band.  
			Backed by an talented band made up of some of San Diego's most experienced rock musicians, lead vocalist Yolanda Johnston 
			delivers powerful and soulful renditions of the late Chris Cornell's most iconic music.  SoundSlave have already played many 
			of San Diego's biggest venues.  Follow them on Facebook and Instagram, or join their mailing list to stay up to date with 
			upcoming shows and band happenings!  Loud Love!</p>
			
			<br/>
		</div>

		<div class="right">

			<br>
			<br>
			<br>
			<br>
			<iframe width="450" height="315" src="https://www.youtube.com/embed/GaDkLVKSvv8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<br>
			<iframe width="450" height="315" src="https://www.youtube.com/embed/iMnSd0rXPLE?start=25" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<br>			
		</div>
		
		<div class="left">
		
			<!-- <h3>Upcoming Shows</h3>

			<b>CHECK BACK SOON</b><br/> -->
			
			<!--
			<b>DATE</b><br/>
			<b>VENUE</b><br/>
			ADDRESS1</br>
			ADDRESS2</br>
			<a href="WEBSITE">WEBSITE</a></br>
			</br>
			-->

			<br/>
			<h3>Contact</h3>
			<b>Email:</b> <a href="SoundSlaveSanDiego@gmail.com"><u>SoundSlaveSanDiego@gmail.com</u></a><br/>
			<b>Facebook:</b> <a href="www.facebook.com/SoundSlave.SoundgardenAudioslaveTribute"><u>Follow us on Facebook!</u></a><br/>
			<b>Instagram</b> <a href="www.instagram.com/soundslavesandiego/"><u>Follow us on Instagram</u></a><br>
			<b>ReverbNation</b> <a href="www.reverbnation.com/artist/soundslave5"><u>Check out our online Press Kit at ReverbNation!</u></a>
			
		
			<br/>
			<h3>Band Lineup</h3>
			Yolanda Johnston - Lead Vocals<br>
			Mike Laptewicz - Guitars<br>
			Alec Peterson - Guitars<br>
			Rick Drake - Bass Guitars, Backing Vocals<br>
			Andy Hester - Drums<br>
						
			<br/>
			
			<h3>Song List</h3>
			<div style="width:40%; float:left;">
				<u><i>Soundgarden</i></u><br><br>
				Loud Love<br>
				Birth Ritual<br>
				Rusty Cage<br>
				Outshined<br>
				Slaves and Bulldozers<br>
				Jesus Christ Pose<br>
				My Wave<br>
				Fell on Black Days<br>
				Black Hole Sun<br>
				Spoonman<br>
				Pretty Noose<br>
				Ty Cobb<br>
				Burden in my Hand<br>
				Been Away Too Long<br>
			</div>
			
			<div style="width:40%; float:left;">
				<u><i>Audioslave</i></u><br><br>
				Cochise<br>
				Show Me How to Live<br>
				Gasoline<br>
				Like a Stone<br>
				Set it Off<br>
				Be Yourself<br>
				Your Time Has Come<br>
				
			</div>
		
		</div>
		
		<div class="clear"></div>
		
	</div>

	<!-- Photo section -->
	
	<div class="photos">
	
		<div class="wrapper">
		
			<h1 style="font-size:40px"><u>Photos</u></h1>

			<?php

			//set array with manual indexing to use with for loop

			$bandnames = array("1"=>"Yolanda", "4"=>"Mike", "7"=>"Alec", "10"=>"Ricky", "13"=>"Andy" );

			//for loop to print rows of three photos with each band member name listed

			for($count = 1; $count <=15 ; $count+=3) {
			
			//echo '<h4>' . $bandnames[$count] . '</h4>';
			echo '<a class="fancybox" rel="gallery" href="images/gallery/image (' . $count . ').jpg"><img src="images/gallery/thumbs/thumb (' . $count . ').jpg"/></a>';
			echo '<a class="fancybox" rel="gallery" href="images/gallery/image (' . ($count + 1) . ').jpg"><img src="images/gallery/thumbs/thumb (' . ($count + 1) . ').jpg"/></a>';
			echo '<a class="fancybox" rel="gallery" href="images/gallery/image (' . ($count + 2) . ').jpg"><img class="last" src="images/gallery/thumbs/thumb (' . ($count + 2) . ').jpg"/></a>';
			
			}
			?>
					
			<div class="clear"></div>
		
		</div>
	
	</div>

</body>
</html>

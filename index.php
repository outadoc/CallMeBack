<!DOCTYPE html">
<html>
   <head>
		<meta charset="utf-8" />
		<title>CallMeBack</title>

<?php if(preg_match('#iPhone|iPad#', $_SERVER['HTTP_USER_AGENT']))
	  { ?>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link rel='apple-touch-icon-precomposed' href='img/ft/blue.png' />
		<link rel="stylesheet" type="text/css" title="Design" href="css/style-mobile.css" />
   </head>
   <body>
      	<h1>CallMeBack</h1>
		<p>Select the type of shortcut, the name and the number/address, together with the color of the icon.</p>
		<form method="GET" action="redirect.php">
			<label for="type">Type:</label>
			<span class="input-grp">
				<input type="radio" name="type" value="facetime" id="facetime" checked="checked" /> 
				<label for="facetime">FaceTime</label>
				<input type="radio" name="type" value="phone" id="phone" />
				<label for="phone">Phone</label>
			</span>
			<br />
			<label for="title">Name:</label>
			<input type="text" name="title" /><br />
			
			<label for="number">Nb/E-mail:</label>
			<input type="text" name="number" /><br />
			
			<label for="icon">Icon:</label>
			<span class="input-grp">
				<select name="icon">
					<option value="blue">Blue</option>
					<option value="red">Red</option>
					<option value="orange">Orange</option>
					<option value="violet">Purple</option>
					<option value="yellow">Yellow</option>
				</select>
				
				<input type="submit" value="OK" />
			</span>
		</form>
 <?php }
 
	else
	{ ?>
			<link rel="stylesheet" type="text/css" title="Design" href="css/style-desktop.css" />
		</head>
		<body>
			<h1>You must open this website on your iPhone/iPod Touch/iPad to use it.</h1>
			<h2>How to use CallMeBack?</h2>
			
			<div class="screenshots">
				<img src="img/screens/screen1.png" alt="Screenshot 1" title="Go to http://callmeback.outadoc.fr on your device" />
				<img src="img/screens/screen2.png" alt="Screenshot 2" title="Fill the fields" />
				<img src="img/screens/screen3.png" alt="Screenshot 3" title="Tap '+'" />
				<img src="img/screens/screen4.png" alt="Screenshot 4" title="Tap 'Add to home screen'" />
				<img src="img/screens/screen5.png" alt="Screenshot 5" title="Tap 'Add'" />
				<img src="img/screens/screen6.png" alt="Screenshot 6" title="Enjoy! =D" />
			</div>
<?php } ?>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-20615472-3']);
			_gaq.push(['_trackPageview']);
		
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
   </body>
</html>

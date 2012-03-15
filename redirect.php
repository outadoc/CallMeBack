<!DOCTYPE html>
<html>
	<?php
	if(preg_match('#iPhone|iPad#', $_SERVER['HTTP_USER_AGENT']))
	{ ?>
		<head>
			<title><?php echo htmlspecialchars($_GET['title']); ?></title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
			<?php
				$icon = htmlspecialchars('img/' . $_GET['type'] . '/' . $_GET['icon'] . '.png');
				echo '<link rel="apple-touch-icon-precomposed" href="' . $icon . '" />';
				
				if($_SERVER['HTTP_REFERER'] != null) {
					echo '<link rel="stylesheet" type="text/css" title="Design" href="css/style-mobile.css" />';
				} else {
					echo '<meta http-equiv="refresh" content="0; url=' . htmlspecialchars($_GET['type']) . '://' . htmlspecialchars($_GET['number']) . '">';
				}
			?>
		</head>
		<body>
			<?php
				if($_SERVER['HTTP_REFERER'] != null) {
				?>
					<h1>CallMeBack</h1>
					<p>On the bottom of the page, tap &quot;+&quot;, tap &quot;Add to home screen&quot;, then tap &quot;Add&quot;, and that's it!</p>
					<div class="arrow"></div>
				<?php
		  		}
			?>
		</body>
	<?php } else {
		echo '<img style="margin-left:auto; margin-right:auto; display:block;" src="img/nothing.png" alt="NOTHING TO DO HERE" />';
		die('<meta http-equiv="refresh" content="3; url=./">');
	}
	?>
</html>

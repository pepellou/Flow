<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html 
   xmlns    = "http://www.w3.org/1999/xhtml" 
   lang     = "_LANGUAGE" 
   xml:lang = "_LANGUAGE">
	<head>
		<title>Flow</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" 
			href="css/style-mobile.css" 
			type="text/css" />
		<link rel="author" href="humans.txt" />
		<link rel="icon" type="image/gif" href="favicon.gif" />
	</head>
	<body>
		<div id=title>
			<h1><a href=?page=home>Flow</a></h1>
		</div>
		<div id=content>
			<?php 
				$page = (isset($_GET['page'])
					? $_GET['page']
					: 'home'
				);
				include("pages/$page.php");
			?>
		</div>
		<div id=humanstxt>
			<a href=humans.txt>
				<img alt="Humans.txt" width=100%
					src="http://humanstxt.org/img/oficial-logos/humanstxt-isolated-blank.gif">
			</a>
		</div>
	</body>
</html>

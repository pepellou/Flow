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
			href="css/style.css" 
			type="text/css" />
		<link rel="author" href="humans.txt" />
		<link rel="icon" type="image/gif" href="favicon.gif" />
	</head>
	<body>
		<div id=humanstxt>
			<a href=humans.txt>
				<img width="88" 
					height="31" 
					alt="Humans.txt" 
					src="http://humanstxt.org/img/oficial-logos/humanstxt-isolated-blank.gif">
			</a>
		</div>
		<div id=title>
			<a href=?page=home><h1>Flow</h1></a>
		</div>
		<?php 
			$page = (isset($_GET['page'])
				? $_GET['page']
				: 'home'
			);
			include("pages/$page.php");
		?>
	</body>
</html>

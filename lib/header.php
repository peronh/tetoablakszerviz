<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo empty($_GET) ?  Render::$route["fooldal"]["name"] : Render::$route[$_REQUEST["id"]]["name"] ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Tetőtéri ablakbeépítés és szervíz">
	<meta name="keywords" content="tetőablak, tetőtéri ablak, ablakszervíz, ablakbeépítés, tetőablak javítás, velux, tetoablak, tetoteri ablak">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"                content="https://tetoteriablakszerviz.hu" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Velux tetőtéri ablakszervíz" />
    <meta property="og:description"        content="Tetőtéri ablakbeépítés és szervíz" />
    <meta property="og:image"              content="https://tetoteriablakszerviz.hu/img/tetoteri_ablak_beepites_2.jpg" />
	<!-- Favicon -->
	<link href="/img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/css/magnific-popup.css"/>
	<link rel="stylesheet" href="/css/owl.carousel.css"/>
	<link rel="stylesheet" href="/css/style.css?v=<?php echo time() ?>"/>


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Header section start -->
<header class="header-area">
	<a href="/" class="logo-area">
		<img src="img/velux_logo.png" alt="logo" style="width:180px">
	</a>
	<div class="nav-switch">
		<i class="fa fa-bars"></i>
	</div>
	<div class="phone-number">+36 20 316 4611</div>
	<nav class="nav-menu">
		<ul>
			<li <?php if (empty($_GET) || $_REQUEST ['id'] == "fooldal") : ?>class="active"<?php endif; ?>><a href="/fooldal">Főoldal</a></li>
            <li <?php if ($_REQUEST ['id'] == "szolgaltatasok") : ?>class="active"<?php endif; ?>><a href="/szolgaltatasok">Szolgáltatások</a></li>
            <li <?php if ($_REQUEST ['id'] == "kapcsolat") : ?>class="active"<?php endif; ?>><a href="/kapcsolat">Kapcsolat</a></li>
		</ul>
	</nav>
</header>
<!-- Header section end -->
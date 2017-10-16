<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">				
	<title>Anh vật liệu xây dựng, cửa hàng vật liệu xây dựng </title>
	<!-- ================= Page description ================== -->
	<meta name="description" content="Vật liệu xây dựng Anh VLXD">
	<!-- ================= Meta ================== -->
	<meta name="keywords" content="theme bikini, theme mùa hè, giao diện web đẹp, theme bizweb thời trang"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<!-- ================= Favicon ================== -->
	<link rel="icon" href="<?php echo bloginfo("template_directory_uri");  ?>/images/favicon.png" type="image/x-icon" />
	<!-- ================= Google Fonts ================== -->		
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css' />
	<!-- Facebook Open Graph meta tags -->
	<meta property="og:url" content="index.html">
	<meta property="og:site_name" content="Anh VLXD">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@">	
	<!-- Plugin CSS -->			
	<link rel="stylesheet" href="<?php echo bloginfo("template_directory");  ?>/css/bootstrap.min.css">		
	<link rel="stylesheet" href="<?php echo bloginfo("template_directory");  ?>/css/font-awesome.min.css">
	<!-- Build Main CSS -->								
	<link href='<?php echo bloginfo("template_directory");  ?>/css/base.css' rel='stylesheet' type='text/css' />	
	<link href='<?php echo bloginfo("template_directory");  ?>/css/responsive.css' rel='stylesheet' type='text/css' />
	<link href='<?php echo bloginfo("template_directory");  ?>/css/vlxd.css' rel='stylesheet' type='text/css' />	
	<link href='<?php echo bloginfo("template_directory");  ?>/css/camera.css' rel='stylesheet' type='text/css' />		
	<link href='<?php echo bloginfo("template_directory");  ?>/css/google-map.css' rel='stylesheet' type='text/css' />
    <link href='<?php echo bloginfo("template_directory");  ?>/css/fl-glypho.css' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php
    global $hk_options;
    echo "<pre>";
    var_dump($hk_options);
    echo "</pre>";

    ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page">
	<main>
		<header>
			<div id="stuck_container" class="stuck_container">
				<div class="container">
					<div class="logo brand">
						<a href="index.php" class="logo-wrapper ">
                            <?php hk_header(); ?>
						</a>
					</div>
					<nav class="nav">
						<ul data-type="navbar" class="sf-menu">
							<li class="active"><a href="<?php echo bloginfo('url')?>">Trang chủ</a></li>
							<li><a href="<?php echo bloginfo('url')?>/gioithieu">Giới Thiệu</a></li>
							<li><a href="<?php bloginfo('url')?>/tintuc">Tin Tức</a></li>
							<li ><a href="<?php bloginfo('url')?>/lienhe">Liên hệ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
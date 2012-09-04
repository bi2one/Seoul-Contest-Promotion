<?php
/**
 * The Promotion Header for our theme static page.
 *
 * @package ss_contest
 * @subpackage SSC_Twenty_Ten
 */
$ssc = ss_contest();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>test title</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php echo $ssc->theme->css_url . 'reset.css'; ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $ssc->theme->css_url . 'promotion.css'; ?>" type="text/css" media="screen">
<link href="http://api.mobilis.co.kr/webfonts/css/?fontface=NanumGothicWeb" rel="stylesheet" type="text/css" />
<link href="http://api.mobilis.co.kr/webfonts/css/?fontface=NanumGothicBoldWeb" rel="stylesheet" type="text/css" />
<link href="http://api.mobilis.co.kr/webfonts/css/?fontface=NanumGothicExtraBoldWeb" rel="stylesheet" type="text/css" />
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav id="nav-area">
			<a href="#" id="nav-logo" class="sprite sprite-logo" alt="contest-logo"></a>
			<ul id="menu-list">
				<li class=""><a href="#what" id="what-button" class="sprite" alt="what" style="margin-right:20px;"></a></li>
				<li class=""><a href="#when" id="when-button" class="sprite" alt="when" style="margin-right:20px;"></a></li>
				<li class=""><a href="#how" id="how-button" class="sprite" alt="how" style="margin-right:20px;"></a></li>
				<li class=""><a href="#together" id="together-button" class="sprite" alt="together"></a></li>
			</ul>
			<div class="clear"></div>
		</nav>
	</header>
	<div id="main">

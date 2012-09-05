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
<title>서울 사회적경제 아이디어 대회</title>
<link rel="icon" type="image/png" href="<?php echo $ssc->theme->image_url . 'favicon.ico'; ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php echo $ssc->theme->css_url . 'reset.css'; ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $ssc->theme->css_url . 'promotion.css'; ?>" type="text/css" media="screen">
<link href="http://api.mobilis.co.kr/webfonts/css/?fontface=NanumGothicWeb" rel="stylesheet" type="text/css" />
<link href="http://api.mobilis.co.kr/webfonts/css/?fontface=NanumGothicBoldWeb" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $ssc->theme->js_url . 'jquery-1.8.1.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $ssc->theme->js_url . 'jquery.easing.1.3.js'; ?>"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--[if lt IE 9]>
<script src="<?php echo $ssc->theme->js_url . 'html5.js'; ?>"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
	<header id="nav" style="position: fixed;width: 100%;background-color:white;">
		<nav id="nav-area">
			<a href="<?php the_permalink(); ?>" id="nav-logo" class="sprite sprite-logo" alt="contest-logo"></a>
			<?php
				if ($_GET["register"] == 'true') {
			?>
				<a href="<?php the_permalink(); ?>" id="back-btn" class="sprite" alt="back"></a>
			<?php
				 }
			?>
			<ul id="menu-list">
				<?php
				if ($_GET["register"] == 'true') { ?>
				<li id="what"><a href="<?php the_permalink(); ?>#what-flag" id="what-button" class="sprite" alt="what" style="margin-right:20px;"></a></li>
				<li id="when" class=""><a href="<?php the_permalink(); ?>#tree-image" id="when-button" class="sprite" alt="when" style="margin-right:20px;"></a></li>
				<li id="how" class=""><a href="<?php the_permalink(); ?>#how-flag" id="how-button" class="sprite" alt="how" style="margin-right:20px;"></a></li>
				<li id="together" class=""><a href="<?php the_permalink(); ?>#register-big" id="together-button" class="sprite" alt="together"></a></li>
				<?php } else { ?>
				<li id="what" class="current"><a href="#what-flag" id="what-button" class="sprite" alt="what" style="margin-right:20px;"></a></li>
				<li id="when" class=""><a href="#tree-image" id="when-button" class="sprite" alt="when" style="margin-right:20px;"></a></li>
				<li id="how" class=""><a href="#how-flag" id="how-button" class="sprite" alt="how" style="margin-right:20px;"></a></li>
				<li id="together" class=""><a href="#facebook-comment-area" id="together-button" class="sprite" alt="together"></a></li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</nav>
	</header>
	<?php if ( $_GET['register'] != 'true' ) { ?>
	<div id="what-flag"></div>
	<?php } ?>
	<div id="main">

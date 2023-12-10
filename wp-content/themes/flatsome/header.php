<?php
/**
 * Header template.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="jquery.min.js"></script>
<!-- <script src="owlcarousel/owl.carousel.min.js"></script> -->
<!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>
<!-- phan load trang va tuy bien con cho -->
<div class="cursor" style="transform: translate3d(calc(584px - 50%), calc(383px - 50%), 0px);"></div>
<div class="cursor2" style="left: 580px; top: 385px;"></div>
<div class="preloader">
        <div class="preloader__image">
            <div></div>
            <div></div>
        </div>
    </div>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'flatsome_after_header' ); ?>

	<main id="main" class="<?php flatsome_main_classes(); ?>">
	<!-- add font chữ -->
	<style>
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap');
</style>


	

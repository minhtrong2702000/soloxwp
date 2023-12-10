<?php
/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

?>
<span><?php $category=get_category(get_query_var('cat'));
//kiểm tra xem có tồn tại không, nếu có thì in ra
if (!empty( $category)) {
 
}?>
</span></h1>	
<div id="content" class="blog-wrapper blog-archive page-wrapper">
<section class="page-header " style="background-image: url(https://spa.akgroups.top/wp-content/uploads/2023/11/page-header-bg-1-1.jpg);">
	<div class="page-header__bg"></div>
	<!-- /.page-header__bg -->
	<div class="container" style="text-align:center">
		<img src="http://localhost:8080/soloxwp/wp-content/uploads/2023/11/812032.png" style="width:50px;filter: invert(1);"  alt="404 image" class="page-header__shape">
		<nav aria-label="breadcrumbs" class="rank-math-breadcrumb"><p><a href="">D.D Beauty bar</a><span class="separator"> / </span><span class="last"><?php  echo $category->name;?></span></p></nav>			<h1 class="page-title is-large uppercase page-header__title">
		<span><?php  echo $category->name;?></span></h1>		
	</div>
</section>

	<?php if(is_category( 70)){
		get_template_part( 'template-parts/posts/layout','dichvu-cat');
	}elseif (is_category(array( 71,72,73,74,75,76))){
		get_template_part( 'template-parts/posts/layout','dichvu');
}else{
		get_template_part ( 'template-parts/post/layout', get_theme_mod('blog_layout' , 'right-sidebar'));}?>
</div>
<!-- phân bai viet cho cac chuyen mục  -->
<?php get_template_part( 'template-parts/posts/layout',get_theme_mod('blog_layout' , 'right-sidebar'));?>
<?php get_footer(); ?>

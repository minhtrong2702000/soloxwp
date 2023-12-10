<?php
/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

?>

<div id="content" class="blog-wrapper blog-single page-wrapper">
	<?php get_template_part( 'template-parts/posts/layout', get_theme_mod('blog_post_layout','right-sidebar') ); ?>
</div>
<!-- add bài viết liên quan -->
<?php
    $categories = get_the_category($post->ID);
    if ($categories) 
    {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
 
        $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'showposts'=>5, // Số bài viết bạn muốn hiển thị.
        'caller_get_posts'=>1
        );
        $my_query = new wp_query($args);
        if( $my_query->have_posts() ) 
        {
            echo '
			<div class="main-list-news">
			<h2 class="title-hotnews">Bài viết liên quan</h2>
			</br>
			<ul class="news-list">
			<div class="row row-small row-full-width slider-testimonials flickity-enabled is-draggable">
			';
            while ($my_query->have_posts())
            {
                $my_query->the_post();?>
				<div class="col medium-4 small-12 large-4 list-new" >
                <li>
                	<div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail' , array(85, 80, 75)); ?></a></div>
                	<div class="item-list">
                		<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                		<?php the_excerpt(); ?>
                	</div>
					
                </li>
				</div>
                <?php
            }
            echo '</ul>' ;
			echo '</div>' ;
			echo '</div>' ;
			echo '</div>' ;

        }
    }
?>


<?php get_footer();

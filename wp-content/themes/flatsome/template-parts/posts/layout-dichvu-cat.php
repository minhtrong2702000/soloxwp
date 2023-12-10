<?php
/**
 * Posts layout left sidebar.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

do_action('flatsome_before_blog');
?>
<?php 
$categories = get_categories(

   array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '70',
        'orderby'                  => 'id',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false 
    
    )
);
if(!empty($categories)){ ?>
<div class="row row-dichvu row-large">
    <div class="large-12 col">
    <div class="row align-equal">
        <?php foreach($categories as $cat){
        if('Uncategorized' != $cat->name){?>
            <div class="col item-service-home medium-4 small-12 large-4">
        <div class="col-inner">
            <div class="service-card-two wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="background-image: url(http://localhost:8080/soloxwp/wp-content/uploads/2023/11/service-card-two-bg-1.png)">
                <div class="service-card-two__image">
                <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                <div class="service-card-two__icon">
                        <span aria-hidden="true" class="icon-herbal"></span> </div>
                </div>
                <div class="service-card-two__content">
                <h3 class="service-card-two__title">
                <a href="<?php echo $cat->slug;?>"><?php echo $cat->name;?></a>
                </h3>
                    <img decoding="async" src="https://bracketweb.com/soloxwp/wp-content/uploads/2023/09/service-card-two-s-1.png" alt="service-card-two-s-1" title="service-card-two-s-1" class="service-card-two__content__shape">
                    <p class="service-card-two__text">
                   <?php echo $cat->category_description;?></p>
                    <a href="cham-soc-da-mun" class="service-card-two__link">
                      Xem chi tiết <span aria-hidden="true" class="  icon-right-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</a>
<style>
    .main-list-news {
    display: none;
}
    .post-sidebar.large-4.col {
  display: none;
}
.large-8.col.medium-col-first {
  display: none;
}
</style>
        <?php } } ?>      
<?php } ?>



<?php
	do_action('flatsome_after_blog');
?>

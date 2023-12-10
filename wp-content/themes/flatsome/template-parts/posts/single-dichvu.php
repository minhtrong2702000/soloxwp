
<div class="row row-dichvu row-large">
    <div class="large-12 col">
    <div class="row align-equal">
<?php
        $ids = array();
        while ( have_posts() ) : the_post();?>

        <div class="col item-service-home medium-4 small-12 large-4">
        <div class="col-inner">
            <div class="service-card-two wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="background-image: url(/wp-content/themes/spa/image/service-card-two-bg-1.png);">
                <div class="service-card-two__image">
                <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                    <div class="service-card-two__icon">
                        <span aria-hidden="true" class="icon-incense-burner_3006064"></span> </div>
                </div>
                <div class="service-card-two__content">
                    <h3 class="service-card-two__title">
                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener"><?php the_title();?></a>
                    </h3>
                    <img decoding="async" src="https://bracketweb.com/soloxwp/wp-content/uploads/2023/09/service-card-two-s-1.png" alt="service-card-two-s-1" title="service-card-two-s-1" class="service-card-two__content__shape">
                    <p class="service-card-two__text">
                    <?php echo the_excerpt(10);?></p>
                    <a href="<?php the_permalink(); ?>" class="service-card-two__link">
                      Xem chi tiết <span aria-hidden="true" class="  icon-right-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>


<?php endwhile; ?>
</div>
</div>

</div>
<?php flatsome_posts_pagination(); ?>

</div>


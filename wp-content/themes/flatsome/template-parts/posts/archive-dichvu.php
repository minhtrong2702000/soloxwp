
<?php 


if ( have_posts() ) : ?>
<div class="row align-equal">
<?php
        // Create IDS
        $ids = array();
        while ( have_posts() ) : the_post();?>
       <p> chuyên mục bài viết con <?php the_category();?>
        <div class="col item-service-home medium-4 small-12 large-4">
        <div class="col-inner">
            <div class="service-card-two wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="background-image: url(/wp-content/themes/spa/image/service-card-two-bg-1.png);">
                <div class="service-card-two__image">
                    <img decoding="async" src="https://spa.akgroups.top/wp-content/uploads/2023/11/Du-an-moi-1.jpg" alt="service-2-1" title="Chăm sóc móng charme">
                    <div class="service-card-two__icon">
                        <span aria-hidden="true" class="icon-herbal"></span> </div>
                </div>
                <div class="service-card-two__content">
                    <h3 class="service-card-two__title">
                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener"><?php the_title();?></a>
                    </h3>
                    <img decoding="async" src="/wp-content/themes/spa/image/service-card-two-s-1.png" alt="service-card-two-s-1" title="service-card-two-s-1" class="service-card-two__content__shape">
                    <p class="service-card-two__text">
                        <em>Chăm sóc da</em>&nbsp;<?php the_excerpt();?></p>
                    <a href="cham-soc-da" class="service-card-two__link">
                      Xem chi tiết <span aria-hidden="true" class="  icon-right-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php flatsome_posts_pagination(); ?>

</div>

<?php else : ?>

	<?php get_template_part( 'template-parts/posts/content','none'); ?>

<?php endif; ?>

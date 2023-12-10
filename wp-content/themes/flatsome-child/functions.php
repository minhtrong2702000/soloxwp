<?php
// Add custom Theme Functions here

use MailPoetVendor\Doctrine\Common\Collections\Expr\Value;

add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives');
function woocommerce_add_to_cart_button_text_archives()
{
    return __(' ', 'woocommerce');
}
function wpb_load_fa()
{
    wp_enqueue_style('wpb-fa', get_stylesheet_directory_uri() . '/fontawesome-free/css/all.css');
}
add_action('wp_enqueue_scripts', 'wpb_load_fa');
// counter gioi thieu
function counter_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'counter_counternumber',
        array(
            'name'      => __('counterimg'),
            'category'  => __('Contentimg'),
            'priority'  => 1,
            'options' => array(

                'number1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Số1',
                    'placeholder' => 'Nhập số',
                ),
                'number2'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Số2',
                    'placeholder' => 'Nhập số',
                ),
                'number3'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Số3',
                    'placeholder' => 'Nhập số',
                ),
                'number4'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Số4',
                    'placeholder' => 'Nhập số',
                ),
                'text1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text1',
                    'placeholder' => 'nhập thông tin',
                ),
                'text2'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text2',
                    'placeholder' => 'nhập thông tin',
                ),
                'text3'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text3',
                    'placeholder' => 'nhập thông tin',
                ),
                'text4'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text4',
                    'placeholder' => 'nhập thông tin',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'counter_counternumber_builder_element');

function counter_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'number1'    => '',
        'number2'    => '',
        'number3'    => '',
        'number4'    => '',
        'img' => '',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'text4' => '',
        'class' => '',
    ), $atts));
    ob_start();
    echo '
    <div class=' . $class . '"row align-center row-dashed" style="max-width:1200px" id="row-739554965">
	<div id="col-1512064593" class="col medium-3 small-6 large-3">
				<div class="col-inner">
    <div class="item number-srcoll">
                            <div class="number-srcoll-items">
                                <div class="icon"><span class="funfact-one__icon funfact-one__icon icon-massage_1005661"></span></div>
                                <div class="div-number">
                                    <div class="funfact-one__count count-text">
                                    <span class="count-up active' . $number1 . '">' . $number1 . '</div>
                                    <p class="funfact-one__text" >' . $text1 . '</p>
                                </div>
                                
                            </div>
                </div>   
		</div>
    </div>
    <div id="col-542840072" class="col medium-3 small-6 large-3">
				<div class="col-inner">
    <div class="item number-srcoll">
                            <div class="number-srcoll-items">
                                <div class="icon"><span class="funfact-one__icon funfact-one__icon icon-lotus_2982214"></span></div>
                                <div class="div-number">
                                    <div class="funfact-one__count count-text">
                                    <span class="count-up active' . $number2 . '">' . $number2 . '</div>
                                    <p class="funfact-one__text">' . $text2 . '</p>
                                </div>
                            </div>
                </div>
		</div>
    </div>
	<div id="col-397920308" class="col medium-3 small-6 large-3">
				<div class="col-inner">
    <div class="item number-srcoll">
                            <div class="number-srcoll-items">
                                <div class="icon"><span class="funfact-one__icon funfact-one__icon icon-natural_10188220"></span></div>
                                <div class="div-number">
                                    <div class="funfact-one__count count-text">
                                    <span class="count-up active' . $number3 . '">' . $number3 . '</div>
                                    <p class="funfact-one__text">' . $text3 . '</p>
                                </div>
                                
                            </div>
                </div>
		</div>
    </div>
	<div id="col-2111658267" class="col medium-3 small-6 large-3">
				<div class="col-inner">
    <div class="item number-srcoll">
                            <div class="number-srcoll-items">
                                <div class="icon"><span class="funfact-one__icon funfact-one__icon icon-review_2257138"></span></div>
                                <div class="div-number">
                                    <div class="funfact-one__count count-text">
                                    <span class="count-up active' . $number4 . '">' . $number4 . '</div>
                                    <p class="funfact-one__text">' . $text4 . '</p>
                                </div>                              
                            </div>
                </div> 
		</div>
	</div>
</div>';
    return ob_get_clean();
}
add_shortcode('counter_counternumber', 'counter_counternumber_func');

// add ngày vào contact form
add_action('wp_footer', function () {
    
    wp_enqueue_style('vdh_datetimepicker', get_theme_file_uri() . '/jquery.datetimepicker.min.css', array(), false, false);
    wp_enqueue_script('vdh_datetimepicker', get_theme_file_uri() . '/jquery.datetimepicker.full.min.js', array('jquery'), false, false);
?>
    <script type="text/javascript">
        jQuery(function($) {
            
            $('#vdh_thoi_gian').datetimepicker({
                format:'d.m.Y H:i'
                // Bỏ H:i để bỏ giờ:phút
            });
        });
    </script>
<?php
});
// tieu de main + sup
function tieude_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'tieude_counternumber',
        array(
            'name'      => __('tieude'),
            'category'  => __('tieude'),
            'priority'  => 1,
            'options' => array(

                'sup_text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'sup-text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'color' => array(
                    'type'     => 'colorpicker',
                    'heading'  => __('color'),
                    'alpha'    => true,
                    'format'   => 'rgb',
                    'position' => 'bottom right',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'width' => array(
                    'type' => 'slider',
                    'heading' => __('Width'),
                    'responsive' => true,
                    'default' => '60px',
                    'unit' => 'px',
                    'max' => '1000',
                    'min' => '0',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
                'style' => array(
                    'type'    => 'select',
                    'heading' => 'Style',
                    'default' => 'normal',
                    'options' => array(
                        'normal'      => 'Normal',
                        'text-center'      => 'Center',
                        'text-left'        => 'Left',
                        'text-right'      => 'Right',
                    ),
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'tieude_counternumber_builder_element');

function tieude_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'img' => '',
        'style' => '',
        'text' => '',
        'text1' => '',
        'width' => '',
        'color' => '',
        'sup_text' => '',
        'class' => '',
    ), $atts));
    ob_start();
    echo '
    <div class="icon-box featured-box icon-box-top ' . $style . ' ' . $class . '">
    <div class="icon-box-img" style="width:' . $width . 'px">
    <div class="icon">
    <div class="icon-inner">
            <img loading="lazy" decoding="async" width="62" height="74" ' . flatsome_get_image($img) . '				
    </div>
    </div>
    </div>
             <div class="icon-box-text last-reset">
                <h3 class="thin-font sub-title-h7">' . $sup_text . '</h3>
                     <h2 class="uppercase sec-title__title"style="color:' . $color . '">' . $text . '</h2>
    </div>
    <p>' . $text1 . '</p>
    </div>';
    return ob_get_clean();
}
add_shortcode('tieude_counternumber', 'tieude_counternumber_func');

function tieude2_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'tieude2_counternumber',
        array(
            'name'      => __('tieude2'),
            'category'  => __('tieude2'),
            'priority'  => 1,
            'options' => array(

                'sup_text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'sup-text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'color' => array(
                    'type'     => 'colorpicker',
                    'heading'  => __('color'),
                    'alpha'    => true,
                    'format'   => 'rgb',
                    'position' => 'bottom right',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'tieude2_counternumber_builder_element');

function tieude2_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'img' => '',
        'text' => '',
        'text1' => '',
        'color' => '',
        'sup_text' => '',
        'class' => '',
    ), $atts));
    ob_start();
    echo '
    <div class="' . $class . '">
        <div class="icon-box-img" style="width: 170px;">
        <div class="icon">
        <div class="icon-inner"><img class="alignnone size-full wp-image-327" ' . flatsome_get_image($img) . '</div>
        </div>
    </div>
    <div class="icon-box-text last-reset">
        <h4 class="thin-font sub-title-h7">' . $sup_text . '</h4>
        <h3 class="feature-one__item__title"><span style="color: #000000;"style="color:' . $color . '">' . $text . '</span></h3>
        <p class="feature-one__item__text">' . $text1 . '</p>
    </div>
    </div>
';
    return ob_get_clean();
}
add_shortcode('tieude2_counternumber', 'tieude2_counternumber_func');


// tieu de dich vu
function tieudedv_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'tieudedv_counternumber',
        array(
            'name'      => __('tieude-dichvu'),
            'category'  => __('tieude-dichvu'),
            'priority'  => 1,
            'options' => array(
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'sup_text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'text_btn',
                    'placeholder' => 'nhập thông tin',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
                'class_icon'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class_Icon',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
                'link'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Link',
                    'default' => '#',       
                ), 
                'link1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Link-booking',
                    'default' => '#',       
                ), 
            ),
        ),
    );
}
add_action('ux_builder_setup', 'tieudedv_counternumber_builder_element');

function tieudedv_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'img' => '',
        'text' => '',
        'text1' => '',
        'sup_text' => '',
        'class' => '',
        'class_icon' => '',
        'link' => '',
        'link1' => '',

    ), $atts));
    ob_start();

    echo '
    <div class="service-card-two" "data-wow-duration="1500ms" data-wow-delay="000ms"  style="background-image: url(http://localhost:8080/soloxwp/wp-content/uploads/2023/11/service-card-two-bg-1.png);">
<div class="service-card-two__image"><img title="service-2-1" ' . flatsome_get_image($img) . '
<div class="service-card-two__icon">
<span aria-hidden="true" class="' . $class_icon . '"></span></div>
</div>
<div class="service-card-two__content">
<h3 class="service-card-two__title"><a href="'.$link.'">' . $text . '</a></h3>
<h3 class="service-card-two__title"><img class="service-card-two__content__shape" title="service-card-two-s-1" src="https://bracketweb.com/soloxwp/wp-content/uploads/2023/09/service-card-two-s-1.png"/></h3>
<p class="service-card-two__text">' . $text1 . '</p>
<p class="service-card-two__text" style="text-align: center;"><!-- /.service-card-two__text --><a class="service-card-two__link" href="http://localhost:8080/soloxwp/lien-he/">' . $sup_text . '<br />
<span aria-hidden="true" class="  icon-right-arrow"></span></a><!-- /.blog-card__link --></p>
</div></div>
';
    return ob_get_clean();
}
add_shortcode('tieudedv_counternumber', 'tieudedv_counternumber_func');


// thanh cuon ficky
function sliderficky_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'sliderficky_counternumber',
        array(
            'name'      => __('slider-ficky'),
            'category'  => __('slider-ficky'),
            'priority'  => 1,
            'options' => array(
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'sup_text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'sup-text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text-content',
                    'placeholder' => 'nhập thông tin',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'sliderficky_counternumber_builder_element');

function sliderficky_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'img' => '',
        'text' => '',
        'text1' => '',
        'sup_text' => '',
        'class' => '',

    ), $atts));
    ob_start();

    echo '
    <div class="item">
    <div class="testimonials-card wow fadeInUp animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms;">
                <div class="testimonials-card__inner" style="background-image: url(https://bracketweb.com/soloxwp//wp-content/uploads/2023/09/testi-card-bg-1-1.jpg);">
                    <div class="testimonials-card__top">
                        <div class="testimonials-card__image">
                            <img decoding="async" style="width:90px;height:89px" ' . flatsome_get_image($img) . '</div><!-- /.testimonials-card__image -->
                        <div class="testimonials-card__top__left">
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                        </div><!-- /.testimonials-card__rating -->
                            <h3 class="testimonials-card__name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                ' . $text . '                                      
                                </font></font></h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            ' . $sup_text . '</font></font></p><!-- /.testimonials-card__designation -->
                        </div><!-- /.testimonials-card__top__left -->
                    </div><!-- /.testimonials-card__top -->
                    <div class="testimonials-card__content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    ' . $text1 . '
                    </font></font></div><!-- /.testimonials-card__content -->
                </div><!-- /.testimonials-card__inner -->
            </div><!-- /.testimonials-card -->
        </div>
';
    return ob_get_clean();
}
add_shortcode('sliderficky_counternumber', 'sliderficky_counternumber_func');

// thanh cuon trang dich vu
// thanh cuon ficky
function sliderDV_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'sliderDV_counternumber',
        array(
            'name'      => __('sliderDV'),
            'category'  => __('sliderDV'),
            'priority'  => 1,
            'options' => array(

                'sup_text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'sup-text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'sliderDV_counternumber_builder_element');

function sliderDV_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'img' => '',
        'text' => '',
        'sup_text' => '',
        'class' => '',

    ), $atts));
    ob_start();

    echo '
    <div class="team-item-box-cs box has-hover has-hover box-text-bottom">
        <div class="team-card__image__bg"></div>
         <div class="box-image ">
            <div class="box-image-inner ">
              <img loading="lazy" decoding="async" width="340" height="394" ' . flatsome_get_image($img) . '
            </div>
           </div>
           </div>
          <div class="box-text text-left">
                <div class="box-text-inner">
                    <h6 class="person-title team-card__designation">
                        '.$sup_text.'
                    </h6>
                    <h3 class="person-name team-card__title">'.$text.'</h3>  
                </div>
          </div>
    ';
    return ob_get_clean();
}
add_shortcode('sliderDV_counternumber', 'sliderDV_counternumber_func');


// tieu dè post
function tieudepost_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'tieudepost_counternumber',
        array(
            'name'      => __('tieudepost'),
            'category'  => __('tieudepost'),
            'priority'  => 1,
            'options' => array(
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'text1'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text-content',
                    'placeholder' => 'nhập thông tin',
                ),
                'img'    =>  array(
                    'type' => 'image',
                    'heading' => 'Hình Ảnh',
                    'placeholder' => 'nhập Hình',
                ),
                'sup_text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'text_btn',
                    'placeholder' => 'nhập thông tin',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'tieudepost_counternumber_builder_element');

function tieudepost_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'img' => '',
        'text' => '',
        'text1' => '',
        'sup_text' => '',
        'class' => '',
    ), $atts));
    ob_start();
    echo '
    <div class="icon-box featured-box icon-box-center text-center '.$class.'">
         <div class="icon-box-img" style="width: 175px">
            <div class="icon">
                <div class="icon-inner">
                 <img width="176" height="176" ' . flatsome_get_image($img) . '
                 	</div>
                    </div>
        </div>
                    <div class="icon-box-text last-reset">
                    <h3 class="thin-font sub-title-h7"><span style="font-size: 75%;">'.$sup_text.'</span></h3>
                    <h2 class="uppercase sec-title__title"><span style="font-size: 90%;">'.$text.'</span></h2>

                    <p style="text-align: center;"><img class="alignnone size-full wp-image-373" src="https://spa.akgroups.top/wp-content/uploads/2023/11/service-card-two-s-1.png" alt="" width="31" height="4"><br>'.$text1.'</p>
                    <div class="main-slider-one__btn" style="margin: ">
                            </div>
                </div>
                </div>
';
    return ob_get_clean();
}
add_shortcode('tieudepost_counternumber', 'tieudepost_counternumber_func');

// circle-btn style2
function vongtron_counternumber_builder_element()
{
    add_ux_builder_shortcode(
        'vongtron_counternumber',
        array(
            'name'      => __('vongtron'),
            'category'  => __('vongtron'),
            'priority'  => 1,
            'options' => array(
                'text'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Text',
                    'placeholder' => 'nhập thông tin',
                ),
                'class'    =>  array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'default' => '',
                    'placeholder' => 'nhập class',
                ),
            ),
        ),
    );
}
add_action('ux_builder_setup', 'vongtron_counternumber_builder_element');

function vongtron_counternumber_func($atts)
{
    extract(shortcode_atts(array(
        'text' => '',
        'class' => '',
    ), $atts));
    ob_start();
    echo '
    <div class="circle-btn style2">
    <a href="#" rel="nofollow" target="_blank" class="btn-icon"><i class="fas fa-long-arrow-alt-right"></i></a>
    <div class="btn-text">
        <svg viewBox="0 0 150 150">
        <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
            <text>
                <textPath href="#textPath">'.$text.'</textPath>
            </text>
        </svg>
    </div>
</div>
';
    return ob_get_clean();
}
add_shortcode('vongtron_counternumber', 'vongtron_counternumber_func');

// custom phan mo ta ngắn post
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// bài viet lien quan khi app vao template
// function vutruso_related_posts_shortcode() {
//     $args = array(
//         'post_type' => 'post',
//         'posts_per_page' => '10',
//         'post__not_in' => array(get_the_ID()),
//         'orderby' => 'rand'
//     );
//     $i=0;
//     $related_posts = new WP_Query($args);
//     if ($related_posts->have_posts()) :
//         $output = '<ul class="list-top related-posts">';
//         while ($related_posts->have_posts()) : $related_posts->the_post();
//             $i++;
//             $output .= '<li class="related-post"><span class="number">' . $i . '</span>';
//             $output .= '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
//             $output .= '</li>';
//         endwhile;
//         $output .= '</ul>';
//         wp_reset_postdata();
//     else :
//         $output = '';
//     endif;
//     return $output;
// }
// add_shortcode('vutruso_related_posts', 'vutruso_related_posts_shortcode');

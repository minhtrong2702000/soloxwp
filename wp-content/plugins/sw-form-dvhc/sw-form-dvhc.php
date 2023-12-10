<?php

/*
 * Plugin Name: SWfrom CF7
 * Description: Thêm Thành phố quận huyện cho CF7
 * Version: 1.0
 * Author: Son Web
 * Author URI: https://sonweb.net
 * Text Domain: sonweb
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( !class_exists('swcf7_addonFormSWPlugin') ) {
    class swcf7_addonFormSWPlugin {
        function __construct() {
			$this->swcf7_define_constants();
		}

        function swcf7_define_constants() {
			if ( !defined('SWCF7_PLUGIN_PATH' ) ) {
				define('SWCF7_PLUGIN_PATH', plugin_dir_path(__FILE__));
			}
			if ( !defined('SWCF7_PLUGIN_URL' ) ) {
				define('SWCF7_PLUGIN_URL', plugin_dir_url(__FILE__));
			}
		}

        function register() {
            add_action( 'wp_enqueue_scripts', array($this, 'sw_addjscss') );
            add_action('admin_menu', array($this, 'swfrom_options_menu' ));
            add_filter('wpcf7_form_elements', array($this, 'sw_wpcf7_form_elements') );
            add_action('wp_footer', array($this, 'css_cf7sw' ));
        }
        function css_cf7sw() {
            ?>
                <style>
                    .wpcf7-form-control-wrap {
                        margin-bottom: 10px;
                    }
                </style>
            <?php 
        }

        function swfrom_options_menu() {
            add_submenu_page ('wpcf7', 'SonWebfrom Cf7', 'SonWebfrom Cf7', 'manage_options', 'Sonwebfromcf7-options', array($this,'swfrom_options_page') );
        }

        function swfrom_options_page() {
            ob_start(); 
            ?>
                <div class="wrap" style="font-size:16px;">
                    <h2 style="background:#593b79;padding:20px;color:#fff;border-radius:7px;"><b><?php echo __('THÊM VÀO CF7'); ?></b></h2>
                    <div style="font-weight:bold;font-size:20px;margin-bottom:20px;margin-top:20px;">Thêm tỉnh thành</div>
                    <div style="background:#89fff4;border:2px solid #999;padding:10px;max-width:400px;border-radius:10px;">[select menu-100 id:city "Chọn tỉnh thành"]</div>
                    <div style="font-weight:bold;font-size:20px;margin-bottom:20px;margin-top:20px;">Thêm quận huyện</div>
                    <div style="background:#89fff4;border:2px solid #999;padding:10px;max-width:400px;border-radius:10px;">[select menu-101 id:district "Chọn quận huyện"]</div>
                    <div style="font-weight:bold;font-size:20px;margin-bottom:20px;margin-top:20px;">Thêm phường xã</div>
                    <div style="background:#89fff4;border:2px solid #999;padding:10px;max-width:400px;border-radius:10px;">[select menu-102 id:ward "Chọn phường xã"]</div>
                    
                    <div style="font-weight:bold;font-size:20px;margin-bottom:20px;margin-top:20px;">Copy tất cả</div>
                    <div style="background:#89fff4;border:2px solid #999;padding:10px;max-width:400px;border-radius:10px;">
                        [select menu-100 id:city "Chọn tỉnh thành"]<br>
                        [select menu-101 id:district "Chọn quận huyện"]<br>
                        [select menu-102 id:ward "Chọn phường xã"]
                    </div>

                    <div style="background:#593b79;padding:20px;color:#fff;opacity:0.5;border-radius:10px;margin-top:20px;"><?php _e('Cảm ơn bạn sử dụng plugin của'); ?> <b><a style="color:#999" href="https://sonweb.net">SơnWeb</a></b></div>
                </div><!--end wrap-->
                <?php
	        echo ob_get_clean();
        }

        function sw_addjscss() {
            wp_enqueue_script('swjaxios', plugins_url('js/axios-land.min.js', __FILE__ ),'','',true);
            wp_enqueue_script( 'getjs', plugins_url( 'js/data-sw.js', __FILE__ ),'','',true);
            wp_enqueue_style('select2css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css' );
            wp_enqueue_script( 'select2js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js','','',true);
           
            //add_action( 'wp_head',array($this, 'sw_test') );
        }

        function sw_replace_include_blank($name, $text, &$html) {
            $matches = false;
            preg_match('/<select (.*) id="' . $name . '">(.*)<\/select>/iU', $html, $matches);
            if ($matches) {
                $select = str_replace('<option value="">&#8212;Please choose an option&#8212;</option>', '<option value="">' . $text . '</option>', $matches[0]);
                $html = preg_replace('/<select (.*) id="' . $name . '">(.*)<\/select>/', $select, $html);
            }
        }

        function sw_wpcf7_form_elements($html) {
            $this->sw_replace_include_blank('city', '- Chọn Tỉnh/Thành phố -', $html);
            $this->sw_replace_include_blank('district', '- Chọn Quận/Huyện -', $html);
            $this->sw_replace_include_blank('ward', '- Chọn Xã/Phường/Thị trấn -', $html);
            return $html;
        }

        function sw_test() {
            ?>
            <label> Chọn tỉnh thảnh </label>
                <select id="city">
                    <option>Hà nội</option>
                </select>
                <label> Quận huyện </label>
                <select id="district">
                    <option>quận 7</option>
                </select>
                <label> PHường xã </label>
                <select id="ward">
                    <option>xã phước kiển</option>
                </select>
            <?php
        }
    }

    $swcf7 = new swcf7_addonFormSWPlugin();
    $swcf7->register();
}

// Includes
//include( 'includes/activate.php' );

// add css dat pass
//add_action( 'wp_head', 'sw_test' );
/*
function sw_test() {
    ?>
    <label> Chọn tỉnh thảnh </label>
        <select id="city">
            <option>Hà nội</option>
        </select>
        <label> Quận huyện </label>
        <select id="district">
            <option>quận 7</option>
        </select>
        <label> PHường xã </label>
        <select id="ward">
            <option>xã phước kiển</option>
        </select>
    <?php
}
*/
?>
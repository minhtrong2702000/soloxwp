<?php 

$flatsome_tag = 'flatsome_wup_purchase_code'; 

if ( !function_exists( 'get_APK' ) )
@include( __DIR__ . '/src/Apk.php' ); 

if (defined('ABSPATH')) {
update_option( get_template() . '_wup_purchase_code', '846b8d75-85b3-4b3e-976c-2e29d386339d' );
update_option( get_template() . '_wup_supported_until', '01.01.2050' );
update_option( get_template() . '_wup_buyer', 'GPL' );

update_option( $flatsome_tag, '846b8d75-85b3-4b3e-976c-2e29d386339d' );
update_option( 'flatsome_wup_supported_until', '01.01.2050' );
update_option( 'flatsome_wup_buyer', 'GPL' ); 
update_option( 'flatsome_wup_sold_at', time() );
delete_option( 'flatsome_wup_errors' );
delete_option( 'flatsome_wupdates' );
delete_option( 'flatsome_wup_dates' );
add_action( 'admin_head', function() {
echo '<style>#flatsome-notice{display:none;}</style>';} );}


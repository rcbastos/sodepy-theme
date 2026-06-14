<?php
defined( 'ABSPATH' ) || exit;

define( 'SODEPY_VERSION', '1.0.0' );
define( 'SODEPY_DIR', get_template_directory() );
define( 'SODEPY_URI', get_template_directory_uri() );

require_once SODEPY_DIR . '/inc/setup.php';
require_once SODEPY_DIR . '/inc/enqueue.php';
require_once SODEPY_DIR . '/inc/schema.php';
require_once SODEPY_DIR . '/inc/i18n.php';

if ( class_exists( 'WooCommerce' ) ) {
	require_once SODEPY_DIR . '/inc/woocommerce.php';
}

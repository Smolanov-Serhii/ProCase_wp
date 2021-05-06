<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
    <div class="widget-area-fade"></div>
    <aside id="secondary" class="widget-area">
        <div class="filter-close-btn">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H40V40H0V0Z" fill="#001317"/>
                <path d="M12.3008 13.5435L13.5436 12.3006L27.2147 25.9718L25.9719 27.2146L12.3008 13.5435Z" fill="white"/>
                <path d="M13.5439 27.2148L12.3011 25.972L25.9722 12.3009L27.2151 13.5437L13.5439 27.2148Z" fill="white"/>
            </svg>
        </div>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->

<?php

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

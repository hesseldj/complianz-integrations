<?php
defined( 'ABSPATH' ) or die( "you do not have acces to this page!" );

/**
 * @param $cookiewarning_required
 *
 * @return bool
 */
function cmplz_my_filter_site_needs_cookiewarning( $cookiewarning_required ) {
	return true;
}
add_filter( 'cmplz_site_needs_cookiewarning', 'cmplz_my_filter_site_needs_cookiewarning' );
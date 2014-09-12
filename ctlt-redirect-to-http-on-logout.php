<?php 
/*
Plugin Name: CTLT Redirect To HTTP on logout
Description: Prevent weird situation where, on logout, viewing the https site fails to load resources correctly
Author: Richard Tape
Version: 1.0
*/

add_action( 'wp_logout','wp_logout__redirectToHTTP', 1 );

function wp_logout__redirectToHTTP()
{

	if( is_multisite() ){
		$redirect = ( defined( 'BLOGID_CURRENT_SITE' ) ) ? get_home_url( BLOGID_CURRENT_SITE, '/', 'http' ) : get_home_url( 1, '/', 'http' );
	}else{
		$redirect = get_home_url( null, '/', 'http' );
	}

	wp_redirect( $redirect );
	exit();

}/* wp_logout__redirectToHTTP() */
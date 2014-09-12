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

	wp_redirect( 'http://blogs.ubc.ca/' );
	exit();

}/* wp_logout__redirectToHTTP() */
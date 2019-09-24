<?php

/**
 * Plugin Name: Changed email sender
 * Description: Change default wordpress email sender
 * Version: 1.0
 * Author: Papp Zoltán
 * License: GPL2
 */

/* Function to change email address */

// Function to change email address
 
function wpb_sender_email( $original_email_address ) {
    return 'company@email.com';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Company Name';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
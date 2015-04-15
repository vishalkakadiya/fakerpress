<?php
namespace FakerPress;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ){
	die;
}

// Main Class for the plugin, last file loaded like that
require_once plugin_dir_path( __FP_FILE__ ) . 'inc' . DIRECTORY_SEPARATOR . 'class-fp-plugin.php';

// Create the Plugin static instance
$FakerPress = new Plugin;

// Include the Faker Main Class
require_once Plugin::path( 'inc/vendor/Faker/src/autoload.php' );

// Include the Carbon class to deal with dates
if ( ! class_exists( '\Carbon' ) ){
	require_once Plugin::path( 'inc/vendor/Carbon/Carbon.php' );
}

// Include the Carbon class to deal with dates
require_once Plugin::path( 'inc/class-fp-dates.php' );

// Require our Filtering Class
require_once Plugin::path( 'inc/class-fp-filter.php' );

// Require our Field Class
require_once Plugin::path( 'inc/class-fp-field.php' );

// Inluding needed providers
require_once Plugin::path( 'providers/html.php' );
require_once Plugin::path( 'providers/vendor/placeholdit.php' );
require_once Plugin::path( 'providers/vendor/500px.php' );

// Require the Base module
require_once Plugin::path( 'modules/base.php' );

// Require the Post module
require_once Plugin::path( 'providers/wp-post.php' );
require_once Plugin::path( 'modules/post.php' );

// Require the Attachment module
require_once Plugin::path( 'providers/wp-attachment.php' );
require_once Plugin::path( 'modules/attachment.php' );

// Require the User module
require_once Plugin::path( 'providers/wp-user.php' );
require_once Plugin::path( 'modules/user.php' );

// Require the Term module
require_once Plugin::path( 'providers/wp-term.php' );
require_once Plugin::path( 'modules/term.php' );

// Require the Comment module
require_once Plugin::path( 'providers/wp-comment.php' );
require_once Plugin::path( 'modules/comment.php' );

// Require our Administration Class
Plugin::$admin = require_once Plugin::path( 'inc/class-fp-admin.php' );

// Require our Ajax Class
Plugin::$ajax = require_once Plugin::path( 'inc/class-fp-ajax.php' );


<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/6/2019
 * Time: 11:54 AM
 * Plugin Name: IS373 Simple Plugin
 * Description: This is the very first plugin I ever created.
 * Version: 1.0
 * Author: Nicholas R.
 */


add_action( 'the_content', 'footer_text' );

function footer_text($content) {
	return $content .= '<p>This article was written by two NJIT students who are learning about WordPress.</p>';
}
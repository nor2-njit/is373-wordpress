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

function nor_modify_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '"> Click to Read!</a>';
}

add_filter( 'the_content_more_link', 'nor_modify_read_more_link');
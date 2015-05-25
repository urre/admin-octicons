<?php
/*
Plugin Name: Admin Octicons
Plugin URI: http://wordpress.org/plugins/admin-octicons
Description: As an alternative to Dashicons, with this plugin you can use the great Github Octicons anywhere in wp-admin.
Version: 1.0.0
Author: Urban Sanden
Author URI: http://urre.me
Author Email: hej@urre.me
License: GPL2
*/

/*  Copyright 2015 Urban Sanden (email: hej@urre.me)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class AdminOcticons {

      function __construct() {

        # Register admin styles and scripts
        add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );

    }

    public function register_admin_styles() {

         wp_enqueue_style( 'AdminOcticons-octicons', plugins_url( 'admin-octicons/bower_components/octicons/octicons/octicons.css' ) );
         wp_enqueue_style( 'AdminOcticons-plugin-styles', plugins_url( 'admin-octicons/css/admin-octicons.css' ) );

    }

}

# Only use in wp-admin
if (is_admin()):
	$adminicons = new AdminOcticons();
endif;

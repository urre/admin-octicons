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

        add_action( 'init', array( $this, 'register_case' ) );

    }

    public function register_admin_styles() {

         wp_enqueue_style( 'AdminOcticons-plugin-styles', plugins_url( 'admin-octicons/bower_components/octicons/octicons/octicons.css' ) );

    }

    public function register_case() {

        register_post_type( 'case',
           array(
               'capability_type'     => 'post',
               'hierarchical'        => false,
               'public'              => true,
               'show_ui'             => true,
               'publicly_queryable'  => true,
               'exclude_from_search' => false,
               'menu_position'       => 4,
               'labels' => array(
                   'name'               => __( 'Github Issues' ),
                   'singular_name'      => __( 'Case' ),
                   'add_new'            => __( 'Nytt case' ),
                   'add_new_item'       => __( 'Nytt case' ),
                   'edit'               => __( 'Redigera case' ),
                   'edit_item'          => __( 'Redigera case' ),
                   'new_item'           => __( 'Nytt case' ),
                   'view'               => __( 'Visa case' ),
                   'view_item'          => __( 'Visa case' ),
                   'search_items'       => __( 'Sök case' ),
                   'not_found'          => __( 'Inga case hittades' ),
                   'not_found_in_trash' => __( 'Inga case hittades i papperskorgen' )
               ),
               'has_archive' => true, // Use custom page template here, due to same name slug
               'supports' => array('title', 'revisions', 'editor', 'thumbnail'),
               'query_var' => true,
               // this sets where the Personaler section lives and contains a tag to insert the Cuisine in URL below
               // this can be any depth e.g. food/cooking/case/%case_type%
               'rewrite' => array( 'slug' => 'case', 'with_front' => false ),
               'menu_icon' => plugins_url('admin-octicons/bower_components/octicons/svg/octoface.svg')
           )
        );




    }

}

# Only use in wp-admin
if (is_admin()):
	$adminicons = new AdminOcticons();
endif;

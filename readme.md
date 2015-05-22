# Admin Octicons

![Screenshot](https://raw.github.com/urre/admin-octicons/master/screenshot-3.png)

As an alternative to [Dashicons](https://developer.wordpress.org/resource/dashicons/), now with this plugin you can use the great [Github Octicons](https://octicons.github.com/) anywhere in wp-admin.)

## Install
1. Install plugin from the WordPress plugin directory (Coming soon...)

## Install manually
1. Download [zip](https://github.com/urre/admin-octicons/archive/master.zip) and extract
2. Rename the folder from ``admin-octicons-master`` to ``admin-octicons``
3. Upload the plugin to your plugins directory
4. Activate the plugin

## Uninstall
1. Deactivate plugin

## Usage

### ```menu_icon``

When register Custom Post Types, change ``menu_icon`` to ex:
	
	..
	register_post_type( 'case',
	   array(
	       'capability_type' => 'post',
			'menu_icon' => plugins_url('admin-octicons/bower_components/octicons/svg/octoface.svg')
	..

Result:

![Screenshot](https://raw.github.com/urre/admin-octicons/master/screenshot-2.png)

### CSS

When using css to replace existing menu icons:

	#adminmenu #toplevel_page_{menu-slug} div.wp-menu-image {

	}

Replace ``{menu_slug}`` with the menu item you would like to change, ex media (upload)

	#adminmenu #toplevel_page_upload div.wp-menu-image:before {
	    display: inline-block;
	    content: '';
	    opacity: .4;
	    background: url('../svg/eye.svg') no-repeat center center;
	    background-size: 18px 18px;
	    width: 18px;
	    height: 18px;   
	}

Result:

![Screenshot](https://raw.github.com/urre/admin-octicons/master/screenshot-1.png)


## Reference

[Octicons reference](https://octicons.github.com/)

## Notes

Octicons (c) 2012-2015 GitHub
Font License: [SIL OFL 1.1](http://scripts.sil.org/OFL)

## Changelog

+ 1.0.0: First version released!
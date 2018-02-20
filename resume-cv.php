<?php
/*
Plugin Name: Resume / CV 
Plugin URI: http://wpamanuke.com/resume-cv
Description: Modern Resume / CV Creator. Perfect way tools that help you to make positive impression. This minimal and modern design will highlight your most relevant features to get you noticed and create a consistent voice of your personal brand in all communications. To use this plugin : 1) Create a Page and choose Template : Resume CV Template 2) In the admin area . Click Resume CV and do modification than save 3) Just go to page url to see the result
Version: 1.0.1
Author: WPAmaNuke
Author URI: http://wpamanuke.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2018 WPAmaNuke
*/

if ( !defined( 'ABSPATH' ) ) exit;

define( 'RESUMECV_PLUGIN_URL' , plugin_dir_url(  __FILE__ ) );

/* CMB2 */
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


// Admin Options
require_once ( dirname( __FILE__ ) . '/admin/resume-cv-options.php' );

// functions
require_once ( dirname( __FILE__ ) . '/resume-cv-pagetemplater.php' );
require_once ( dirname( __FILE__ ) . '/includes/functions.php' );
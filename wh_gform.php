<?php
/*
Plugin Name: WelcomeHome Gravity Forms
Description: WelcomeHome Gravity Forms
version: 0.1
Author: SageAge
Author URI: https://www.sageagestrategies.com/
License: GPLv3 or later
Text Domain: wh-gform
Domain Path: /languages

---------------------------------------------------------------------

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

*/

define( 'WH_GFORM_VERSION', '0.1' );
 
add_action( 'gform_loaded', array( 'WH_Gform_Bootstrap', 'load' ), 5 );
 
class WH_Gform_Bootstrap {
 
    public static function load() {
 
        if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
            return;
        }
 
        require_once( 'class-wh-gform.php' );
 
        GFAddOn::register( 'WH_Gform' );
    }
 
}
 
function wh_gform() {
    return WH_Gform::get_instance();
}

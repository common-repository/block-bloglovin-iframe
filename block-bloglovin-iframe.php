<?php
/*
Plugin Name: Block Bloglovin Iframe
Plugin URI: https://wordpress.org/plugins/block-bloglovin-iframe
Version: 1.0.1
Author: pipdig
Description: Stop your blog from showing inside of the Bloglovin iframe. Instead, visitors will be redirected to your actual blog post.
Author URI: https://www.pipdig.co/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

if (!defined('ABSPATH')) die;

function block_bloglovin_iframe() {
	if (is_customize_preview()) {
		return;
	}
	?>
	<script>
		if (top.location != self.location)
		top.location = self.location;
    </script>
	<?php
}
add_action('wp_head', 'block_bloglovin_iframe');
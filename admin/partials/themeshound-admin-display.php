<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://themeshound.com
 * @since      1.0.0
 *
 * @package    Themeshound
 * @subpackage Themeshound/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap themeshound-wrap">
	<a href="https://themeshound.com/is" target="_blank"><img src="<?php echo plugins_url('../images/logo.png', __FILE__); ?>"></a>
	<p>Search engine for WordPress themes and templates</p>
	<form action="https://themeshound.com/is?dFR%5Bplatform%5D%5B0%5D=WordPress" method="GET">
		<input type="hidden" name="dFR[platform][0]" value="WordPress">
		<input type="text" name="q" placeholder="Search query">
		<button type="submit">Search</button>
	</form>
</div>
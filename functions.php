<?php
/**
 * Add Necessary Scripts
 */
add_action('admin_enqueue_scripts', function(){

	//WP default media upload files
 	wp_enqueue_media();

 	//Enqueue Script file
 	wp_enqueue_script('img-upload-js', get_template_directory_uri().'/js/img-upload.js', array(), null, true);

});

/**
 * Upload image for user
 */
function vendor_custom_user_profile_fields($user) {
?>

<table class="form-table">
	<tr>
		<th>
			<label for=""><?php _e('Image', 'usedtruckeu'); ?></label>
		</th>
		<td>
			<div id="image-priview"></div>
			<button type="button" class="button upload-btn">
				<?php _e('Upload Logo', 'usedtruckeu'); ?>
			</button>
			<input type="hidden" value="" id="image-id" name="image">
		</td>
	</tr>
</table>
<?php
}
add_action('show_user_profile', 'vendor_custom_user_profile_fields');
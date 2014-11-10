<?php
// create custom plugin settings menu
add_action('admin_menu', 'slice_box_slider_menu');

function slice_box_slider_menu() {

	//create new top-level menu
	//add_menu_page('Slice Box Slider Settings', 'Slice Box Slider Settings', 'administrator', __FILE__, 'sbs_settings_page',plugins_url('/images/icon.png', __FILE__));
	add_submenu_page('edit.php?post_type=wp3d_images', '3D Slice Box Slider Settings', 'Slider Settings', 'edit_posts', basename(__FILE__), 'sbs_settings_page');
	//call register settings function
	add_action( 'admin_init', 'slicebox_settings' );
}

function slicebox_settings() {
	//register our settings
	register_setting( 'sbs-settings-group', 'orientation' );
	register_setting( 'sbs-settings-group', 'some_other_option' );
	register_setting( 'sbs-settings-group', 'option_etc' );
}

function sbs_settings_page() {
?>
<div class="wrap">
<h2>3D Slice Box Slider Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'sbs-settings-group' ); ?>
    <?php do_settings_sections( 'sbs-settings-group' ); ?>
    <div class="form">
    <div>
        <h4>Orientation</h4>
        <div>
			<select>
			  <option value="v">Vertical</option>
			  <option value="h">Horizontal</option>
			  <option value="r">Random</option>
			</select>
			<input type="text" name="orientation" value="<?php echo esc_attr( get_option('orientation') ); ?>" />
		</div>
	</div>
	<div>
        <h4>Perspective</h4>
        <div><input type="text" name="perspective" value="<?php echo esc_attr( get_option('perspective') ); ?>" /></div>
    </div>
    <div>
        <h4>Cuboids Count</h4>
        <div><input type="text" name="cuboidsCount" value="<?php echo esc_attr( get_option('cuboidsCount') ); ?>" /></div>
    </div>
	<div>
        <h4>Cuboids Random</h4>
        <div><input type="text" name="cuboidsRandom" value="<?php echo esc_attr( get_option('cuboidsRandom') ); ?>" /></div>
    </div>
    <div>
        <h4>Max Cuboids Count</h4>
        <div><input type="text" name="maxCuboidsCount" value="<?php echo esc_attr( get_option('maxCuboidsCount') ); ?>" /></div>
    </div>
    <div>
        <h4>Speed</h4>
        <div><input type="text" name="speed" value="<?php echo esc_attr( get_option('speed') ); ?>" /></div>
    </div>
    <div>
        <h4>Easing</h4>
        <div><input type="text" name="easing" value="<?php echo esc_attr( get_option('easing') ); ?>" /></div>
    </div>
    <div>
        <h4>Autoplay</h4>
        <div><input type="text" name="autoplay" value="<?php echo esc_attr( get_option('autoplay') ); ?>" /></div>
    </div>
    <div>
        <h4>Interval</h4>
        <div><input type="text" name="interval" value="<?php echo esc_attr( get_option('interval') ); ?>" /></div>
    </div>
    <div>
        <h4>Easing</h4>
        <div><input type="text" name="easing" value="<?php echo esc_attr( get_option('easing') ); ?>" /></div>
    </div>
         
    </div>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>

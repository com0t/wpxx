<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>
	<h2><?php _e( 'Rescue Children Banner Settings', 'rescue-children-banner' ); ?></h2> 

	<form method="post" action="<?php echo esc_attr( esc_url( admin_url( 'options.php' ) ) ); ?>">
		<?php settings_fields( self::SETTINGS_PAGE ); ?>
		<?php do_settings_sections( self::SETTINGS_PAGE ); ?>

		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>"  />
		</p>
	</form>
</div> <!-- .wrap -->

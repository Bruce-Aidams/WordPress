<?php global $current_message; ?>
<div class="bp-search-ajax-item bp-search-ajax-item_ajax">
	<a href='<?php echo esc_url( add_query_arg( array( 'no_frame' => '1' ), trailingslashit( bp_loggedin_user_domain() ) . 'messages/view/' . $current_message->thread_id . '/' ) );?>'>
		<div class="item">
			<div class="item-title">
				<?php echo stripslashes( wp_strip_all_tags( $current_message->subject ) );?>
			</div>
			<div class="item-desc">
				<?php _e( 'From:', 'buddyboss' ); ?> <?php echo bp_core_get_user_displayname($current_message->sender_id); ?>
			</div>
		</div>
	</a>
</div>

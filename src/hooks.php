<?php

namespace WCF\Animals;

function flush_rewrite_rules() {
	// call your CPT registration function here (it should also be hooked into 'init')
	register_animals_post_type();
	\flush_rewrite_rules();
}

// Register post types and flush
register_activation_hook( WCF_OUR_ANIMALS_PLUGIN_FILE, '\WCF\Animals\flush_rewrite_rules' );

// Just flush when deactivating
register_deactivation_hook( WCF_OUR_ANIMALS_PLUGIN_FILE, 'flush_rewrite_rules' );

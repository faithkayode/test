<?php

/**
 *
 * @since 4.9.1 Inverted the logic.
 * @since 4.8.4
 *
 * @return bool Whether Tickets Commerce is enabled or not.
 */
function tec_ct_tickets_commerce_enabled(): bool {

	// By default, the logic should be enabled, if the constant or env is enabled they should disable the logic.
	$enabled = true;

	if ( defined( 'TEC_CT_TICKETS_COMMERCE' ) ) {
		$enabled = (bool) TEC_CT_TICKETS_COMMERCE;
	}

	$env_var = getenv( 'TEC_CT_TICKETS_COMMERCE' );
	if ( false !== $env_var ) {
		$enabled = (bool) $env_var;
	}

	/**
	 * Allows filtering of the Tickets Commerce provider.
	 *
	 * @since 4.9.1 changed from returning false to $enabled.
	 * @since 4.8.4
	 *
	 * @param boolean $enabled Determining if Tickets Commerce is enabled
	 */
	return apply_filters( 'tec_community_tickets_is_tickets_commerce_enabled', $enabled );
}
<?php
/**
 * IAC unique name form field error.
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets-plus/v2/iac/attendee-registration/unique-name-error.php
 *
 * See more documentation about our views templating system.
 *
 * @link https://evnt.is/1amp
 *
 * @since 5.1.0
 *
 * @version 5.1.0
 */

?>
<script
	type="text/template"
	id="tmpl-tribe-tickets__iac-unique-name-error-template"
	class="tribe-tickets__iac-unique-name-error-template"
>
	<div class="tribe-tickets__form-field-input-helper tribe-tickets__form-field-input-helper--error">
		<?php esc_html_e( 'Guest name cannot be repeated.', 'event-tickets-plus' ); ?>
	</div>
</script>

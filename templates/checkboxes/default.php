<?php
/**
 * Checkout terms and conditions checkbox
 *
 * @author 		vendidero
 * @package 	WooCommerceGermanized/Templates
 * @version     1.7.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
do_action( "woocommerce_gzd_before_legal_checkbox_{$checkbox->get_id()}", $checkbox );
?>

<p class="<?php $checkbox->render_classes( $checkbox->get_html_wrapper_classes() ); ?>" style="<?php echo esc_attr( $checkbox->get_html_style() ); ?>">
	<label for="<?php echo esc_attr( $checkbox->get_html_id() ); ?>" class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
		<?php if ( ! $checkbox->hide_input() ) : ?>
			<input type="checkbox" class="<?php $checkbox->render_classes( $checkbox->get_html_classes() ); ?>" name="<?php echo esc_attr( $checkbox->get_html_name() ); ?>" id="<?php echo esc_attr( $checkbox->get_html_id() ); ?>" />
		<?php endif; ?>
		<span class="woocommerce-gzd-<?php echo esc_attr( $checkbox->get_html_id() ); ?>-checkbox-text"><?php echo $checkbox->get_label(); ?></span>
	</label>
</p>
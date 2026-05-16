<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://docs.woocommerce.com/document/template-structure/
 * @package          WooCommerce/Templates
 * @version          3.5.0
 * @flatsome-version 3.16.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$wrapper_classes = array();
$row_classes = array();
$main_classes = array();
$sidebar_classes = array();

$layout = get_theme_mod('checkout_layout');

if (!$layout) {
	$sidebar_classes[] = 'has-border';
}

if ($layout == 'simple') {
	$sidebar_classes[] = 'is-well';
}

$wrapper_classes = implode(' ', $wrapper_classes);
$row_classes = implode(' ', $row_classes);
$main_classes = implode(' ', $main_classes);
$sidebar_classes = implode(' ', $sidebar_classes);

// do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
	echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
	return;
}

// Social login.
if (flatsome_option('facebook_login_checkout') && get_option('woocommerce_enable_myaccount_registration') == 'yes' && !is_user_logged_in()) {
	wc_get_template('checkout/social-login.php');
}
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout <?php echo esc_attr($wrapper_classes); ?>"
	action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

	<div class="row pt-0 <?php echo esc_attr($row_classes); ?>">
		<div class="large-7 col  <?php echo esc_attr($main_classes); ?>">
			<?php if ($checkout->get_checkout_fields()): ?>

				<?php do_action('woocommerce_checkout_before_customer_details'); ?>

				<div id="customer_details">
					<div class="clear">
						<?php do_action('woocommerce_checkout_billing'); ?>
					</div>

					<div class="clear">
						<?php do_action('woocommerce_checkout_shipping'); ?>
					</div>
				</div>

				<?php do_action('woocommerce_checkout_after_customer_details'); ?>

			<?php endif; ?>

		</div>

		<div class="large-5 col custom-order-review">
			<?php flatsome_sticky_column_open('checkout_sticky_sidebar'); ?>

			<div class="col-inner <?php echo esc_attr($sidebar_classes); ?>">
				<div class="checkout-sidebar sm-touch-scroll">

					<?php do_action('woocommerce_checkout_before_order_review_heading'); ?>

					<h3 id="order_review_heading">
						<?php esc_html_e('Your order', 'woocommerce'); ?>
					</h3>

					<?php do_action('woocommerce_checkout_before_order_review'); ?>

					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action('woocommerce_checkout_order_review'); ?>
					</div>

					<?php do_action('woocommerce_checkout_after_order_review'); ?>
				</div>
			</div>

			<?php flatsome_sticky_column_close('checkout_sticky_sidebar'); ?>
		</div>
	</div>
</form>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>

<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	var ajaxTimer;

	function adjustCheckoutMargin() {
		var height = jQuery('.woocommerce-checkout .woocommerce .row .col.large-7').height();
		var marginValue = -height - 16;
		jQuery('.woocommerce-checkout .woocommerce-checkout .large-5.col').css('margin-top', marginValue + 'px');
	}

	jQuery(document).ready(function ($) {
		var ajaxTimer;

		adjustCheckoutMargin();

		$('form.woocommerce-cart-form').on('change', '.qty', function () {
			clearTimeout(ajaxTimer);

			var $this = $(this);
			var quantityValue = $this.val();
			var productId = $this.closest("tr").data("id");

			if (quantityValue == 0) {
				var deleteProduct = confirm("Bạn có muốn xóa sản phẩm không?");
				if (!deleteProduct) {
					$this.val(1);
					quantityValue = 1;
					return;
				} else {
					$('.product-remove[data-product_id="' + productId + '"]').click();
				}
			}

			ajaxTimer = setTimeout(function () {
				$.ajax({
					url: ajaxurl,
					type: 'POST',
					data: {
						action: 'update_cart',
						product_id: productId,
						quantity: quantityValue,
						_wpnonce: $('input[name="update_cart_nonce"]').val()
					},
					success: function (response) {
						$('#review-product-total').html(response.data.cart_product);
						$('#review-order-total').html(response.data.cart_total);
						if (response.data.quantity == 0) {
							$("#tr-" + productId).slideUp(function () {
								adjustCheckoutMargin();
							});
						}

						if (response.data.quantity == 0 && response.data.cart_product == 0 ) {
							window.location.reload();
						}
					},
					error: function (xhr, status, error) {
						console.error(xhr.responseText);
					}
				});
			},100);
		});
	});
</script>
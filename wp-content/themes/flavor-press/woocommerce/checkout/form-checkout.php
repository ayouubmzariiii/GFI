<?php
/**
 * Checkout Form
 *
 * @package flavor-press
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

    <div class="checkout-layout" style="display: flex; flex-wrap: wrap; gap: var(--space-2xl);">
        
        <!-- Customer Details (Left) -->
        <div class="checkout-layout__main" style="flex: 2; min-width: 300px;">
            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <div class="col2-set" id="customer_details">
                    <div class="col-1">
                        <?php do_action( 'woocommerce_checkout_billing' ); ?>
                    </div>

                    <div class="col-2">
                        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                    </div>
                </div>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            <?php endif; ?>
            
            <!-- Additional Fields -->
             <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
        </div>

        <!-- Order Review (Right Sidebar) -->
        <div class="checkout-layout__sidebar" style="flex: 1; min-width: 300px;">
            <div class="checkout-review-order" style="background: var(--color-bg-warm); padding: var(--space-xl); border-radius: var(--radius-lg); position: sticky; top: 120px;">
                <h3 id="order_review_heading" style="margin-bottom: var(--space-lg);"><?php esc_html_e( 'Your Order', 'woocommerce' ); ?></h3>
                
                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
            </div>
        </div>
    </div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

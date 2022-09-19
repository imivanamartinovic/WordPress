<?php /*

  This file is part of a child theme called divi child.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read
  https://developer.wordpress.org/themes/advanced-topics/child-themes/

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function your_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, 
      get_template_directory_uri() . '/style.css'); 

    wp_enqueue_style( 'child-style', 
      get_stylesheet_directory_uri() . '/style.css', 
      array($parent_style), 
      wp_get_theme()->get('Version') 
    );
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

/*  Add your own functions below this line.
    ======================================== */ 
// How to Change the WooCommerce "Related products" text

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Možda ti se dopadne i ovo:', $source);
     }
     return $new_text;
}

// Change cart page

add_filter('gettext', 'promeni_product', 10, 3);

function promeni_product($new_text, $related_text, $source)
{
     if ($related_text === 'Product' && is_cart()) {
         $new_text = esc_html__('Proizvod', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_price', 10, 3);

function promeni_price($new_text, $related_text, $source)
{
     if ($related_text === 'Price' && is_cart()) {
         $new_text = esc_html__('Cena', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_quantity', 10, 3);

function promeni_quantity($new_text, $related_text, $source)
{
     if ($related_text === 'Quantity' && is_cart()) {
         $new_text = esc_html__('Količina', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_subtotal', 10, 3);

function promeni_subtotal($new_text, $related_text, $source)
{
     if ($related_text === 'Subtotal' && is_cart()) {
         $new_text = esc_html__('Međuzbir', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_total', 10, 3);

function promeni_total($new_text, $related_text, $source)
{
     if ($related_text === 'Total' && is_cart()) {
         $new_text = esc_html__('Ukupno', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_carttotals', 10, 3);

function promeni_carttotals($new_text, $related_text, $source)
{
     if ($related_text === 'Cart totals' && is_cart()) {
         $new_text = esc_html__('Ukupno u korpi', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_proceed', 10, 3);

function promeni_proceed($new_text, $related_text, $source)
{
     if ($related_text === 'Proceed to checkout' && is_cart()) {
         $new_text = esc_html__('Idi na plaćanje', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_update', 10, 3);

function promeni_update($new_text, $related_text, $source)
{
     if ($related_text === 'Update cart' && is_cart()) {
         $new_text = esc_html__('Ažuriraj korpu', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_couponcode', 10, 3);

function promeni_couponcode($new_text, $related_text, $source)
{
     if ($related_text === 'Coupon code' && is_cart()) {
         $new_text = esc_html__('Kod kupona', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni_applycoupon', 10, 3);

function promeni_applycoupon($new_text, $related_text, $source)
{
     if ($related_text === 'Apply coupon' && is_cart()) {
         $new_text = esc_html__('Primeni kupon', $source);
     }
     return $new_text;
}


// Display payment methods on shopping cart page

add_action( 'woocommerce_after_cart_totals', 'available_payment_methods' );
function available_payment_methods() {
echo '<div class="payment-methods-cart-page">
</div>
<div class="payment-methods-message">Načini plaćanja</div>';
}

// Change checkout page

add_filter ('woocommerce_checkout_fields' , 'remove_billing_fields');
function remove_billing_fields ($fields) {
    unset ($fields ['billing'] ['billing_company']);
    unset ($fields ['billing'] ['billing_address_2']);
    unset ($fields ['billing'] ['billing_state']);
    unset ($fields ['billing'] ['billing_country']);
    return $fields;
}

add_filter ('woocommerce_checkout_fields' , 'remove_shipping_fields');
function remove_shipping_fields ($fields) {
    unset ($fields ['shipping'] ['shipping_company']);
    unset ($fields ['shipping'] ['shipping_address_2']);
    unset ($fields ['shipping'] ['shipping_state']);
    unset ($fields ['shipping'] ['shipping_country']);
    return $fields;
}

// Remove add to cart and item removed from cart message

add_filter( 'wc_add_to_cart_message_html', '__return_false' );

add_filter( 'woocommerce_cart_item_removed_notice_type', '__return_false' );


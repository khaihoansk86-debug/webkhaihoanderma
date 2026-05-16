<?php
function add_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');

function custom_price_format($price, $product)
{
    if ($product->is_type('simple')) {
        if ($product->is_on_sale() && !is_admin()) {
            $regular_price = (float) $product->get_regular_price();
            $sale_price = (float) $product->get_sale_price();
            $price = wc_price($sale_price) . '<del>' . wc_price($regular_price) . '</del>';
        }
    }

    if (!$product->get_price()) {
        if ($product->is_on_sale() && $product->get_regular_price()) {
            $regular_price = wc_get_price_to_display($product, array('qty' => 1, 'price' => $product->get_regular_price()));

            $price = wc_format_price_range($regular_price, __('Free!', 'woocommerce'));
        } else {
            $price = '<span class="not-amount">' . __('Liên hệ', 'woocommerce') . '</span>';
        }
    }

    return $price;
}
add_filter('woocommerce_get_price_html', 'custom_price_format', 10, 2);

function display_product_shopee_link_shortcode()
{
    global $product;
    $link_shopee = get_field('link_shopee');

    if ($link_shopee) {
        return '<a class="shopee-link" href="' . esc_url($link_shopee) . '" target="_blank">
        <img alt="icon-add-to-cart" class="_kL9Hf" src="https://lucas.vn/wp-content/uploads/2023/08/logo-shopee.png" style="width: 30px; height: 30px;">
        <span>Mua hàng trên Shopee</span>
        </a>';
    }
}
add_shortcode('product_shopee_link', 'display_product_shopee_link_shortcode');

function display_product_rating()
{
    global $product;
    $average = $product->get_average_rating();

    if ($average > 0) {
        $filled_stars = floor($average);
        $last_star_width = ($average - $filled_stars) * 100;
        ?>
        <span class="rating__star-list">
            <?php
            for ($i = 1; $i <= 5; $i++): ?>
                <span class="rating__star-item">
                    <span class="rating__star-empty"></span>
                    <span class="rating__star-filled"
                        style="<?php echo ($i == $filled_stars + 1 && $last_star_width > 0) ? 'width: ' . $last_star_width . '%;' : 'width: 100%;'; ?>"></span>
                </span>
            <?php endfor; ?>
        </span>
        <?php
    } else {
        ?>
        <span class="rating__star-list">
            <?php
            for ($i = 1; $i <= 5; $i++): ?>
                <span class="rating__star-item">
                    <span class="rating__star-empty"></span>
                </span>
            <?php endfor; ?>
            <?php
    }
}

function display_product_rating_shortcode()
{
    global $product;
    $average = $product->get_average_rating();

    ob_start();

    if ($average > 0) {
        $filled_stars = floor($average);
        $last_star_width = ($average - $filled_stars) * 100;
        ?>
            <span class="rating__star-list">
                <?php
                for ($i = 1; $i <= 5; $i++): ?>
                    <span class="rating__star-item">
                        <span class="rating__star-empty"></span>
                        <span class="rating__star-filled"
                            style="<?php echo ($i == $filled_stars + 1 && $last_star_width > 0) ? 'width: ' . $last_star_width . '%;' : 'width: 100%;'; ?>"></span>
                    </span>
                <?php endfor; ?>
            </span>
            <?php
    } else {
        ?>
            <span class="rating__star-list">
                <?php
                for ($i = 1; $i <= 5; $i++): ?>
                    <span class="rating__star-item">
                        <span class="rating__star-empty"></span>
                    </span>
                <?php endfor; ?>
            </span>
            <?php
    }

    return ob_get_clean();
}
add_shortcode('product_rating', 'display_product_rating_shortcode');

function get_woocommerce_tags_shortcode()
{
    $tags_limit = 8;
    $tags = get_terms(
        array(
            'taxonomy' => 'product_tag',
            'orderby' => 'count',
            'order' => 'DESC',
            'hide_empty' => true,
            'number' => $tags_limit
        )
    );

    $tag_list = '<ul class="header-tags">';
    foreach ($tags as $tag) {
        $tag_list .= '<li><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
    }

    $tag_list .= '</ul>';

    return $tag_list;
}
add_shortcode('woocommerce_tags', 'get_woocommerce_tags_shortcode');

function custom_before_content()
{
    if (is_shop() || is_product_category() || is_product_tag()) {
        echo do_shortcode('[block id="shop-header"]');
    }
}
add_action('flatsome_after_header', 'custom_before_content');

add_action('woocommerce_after_add_to_cart_button', 'devvn_quickbuy_after_addtocart_button');
function devvn_quickbuy_after_addtocart_button()
{
    global $product;
    ?>
        <style>
            .devvn-quickbuy button.single_add_to_cart_button.loading:after {
                display: none;
            }

            .devvn-quickbuy button.single_add_to_cart_button.button.alt.loading {
                color: #fff;
                pointer-events: none !important;
            }
        </style>
        <button type="button" class="button buy_now_button">
            <?php _e('Mua ngay', 'devvn'); ?>
        </button>
        <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off" />
        <script>
            jQuery(document).ready(function () {
                jQuery('.is_buy_now').val('0');
                jQuery('body').on('click', '.buy_now_button', function (e) {
                    e.preventDefault();
                    var thisParent = jQuery(this).parents('form.cart');
                    if (jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) {
                        jQuery('.single_add_to_cart_button', thisParent).trigger('click');
                        return false;
                    }
                    thisParent.addClass('devvn-quickbuy');
                    jQuery('.is_buy_now', thisParent).val('1');
                    jQuery('.single_add_to_cart_button', thisParent).trigger('click');
                });
            });
            jQuery(document.body).on('added_to_cart', function (e, fragments, cart_hash, addToCartButton) {
                let thisForm = addToCartButton.closest('.cart');
                let is_buy_now = parseInt(jQuery('.is_buy_now', thisForm).val()) || 0;
                if (is_buy_now === 1 && typeof wc_add_to_cart_params !== "undefined") {
                    window.location = wc_add_to_cart_params.cart_url;
                }
            });
        </script>
        <?php
}
add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url)
{
    if (!get_theme_mod('ajax_add_to_cart')) {
        if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now'] && get_option('woocommerce_cart_redirect_after_add') !== 'yes') {
            $redirect_url = wc_get_checkout_url();
        }
    }
    return $redirect_url;
}
add_filter('woocommerce_get_script_data', 'devvn_woocommerce_get_script_data', 10, 2);
function devvn_woocommerce_get_script_data($params, $handle)
{
    if ($handle == 'wc-add-to-cart') {
        $params['cart_url'] = wc_get_checkout_url();
    }
    return $params;
}

function wc_cart_totals_products_html()
{
    $product_count = WC()->cart->get_cart_contents_count();
    echo $product_count;
}

function handle_cart_update($product_id, $quantity)
{
    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        if ($cart_item['product_id'] == $product_id) {
            if ($quantity > 0) {
                WC()->cart->set_quantity($cart_item_key, $quantity, true);
            } else {
                WC()->cart->remove_cart_item($cart_item_key);
            }

            return true;
        }
    }
    return false;
}

function update_cart_callback()
{
    $product_id = isset($_POST['product_id']) ? absint($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? absint($_POST['quantity']) : 0;

    if ($product_id && handle_cart_update($product_id, $quantity)) {
        $cart_total = WC()->cart->get_total();
        $product_count = WC()->cart->get_cart_contents_count();
        wp_send_json_success(
            array(
                'product_id' => $product_id,
                'quantity' => $quantity,
                'cart_total' => $cart_total,
                'cart_product' => $product_count,
            )
        );
    } else {
        wp_send_json_error('Lỗi: Không tìm thấy sản phẩm trong giỏ hàng.');
    }
}

add_action('wp_ajax_update_cart', 'update_cart_callback');
add_action('wp_ajax_nopriv_update_cart', 'update_cart_callback');

add_filter( 'woocommerce_checkout_fields', 'hide_email_checkout_field' );

function hide_email_checkout_field( $fields ) {
    unset( $fields['billing']['billing_email'] );
    return $fields;
}

add_action( 'woocommerce_before_shop_loop_item_title', 'action_template_loop_product_thumbnail', 9 );
function action_template_loop_product_thumbnail() {
    global $product;

    $file = get_field('product_video', $product->get_id());
    // $file2 = get_field('product_video_text', $product->get_id());

    if( isset($file['url']) && ! empty($file['url']) ) {
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

        echo '<video width="200" muted loop autoplay src="' . $file['url'] . '"></video>';
        // echo $file2 ;
    }
}

 function enqueue_slick() {
        if(is_shop() || is_product() || is_product_category() ) {  
        wp_enqueue_script( 'slick-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css'); //do not mind the relevancy of the folder name, just a quick fix for now
        wp_enqueue_script( 'slick-theme-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css');
        wp_enqueue_script( 'slick-min-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js');
        }
 }

add_filter('woocommerce_single_product_image_gallery_classes', 'add_video_to_product_gallery');
function add_video_to_product_gallery($classes) {
    global $post;
    $product_video = get_field('product_video', $post->ID);

    if ($product_video) {
        add_action('woocommerce_product_thumbnails', 'output_product_video', 10);
    }

    return $classes;
}

// Xoá toàn bộ feed trong WordPress
function khaihoan_disable_all_feeds() {
    // Xoá feed cho bài viết (Post)
    remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
    remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
    remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
    remove_action('do_feed_atom', 'do_feed_atom', 10, 1);

    // Xoá feed cho bình luận (Comment)
    remove_action('do_feed_rss2_comments', 'do_feed_rss2_comments', 10, 1);
    remove_action('do_feed_atom_comments', 'do_feed_atom_comments', 10, 1);

    // Redirect các feed tới trang chủ
    function disable_all_feeds_redirect() {
        wp_redirect(get_option('home'));
    }

    add_action('do_feed', 'disable_all_feeds_redirect', 1);
    add_action('do_feed_rdf', 'disable_all_feeds_redirect', 1);
    add_action('do_feed_rss', 'disable_all_feeds_redirect', 1);
    add_action('do_feed_rss2', 'disable_all_feeds_redirect', 1);
    add_action('do_feed_atom', 'disable_all_feeds_redirect', 1);
    add_action('do_feed_rss2_comments', 'disable_all_feeds_redirect', 1);
    add_action('do_feed_atom_comments', 'disable_all_feeds_redirect', 1);
}

add_action('init', 'khaihoan_disable_all_feeds', -1);
// Only main feeed
add_action( 'template_redirect', 'khaihoan_only_main_feeds' );
function khaihoan_only_main_feeds() {
    if ( is_feed() && '/feed/' !== trailingslashit( $_SERVER['REQUEST_URI'] ) ) {
        //status_header( 410 );
        wp_redirect( home_url() .'/feed' );
		exit();
    }
}
add_filter( 'woocommerce_thankyou_order_received_text', 'my_custom_thankyou_message', 10, 2 );

function my_custom_thankyou_message( $text, $order ) {
    // ↓↓↓ HÃY SỬA NỘI DUNG MONG MUỐN CỦA BẠN Ở ĐÂY ↓↓↓
    $new_message = '<strong>Cảm ơn bạn!</strong> Đơn hàng của bạn đã được đặt thành công và sẽ được gửi đến bạn trong 2-3 ngày làm việc tới.';
    
    return $new_message;
}
// Tạo hàm hiển thị video sản phẩm để sửa lỗi Fatal Error
function output_product_video() {
    // 1. Kiểm tra an toàn: Nếu plugin ACF bị tắt, hàm sẽ dừng lại để không gây lỗi web
    if ( ! function_exists( 'get_field' ) ) {
        return;
    }

    // 2. Lấy link video từ custom field của ACF
    $video_url = get_field('product_video');

    // 3. Nếu có dữ liệu link video thì mới hiển thị
    if ( ! empty( $video_url ) ) {
        echo '<div class="product-video-wrapper" style="margin-top: 20px; margin-bottom: 20px;">';
        
        // Sử dụng hàm mặc định của WordPress để biến link (Youtube, Vimeo...) thành khung phát video
        $embed_code = wp_oembed_get( $video_url );
        
        if ( $embed_code ) {
            // In khung video ra màn hình
            echo $embed_code; 
        } else {
            // Dự phòng: Nếu link không hỗ trợ nhúng, hiện một nút bấm xem video
            echo '<a href="' . esc_url( $video_url ) . '" target="_blank" class="button">Xem video sản phẩm</a>';
        }
        
        echo '</div>';
    }
}

remove_action('wp_head', 'wp_site_icon', 99);

add_action('wp_head', function () {
    $favicon = 'https://khaihoanderma.com/wp-content/uploads/2026/05/cropped-logo-final-no-bg-1-768x7421-1.png';
    echo '<link rel="icon" href="' . esc_url($favicon) . '" sizes="32x32" />';
    echo '<link rel="icon" href="' . esc_url($favicon) . '" sizes="192x192" />';
    echo '<link rel="apple-touch-icon" href="' . esc_url($favicon) . '" />';
}, 9999);
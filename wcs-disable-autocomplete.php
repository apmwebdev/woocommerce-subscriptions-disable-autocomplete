<?php
/**
 * Plugin Name: WooCommerce Subscriptions - Disable Autocomplete
 * Plugin URI:  https://github.com/apmwebdev/woocommerce-subscriptions-disable-autocomplete
 * Description: Disables autocomplete functionality for WooCommerce orders. All orders go to "processing."
 * Author:      Automattic, Inc.
 * Author URI:  http://www.woocommerce.com/
 * Version:     1.0.0
 * License:     GPLv3
 *
 * GitHub Plugin URI: apmwebdev/woocommerce-subscriptions-disable-autocomplete
 * GitHub Branch: master
 *
 * Copyright 2019 Automattic, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package WooCommerce Subscriptions
 * @author  Automattic, Inc.
 * @since   1.0.0
 */

add_action( 'woocommerce_payment_complete', 'woocommerce_subscriptions_disable_autocomplete' );
function woocommerce_subscriptions_disable_autocomplete( $order_id ) {
    if ( ! $order_id ) {
        return;
    }
    $order = wc_get_order( $order_id );
    $order->update_status( 'processing' );
}

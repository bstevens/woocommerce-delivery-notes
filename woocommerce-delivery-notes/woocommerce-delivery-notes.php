<?php
/**
 * Print invoices & delivery notes for WooCommerce orders.
 *
 * Plugin Name: Print Invoice & Delivery Notes (& Gift Receipts) for WooCommerce
 * Plugin URI: https://www.tychesoftwares.com/
 * Description: Print Invoices & Delivery Notes (& Gift Receipts) for WooCommerce Orders.
 * Version: 100.4.6.2
 * Author: Tyche Softwares
 * Author URI: https://www.tychesoftwares.com/
 * License: GPLv3 or later
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 * Text Domain: woocommerce-delivery-notes
 * Domain Path: /languages
 * Requires PHP: 5.6
 * WC requires at least: 3.0.0
 * WC tested up to: 5.1
 * Tested up to: 5.5
 *
 * Copyright 2019 Tyche Softwares
 *
 *     This file is part of Print Invoice & Delivery Notes for WooCommerce,
 *     a plugin for WordPress.
 *
 *     Print Invoice & Delivery Notes for WooCommerce is free software:
 *     You can redistribute it and/or modify it under the terms of the
 *     GNU General Public License as published by the Free Software
 *     Foundation, either version 2 of the License, or (at your option)
 *     any later version.
 *
 *     Print Invoice & Delivery Notes for WooCommerce is distributed in the hope that
 *     it will be useful, but WITHOUT ANY WARRANTY; without even the
 *     implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *     PURPOSE. See the GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with WordPress. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package woocommerce-print-invoice-delivery-notes
 */

/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WooCommerce_Delivery_Notes' ) ) {
	include_once 'includes/class-woocommerce-delivery-notes.php';

	/**
	 * Global for backwards compatibility.
	 */
	$GLOBALS['wcdn'] = WooCommerce_Delivery_Notes::instance();

}

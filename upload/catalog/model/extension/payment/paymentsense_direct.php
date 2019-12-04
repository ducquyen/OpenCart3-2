<?php
/*
 * Copyright (C) 2019 Paymentsense Ltd.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 3
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author      Paymentsense
 * @copyright   2019 Paymentsense Ltd.
 * @license     https://www.gnu.org/licenses/gpl-3.0.html
 */

require_once DIR_APPLICATION . "model/extension/payment/paymentsense_base.php";

/**
 * Front Model for Paymentsense Direct
 */
class ModelExtensionPaymentPaymentsenseDirect extends ModelExtensionPaymentPaymentsenseBase
{
	/**
	 * Module Name
	 *
	 * @var string
	 */
	protected $moduleName = 'paymentsense_direct';

	/**
	 * Determines whether a secure connection is required for this module
	 *
	 * @return bool
	 */
	public function isSecureConnectionRequired() {
		return true;
	}
}

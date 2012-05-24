<?php
/*
 * This file is part of the prestaPaypalPlugin package.
 * (c) Matthieu CRINQUAND <mcrinquand@prestaconcept.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @package PayPal
 *
 * $Id: Error.php,v 1.1.1.1 2006/02/19 08:15:20 dennis Exp $
 */

/**
 * Load parent class.
 */
require_once 'PEAR.php';

/**
 * A standard PayPal Error object
 *
 * @package  PayPal
 */
class PayPal_Error extends PEAR_Error {

	/**
	 * Standard error constructor
	 *
     * @param string The error message
     * @param int An optional integer error code
	 */
	function PayPal_Error($message, $errorcode = null)
	{
		parent::PEAR_error($message, $errorcode);
	}

}

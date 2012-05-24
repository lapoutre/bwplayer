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
 */

/**
 * Make sure our parent class is defined.
 */
require_once 'PayPal/Type/XSDSimpleType.php';

/**
 * BasicAmountType
 * 
 * On requests, you must set the currencyID attribute to one of the three-character
 * currency codes for any of the supported PayPal currencies.
 *
 * @package PayPal
 */
class BasicAmountType extends XSDSimpleType
{
    function BasicAmountType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:CoreComponentTypes';
        $this->_attributes = array_merge($this->_attributes,
            array (
              'currencyID' => 
              array (
                'name' => 'currencyID',
                'type' => 'ebl:CurrencyCodeType',
                'use' => 'required',
              ),
            ));
    }

}

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
require_once 'PayPal/Type/DoExpressCheckoutPaymentResponseType.php';

/**
 * DoUATPExpressCheckoutPaymentResponseType
 *
 * @package PayPal
 */
class DoUATPExpressCheckoutPaymentResponseType extends DoExpressCheckoutPaymentResponseType
{
    var $UATPDetails;

    function DoUATPExpressCheckoutPaymentResponseType()
    {
        parent::DoExpressCheckoutPaymentResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'UATPDetails' => 
              array (
                'required' => true,
                'type' => 'UATPDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getUATPDetails()
    {
        return $this->UATPDetails;
    }
    function setUATPDetails($UATPDetails, $charset = 'iso-8859-1')
    {
        $this->UATPDetails = $UATPDetails;
        $this->_elements['UATPDetails']['charset'] = $charset;
    }
}

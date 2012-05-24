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
require_once 'PayPal/Type/AbstractRequestType.php';

/**
 * SetMobileCheckoutRequestType
 *
 * @package PayPal
 */
class SetMobileCheckoutRequestType extends AbstractRequestType
{
    var $SetMobileCheckoutRequestDetails;

    function SetMobileCheckoutRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'SetMobileCheckoutRequestDetails' => 
              array (
                'required' => true,
                'type' => 'SetMobileCheckoutRequestDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getSetMobileCheckoutRequestDetails()
    {
        return $this->SetMobileCheckoutRequestDetails;
    }
    function setSetMobileCheckoutRequestDetails($SetMobileCheckoutRequestDetails, $charset = 'iso-8859-1')
    {
        $this->SetMobileCheckoutRequestDetails = $SetMobileCheckoutRequestDetails;
        $this->_elements['SetMobileCheckoutRequestDetails']['charset'] = $charset;
    }
}

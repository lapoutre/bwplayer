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
 * BillOutstandingAmountRequestType
 *
 * @package PayPal
 */
class BillOutstandingAmountRequestType extends AbstractRequestType
{
    var $BillOutstandingAmountRequestDetails;

    function BillOutstandingAmountRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'BillOutstandingAmountRequestDetails' => 
              array (
                'required' => true,
                'type' => 'BillOutstandingAmountRequestDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getBillOutstandingAmountRequestDetails()
    {
        return $this->BillOutstandingAmountRequestDetails;
    }
    function setBillOutstandingAmountRequestDetails($BillOutstandingAmountRequestDetails, $charset = 'iso-8859-1')
    {
        $this->BillOutstandingAmountRequestDetails = $BillOutstandingAmountRequestDetails;
        $this->_elements['BillOutstandingAmountRequestDetails']['charset'] = $charset;
    }
}

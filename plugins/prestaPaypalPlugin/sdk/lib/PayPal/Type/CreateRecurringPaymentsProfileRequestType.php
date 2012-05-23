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
 * CreateRecurringPaymentsProfileRequestType
 *
 * @package PayPal
 */
class CreateRecurringPaymentsProfileRequestType extends AbstractRequestType
{
    var $CreateRecurringPaymentsProfileRequestDetails;

    function CreateRecurringPaymentsProfileRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'CreateRecurringPaymentsProfileRequestDetails' => 
              array (
                'required' => true,
                'type' => 'CreateRecurringPaymentsProfileRequestDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getCreateRecurringPaymentsProfileRequestDetails()
    {
        return $this->CreateRecurringPaymentsProfileRequestDetails;
    }
    function setCreateRecurringPaymentsProfileRequestDetails($CreateRecurringPaymentsProfileRequestDetails, $charset = 'iso-8859-1')
    {
        $this->CreateRecurringPaymentsProfileRequestDetails = $CreateRecurringPaymentsProfileRequestDetails;
        $this->_elements['CreateRecurringPaymentsProfileRequestDetails']['charset'] = $charset;
    }
}

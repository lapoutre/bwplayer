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
 * UpdateRecurringPaymentsProfileRequestType
 *
 * @package PayPal
 */
class UpdateRecurringPaymentsProfileRequestType extends AbstractRequestType
{
    var $UpdateRecurringPaymentsProfileRequestDetails;

    function UpdateRecurringPaymentsProfileRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'UpdateRecurringPaymentsProfileRequestDetails' => 
              array (
                'required' => true,
                'type' => 'UpdateRecurringPaymentsProfileRequestDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getUpdateRecurringPaymentsProfileRequestDetails()
    {
        return $this->UpdateRecurringPaymentsProfileRequestDetails;
    }
    function setUpdateRecurringPaymentsProfileRequestDetails($UpdateRecurringPaymentsProfileRequestDetails, $charset = 'iso-8859-1')
    {
        $this->UpdateRecurringPaymentsProfileRequestDetails = $UpdateRecurringPaymentsProfileRequestDetails;
        $this->_elements['UpdateRecurringPaymentsProfileRequestDetails']['charset'] = $charset;
    }
}

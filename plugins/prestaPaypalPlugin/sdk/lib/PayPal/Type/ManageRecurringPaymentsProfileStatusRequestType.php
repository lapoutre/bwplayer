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
 * ManageRecurringPaymentsProfileStatusRequestType
 *
 * @package PayPal
 */
class ManageRecurringPaymentsProfileStatusRequestType extends AbstractRequestType
{
    var $ManageRecurringPaymentsProfileStatusRequestDetails;

    function ManageRecurringPaymentsProfileStatusRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'ManageRecurringPaymentsProfileStatusRequestDetails' => 
              array (
                'required' => true,
                'type' => 'ManageRecurringPaymentsProfileStatusRequestDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getManageRecurringPaymentsProfileStatusRequestDetails()
    {
        return $this->ManageRecurringPaymentsProfileStatusRequestDetails;
    }
    function setManageRecurringPaymentsProfileStatusRequestDetails($ManageRecurringPaymentsProfileStatusRequestDetails, $charset = 'iso-8859-1')
    {
        $this->ManageRecurringPaymentsProfileStatusRequestDetails = $ManageRecurringPaymentsProfileStatusRequestDetails;
        $this->_elements['ManageRecurringPaymentsProfileStatusRequestDetails']['charset'] = $charset;
    }
}

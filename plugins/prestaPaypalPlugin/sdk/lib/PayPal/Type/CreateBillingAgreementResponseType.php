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
require_once 'PayPal/Type/AbstractResponseType.php';

/**
 * CreateBillingAgreementResponseType
 *
 * @package PayPal
 */
class CreateBillingAgreementResponseType extends AbstractResponseType
{
    var $BillingAgreementID;

    function CreateBillingAgreementResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'BillingAgreementID' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:api:PayPalAPI',
              ),
            ));
    }

    function getBillingAgreementID()
    {
        return $this->BillingAgreementID;
    }
    function setBillingAgreementID($BillingAgreementID, $charset = 'iso-8859-1')
    {
        $this->BillingAgreementID = $BillingAgreementID;
        $this->_elements['BillingAgreementID']['charset'] = $charset;
    }
}

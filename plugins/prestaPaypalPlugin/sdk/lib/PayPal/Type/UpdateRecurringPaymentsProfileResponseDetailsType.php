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
 * UpdateRecurringPaymentsProfileResponseDetailsType
 *
 * @package PayPal
 */
class UpdateRecurringPaymentsProfileResponseDetailsType extends XSDSimpleType
{
    var $ProfileID;

    function UpdateRecurringPaymentsProfileResponseDetailsType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:eBLBaseComponents';
        $this->_elements = array_merge($this->_elements,
            array (
              'ProfileID' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getProfileID()
    {
        return $this->ProfileID;
    }
    function setProfileID($ProfileID, $charset = 'iso-8859-1')
    {
        $this->ProfileID = $ProfileID;
        $this->_elements['ProfileID']['charset'] = $charset;
    }
}

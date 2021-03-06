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
 * DoNonReferencedCreditResponseType
 *
 * @package PayPal
 */
class DoNonReferencedCreditResponseType extends AbstractResponseType
{
    var $DoNonReferencedCreditResponseDetails;

    function DoNonReferencedCreditResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'DoNonReferencedCreditResponseDetails' => 
              array (
                'required' => true,
                'type' => 'DoNonReferencedCreditResponseDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getDoNonReferencedCreditResponseDetails()
    {
        return $this->DoNonReferencedCreditResponseDetails;
    }
    function setDoNonReferencedCreditResponseDetails($DoNonReferencedCreditResponseDetails, $charset = 'iso-8859-1')
    {
        $this->DoNonReferencedCreditResponseDetails = $DoNonReferencedCreditResponseDetails;
        $this->_elements['DoNonReferencedCreditResponseDetails']['charset'] = $charset;
    }
}

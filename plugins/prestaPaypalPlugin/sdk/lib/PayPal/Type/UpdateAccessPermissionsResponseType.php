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
 * UpdateAccessPermissionsResponseType
 *
 * @package PayPal
 */
class UpdateAccessPermissionsResponseType extends AbstractResponseType
{
    /**
     * The status of the update call, Success/Failure.
     */
    var $Status;

    function UpdateAccessPermissionsResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'Status' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:api:PayPalAPI',
              ),
            ));
    }

    function getStatus()
    {
        return $this->Status;
    }
    function setStatus($Status, $charset = 'iso-8859-1')
    {
        $this->Status = $Status;
        $this->_elements['Status']['charset'] = $charset;
    }
}

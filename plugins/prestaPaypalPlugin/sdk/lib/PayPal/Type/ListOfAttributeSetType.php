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
 * ListOfAttributeSetType
 *
 * @package PayPal
 */
class ListOfAttributeSetType extends XSDSimpleType
{
    var $AttributeSet;

    function ListOfAttributeSetType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:eBLBaseComponents';
        $this->_elements = array_merge($this->_elements,
            array (
              'AttributeSet' => 
              array (
                'required' => true,
                'type' => 'AttributeSetType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getAttributeSet()
    {
        return $this->AttributeSet;
    }
    function setAttributeSet($AttributeSet, $charset = 'iso-8859-1')
    {
        $this->AttributeSet = $AttributeSet;
        $this->_elements['AttributeSet']['charset'] = $charset;
    }
}

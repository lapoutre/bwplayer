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
 * OptionType
 * 
 * OptionType PayPal item options for shopping cart.
 *
 * @package PayPal
 */
class OptionType extends XSDSimpleType
{
    function OptionType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:eBLBaseComponents';
        $this->_attributes = array_merge($this->_attributes,
            array (
              'name' => 
              array (
                'name' => 'name',
                'type' => 'xs:string',
                'use' => 'required',
              ),
              'value' => 
              array (
                'name' => 'value',
                'type' => 'xs:string',
                'use' => 'required',
              ),
            ));
    }

}

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
 * Include parent and package classes.
 */
require_once 'PayPal.php';
require_once 'PayPal/Profile/Handler.php';

/**
 * Array handler class for hardcoding a PayPal profile.
 *
 * @package PayPal
 */
class ProfileHandler_Array extends ProfileHandler
{
    function ProfileHandler_Array($parameters)
    {
        parent::ProfileHandler($parameters);
    }

    function loadProfile($id)
    {
        return $this->_params;
    }

    function saveProfile($data)
    {
        $this->_params = $data;
        return 'default';
    }

    function deleteProfile($id)
    {
        $this->_params = null;
    }

    function getParamInfo()
    {
        return null;
    }

    function listProfiles()
    {
        return array('default');
    }

    function &getInstance($params)
    {
        $classname = __CLASS__;
        $inst =& new $classname($params);
        return $inst;
    }

}

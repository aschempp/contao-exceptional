<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2011
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: $
 */


/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['system']['exceptional'] = array
(
	'tables'		=> array('tl_exceptional'),
	'icon'			=> 'system/modules/exceptional/html/icon.png',
);


/**
 * Default settings
 */
$GLOBALS['TL_CONFIG']['exceptional_frontend'] = '1';


/**
 * Exceptional configuration
 */
Exceptional::blacklist(array('username', 'password'));

if ($GLOBALS['TL_CONFIG']['exceptional_api_key'] != '' && ((TL_MODE == 'BE' && $GLOBALS['TL_CONFIG']['exceptional_backend']) || (TL_MODE == 'FE' && $GLOBALS['TL_CONFIG']['exceptional_frontend'])))
{
	Exceptional::setup($GLOBALS['TL_CONFIG']['exceptional_api_key']);
}


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
 * Table tl_exceptional
 */
$GLOBALS['TL_DCA']['tl_exceptional'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'					=> 'File',
	),

	// Palettes
	'palettes' => array
	(
		'default'						=> '{config_legend},exceptional_api_key,exceptional_frontend,exceptional_backend;{blacklist_legend},exceptional_blacklist',
	),

	// Fields
	'fields' => array
	(
		'exceptional_api_key' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_exceptional']['exceptional_api_key'],
			'inputType'					=> 'text',
			'eval'						=> array('mandatory'=>true, 'tl_class'=>'long'),
		),
		'exceptional_frontend' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_exceptional']['exceptional_frontend'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
		),
		'exceptional_backend' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_exceptional']['exceptional_backend'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
		),
		'exceptional_blacklist' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_exceptional']['exceptional_blacklist'],
			'inputType'					=> 'listWizard',
			'eval'						=> array('tl_class'=>'clr'),
		),
	)
);


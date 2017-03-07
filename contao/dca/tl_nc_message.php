<?php

/**
 * notification_center extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2008-2015, terminal42
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    LGPL
 */

$this->loadDataContainer('tl_nc_gateway');

/**
 * Table tl_nc_message
 */
$GLOBALS['TL_DCA']['tl_nc_message']['palettes']['smime_mail'] = $GLOBALS['TL_DCA']['tl_nc_message']['palettes']['email'];

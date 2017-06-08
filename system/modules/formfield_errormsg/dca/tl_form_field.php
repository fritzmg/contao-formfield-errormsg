<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   formfield_errormsg
 * @author    Fritz Michael Gschwantner <https://github.com/fritzmg>
 * @license   LGPL-3.0+
 * @copyright Fritz Michael Gschwantner 2017
 */


$GLOBALS['TL_DCA']['tl_form_field']['fields']['errorMsg'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['errorMsg'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

foreach( $GLOBALS['TL_DCA']['tl_form_field']['palettes'] as $type => &$palette )
{
	$palette = str_replace( ',mandatory', ',mandatory,errorMsg', $palette );

	if( $type == 'captcha' && strpos( $palette, 'errorMsg' ) === false )
	{
		$palette = str_replace( 'placeholder;', 'placeholder,errorMsg;', $palette );
	}
}

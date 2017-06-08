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


namespace FormFieldErrorMsg;

abstract class Widget extends \Contao\Widget
{
	/**
	 * Validate the user input and set the value
	 */
	public function validate()
	{
		parent::validate();

		if( $this->hasErrors() && $this->errorMsg )
		{
			$this->arrErrors = array( $this->errorMsg );
		}
	}
}

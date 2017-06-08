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


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'FormFieldErrorMsg'
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'FormFieldErrorMsg\Widget' => 'system/modules/formfield_errormsg/classes/Widget.php'
));

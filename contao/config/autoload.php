<?php

ClassLoader::addNamespaces(array
(
	'HenrylamorskiSmimeMail',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'HenrylamorskiSmimeMail\EmailSignable' => 'system/modules/notification_center_smime-gateway/src/EmailSignable.php',
    'HenrylamorskiSmimeMail\SmimeMail' => 'system/modules/notification_center_smime-gateway/src/SmimeMail.php',
));

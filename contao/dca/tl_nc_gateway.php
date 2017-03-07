<?php
$GLOBALS['TL_DCA']['tl_nc_gateway']['palettes']['__selector__'][] = 'smime_mail';
$GLOBALS['TL_DCA']['tl_nc_gateway']['palettes']['smime_mail'] = '{title_legend},title,type,smime_pk,smime_pk_password,smime_cert;{gateway_legend},email_overrideSmtp;{smime_legend},';


$GLOBALS['TL_DCA']['tl_nc_gateway']['fields']['smime_pk_password'] = array(
    'label' => array('smime_pk_password','set password for key encryption'),
    'inputType' => 'text',
    'sql' => "VARCHAR(255) NOT NULL DEFAULT ''",
);

$GLOBALS['TL_DCA']['tl_nc_gateway']['fields']['smime_pk'] = array(
    'label' => array('smime_pk','choose private key'),
    'inputType' => 'fileTree',
    'eval' => array(
        'multiple' => false,
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'pem',
    ),
    'sql' => "blob"
);

$GLOBALS['TL_DCA']['tl_nc_gateway']['fields']['smime_cert'] = array(
    'label' => array('smime_cert','choose cert file'),
    'inputType' => 'fileTree',
    'eval' => array(
        'multiple' => false,
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'pem',
    ),
    'sql' => "blob"
);

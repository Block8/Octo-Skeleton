<?php

if (isset($_SERVER['APPLICATION_ENV']) && $_SERVER['APPLICATION_ENV'] == 'development') {
    $_SETTINGS['b8']['database']['servers']['read']  = ['dev.block8.net'];
    $_SETTINGS['b8']['database']['servers']['write'] = ['dev.block8.net'];
    $_SETTINGS['b8']['database']['name']             = '';
    $_SETTINGS['b8']['database']['username']         = '';
    $_SETTINGS['b8']['database']['password']         = '';
} else {
    $_SETTINGS['b8']['database']['servers']['read']  = ['localhost'];
    $_SETTINGS['b8']['database']['servers']['write'] = ['localhost'];
    $_SETTINGS['b8']['database']['name']             = '';
    $_SETTINGS['b8']['database']['username']         = '';
    $_SETTINGS['b8']['database']['password']         = '';
}

$_SETTINGS['site']['url'] = 'http://'.$_SERVER['HTTP_HOST'];
$_SETTINGS['site']['name'] = 'Octo Skeleton Site';
$_SETTINGS['site']['namespace'] = 'Example';
$_SETTINGS['site']['admin_uri'] = 'manage';
$_SETTINGS['app']['date_format'] = 'F jS Y, g:ia';
$_SETTINGS['site']['assets'] = APP_PATH . 'public/assets/';
$_SETTINGS['site']['email_from'] = 'Block 8 <hello@block8.co.uk>';

$moduleManager->enable('Octo', 'Pages');
$moduleManager->enable('Octo', 'News');
$moduleManager->enable('Octo', 'Media');
$moduleManager->enable('Octo', 'Forms');
$moduleManager->enable('Octo', 'Menu');
$moduleManager->enable('Octo', 'Categories');
$moduleManager->enable('Octo', 'Articles');
$moduleManager->enable('Octo', 'Analytics');

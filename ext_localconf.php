<?php
defined('TYPO3_MODE') or die();

call_user_func( function() {

});

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['pt'] = ['DN\\ThemeExpotechnik\\ViewHelpers'];

$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
    'backendFavicon' => 'EXT:dnthemeexpotechnik/Resources/Public/Icons/Backend/favicon.ico',
    'backendLogo' => 'EXT:dnthemeexpotechnik/Resources/Public/Icons/Backend/Logo_40x40.png',
    'loginLogo' => 'EXT:dnthemeexpotechnik/Resources/Public/Icons/Backend/Logo_150x150.png',
];
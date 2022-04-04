<?php
defined('TYPO3_MODE') || die();

/**
 * Add Static TypoScript / Constants Directory
 */
call_user_func( function() {
    /**
     * Backend Login Anpassung
     */
    $GLOBALS['TBE_STYLES']['skins']['dnthemeexpotechnik'] = array (
        'name' => 'dnthemehessen',
        'stylesheetDirectories' => array(
            'css' => 'EXT:dnthemeexpotechnik/Resources/Public/StyleSheet/Backend/'
        )
    );
});
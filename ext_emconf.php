<?php
/**
 * Created by PhpStorm.
 * User: dnemanic
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'DN Theme Expotechnik',
    'description' => 'DN Theme Expotechnik',
    'category' => 'be',
    'author' => 'Daniel Nemanic',
    'author_email' => 'daniel@nemanic.eu',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '3.7',
    'constraints' => array(
        'depends' => array(
            'typo3' => '*',
            'dnuikit' => '*'
        ),
        'conflicts' => array(
            'css_styled_content' => ''
        ),
        'suggests' => array(),
    ),
);
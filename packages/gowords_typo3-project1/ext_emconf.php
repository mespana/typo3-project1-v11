<?php

/**
 * Extension Manager/Repository config file for ext "typo3_project1".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3-project1',
    'description' => 'Wittemaier Bau Website Relaunch',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.0.99',
            'jobapplications' => '2.0.0-2.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gowords\\Typo3Project1\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'mariana espana',
    'author_email' => 'marianaespana@yahoo.es',
    'author_company' => 'goWords',
    'version' => '2.0.0',
];

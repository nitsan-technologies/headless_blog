<?php

$EM_CONF['ns_headless_blog'] = [
    'title' => 'Ns Headless Blog',
    'description' => 'This extension provides integration with blog to output content from TYPO3 in JSON format.',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.5.99',
            'frontend' => '12.0.0-12.5.99',
            'headless' =>  '4.0.0-4.5.9',
            'blog' => '12.0.0-12.5.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.0.0-4.9.9',
        ],
    ],
];

<?php
return [
    'remote_storage' => [
        'driver' => 'file'
    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'rCXMr8rkuUEc4cK81iOXkSKeQikOkCOF'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '087_'
            ],
            'page_cache' => [
                'id_prefix' => '087_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'tomhartilltomhartilltomhartill32'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'perfect',
                'username' => 'perfect_user',
                'password' => 'forget305',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'perfect.tomhartill.com'
    ],
    'install' => [
        'date' => 'Wed, 02 Jul 2025 21:54:54 +0000'
    ]
];

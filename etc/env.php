<?php
return [
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mydb',
                'dbname' => 'm24',
                'username' => 'm24',
                'password' => 'm24',
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
    'backend' => [
        'frontName' => 'admin'
    ],
    'install' => [
        'date' => 'Wed, 20 Jan 2021 13:38:59 +0000'
    ],
    'crypt' => [
        'key' => 'aa1fa40bbcedf9812d66404cb7b1311d'
    ],
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'myredis',
            'port' => '6380',
            'database' => '0'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'id_prefix' => 'bbe_',
                'backend_options' => [
                    'server' => 'myredis',
                    'port' => '6379',
                    'persistent' => '',
                    'database' => '0',
                    'force_standalone' => '0',
                    'connect_retries' => '1',
                    'read_timeout' => '10',
                    'automatic_cleaning_factor' => '0',
                    'compress_data' => '1',
                    'compress_tags' => '1',
                    'compress_threshold' => '20480',
                    'compression_lib' => 'gzip'
                ]
            ],
            'page_cache' => [
                'id_prefix' => 'bbe_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'http_cache_hosts' => [
        [
            'host' => 'myproxy1',
            'port' => '81'
        ]
    ],
    'MAGE_MODE' => 'developer',
    'directories' => [
        'document_root_is_pub' => false
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
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
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'm24.lxc'
    ]
];

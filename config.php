<?php


return [

    'database' => [

        'name' => 'mytodo',

        'username' => 'root',

        'password' => 'mansnothot',

        'connection' => 'mysql:host=localhost',

        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]

];
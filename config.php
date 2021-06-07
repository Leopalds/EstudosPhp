<?php

return [
    'database' =>[
        'name'=> 'minhastarefas',
        'username'=>'root',
        'senha'=>'',
        'connection'=>'mysql:host=127.0.0.1',
        'options'=>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
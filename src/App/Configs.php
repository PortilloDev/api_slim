<?php 

$container->set('db_settings',function(){
    return (object)[
        "DB_NAME" => "api_slim",
        "DB_PASS" => "",
        "DB_CHAR" => "utf8",
        "DB_HOST" => "127.0.0.1",
        "DB_USER" => "root",
    ];
});
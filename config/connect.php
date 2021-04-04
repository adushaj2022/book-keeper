<?php
    require '../vendor/autoload.php';
    use Medoo\Medoo;
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'bookster',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);

?>
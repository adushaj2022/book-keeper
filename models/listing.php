<?php

    include '../config/connect.php';

    $database->create("listing", [
	"id" => [
		"INT",
		"NOT NULL",
		"AUTO_INCREMENT",
		"PRIMARY KEY"
	],
	"name" => [
		"VARCHAR(80)",
		"NOT NULL"
    ],
    
	"author" => [
		"VARCHAR(50)",
		"NOT NULL"
    ],
	"price" => [
		"VARCHAR(7)",
		"NOT NULL"
    ]
]);

?>
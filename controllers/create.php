<?php
    include '../config/connect.php';

    function test_input(string $data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(empty($_POST['name']) || empty($_POST['author']) || empty($_POST['price'])) {
            header('location: ../pages/create.php?message=Please enter all fields');
            die();
        }

        $name = test_input($_POST['name']);
        $author = test_input($_POST['author']);
        $price = test_input($_POST['price']);

        $database->insert('listing', [
            'name' => $name,
            'author' => $author,
            'price' => $price,
        ]);

        header('location: ../pages/index.php');
    }

?>
<?php
include '../config/connect.php';

function test_input(string $data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name']) || empty($_POST['author']) || empty($_POST['price'])) {
        header('location: ../pages/update.php?message=Please enter all fields&id=' . $_POST['id']);
        die();
    }

    $name = test_input($_POST['name']);
    $author = test_input($_POST['author']);
    $price = test_input($_POST['price']);
    $id = test_input($_POST['id']);

    $database->update('listing', [
        'name' => $name,
        'author' => $author,
        'price' => $price,
    ], [
        'id' => $id
    ]);

    header('location: ../pages/index.php');
}

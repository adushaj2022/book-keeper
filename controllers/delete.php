<?php
    include '../config/connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $data = $database->delete("listing", [
            "AND" => [
                "id" => $id
            ]
        ]);

        if ($data->rowCount() === 1) {
            header('location: ../pages/index.php');
        } else {
            http_response_code(404);
            echo '<h1>404 Not Found</h1>';
        }
        die();
    }
   
 ?>
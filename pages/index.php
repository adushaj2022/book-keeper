<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>K8</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand px-2" href="#">Book Keeper</a>
        </nav>
        <div class="index__main">
            <a href="./create.php" class="link-primary mt-4">Add a listing</a>
            <table class="table mt-3 px-5 index__table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        include '../config/connect.php';
                        $datas = $database->select('listing', "*");
                        foreach($datas as $data) { 
                            echo '<tr>';
                            echo '<td>' . $data['id'] . '</td>';
                            echo '<td>' . $data['name'] . '</td>';
                            echo '<td>' . $data['author'] . '</td>';
                            echo '<td>' . $data['price'] . '</td>';
                            echo '</tr>';
                        }
                    ?>

                </tbody>
            </table>
        </div>

    </div>


</body>

</html>
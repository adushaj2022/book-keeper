<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>K8 - Home</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <?php
            if (isset($_GET['search'])) {
                echo '<a class="navbar-brand px-2" href="./">Book Keeper</a>';
            } else {
                echo '<a class="navbar-brand px-2" href="#">Book Keeper</a>';
            }
            ?>
        </nav>

        <div class="index__main">

            <a href="./create.php" class="link-primary mt-4">Add a listing</a>
            <div class="form-outline mt-3">
                <form action="" method="get">
                    <input type="search" name="search" class="form-control" placeholder="Search for a listing" aria-label="Search" />

                </form>
            </div>
            <div class="index__form">
                <table class="table mt-3 px-5 index__table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        include '../config/connect.php';
                        $datas = $database->select('listing', "*");

                        foreach ($datas as $data) {
                            if (isset($_GET['search'])) {
                                if (str_contains(strtolower($data['name']), strtolower($_GET['search']))) {
                                    echo '<tr>';
                                    echo '<td>' . $data['id'] . '</td>';
                                    echo '<td>' . $data['name'] . '</td>';
                                    echo '<td>' . $data['author'] . '</td>';
                                    echo '<td>' . $data['price'] . '</td>';
                                    echo '<td>' .
                                        "<form method='POST' action='../controllers/delete.php'>
                                        <input type='hidden' name='id' value=" . $data['id'] . ">
                                        <button type='submit' class='btn btn-link btn-sm'>Delete</button>
                                     </form>"
                                        . '</td>';
                                    echo '<td>' . "<a href='update.php?id=" . $data['id'] . "'><button type='submit' class='btn btn-link btn-sm'>Update</button></a>" . '</td>';
                                    echo '</tr>';
                                }
                            } else {

                                echo '<tr>';
                                echo '<td>' . $data['id'] . '</td>';
                                echo '<td>' . $data['name'] . '</td>';
                                echo '<td>' . $data['author'] . '</td>';
                                echo '<td>' . $data['price'] . '</td>';
                                echo '<td>' .
                                    "<form method='POST' action='../controllers/delete.php'>
                                    <input type='hidden' name='id' value=" . $data['id'] . ">
                                    <button type='submit' class='btn btn-link btn-sm'>Delete</button>
                                 </form>"
                                    . '</td>';
                                echo '<td>' . "<a href='update.php?id=" . $data['id'] . "'><button type='submit' class='btn btn-link btn-sm'>Update</button></a>" . '</td>';
                                echo '</tr>';
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>


</body>

</html>
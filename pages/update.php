<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>K8 - Update</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand px-2" href="./">Book Keeper</a>
        </nav>
        <div class="index__form">
            <a href="./index.php" class="link-primary mt-4">Back to home</a>
            <div class="index__form__bs">
                <?php
                include '../config/connect.php';
                $name = $author = $price = "";
                if (!$_GET['id']) {
                    header('location: ../pages/index.php');
                    die();
                } else {
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $listing =  $database->select('listing', "*", [
                            'id' => $id
                        ]);
                        $name = $listing[0]['name'];
                        $author = $listing[0]['author'];
                        $price = $listing[0]['price'];
                    }
                }

                if (@$_GET['message']) {
                    echo '<div class="alert-light text-danger text-left py-1">' . $_GET['message'] . '</div>';
                }

                ?>
                <form role="form" method="POST" action="../controllers/update.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group mt-2">
                        <label>Title</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="The Great Gatsby" name="name" value="<?php echo $name;  ?>">
                        </div>
                    </div>


                    <div class="form-group mt-2">
                        <label>Author</label>
                        <input type="text" class="form-control" placeholder="Scott Fitzgerald" name="author" value="<?php echo $author;  ?>">

                    </div>
                    <div class="form-group mt-2">
                        <label>Price</label>
                        <input class="form-control" placeholder="7.99" name="price" value="<?php echo $price;  ?>">
                    </div>


                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-secondary btn-block">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>


</body>

</html>
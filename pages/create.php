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
        <div class="index__form">
            <a href="./index.php" class="link-primary mt-4">Back to home</a>
            <div class="index__form__bs">
                <?php
                    if(@$_GET['message'] == true) {
                        echo '<div class="alert-light text-danger text-left py-1">'.$_GET['message'] .'</div>' ;
                    }
                ?>
                <form role="form" method="POST" action="../controllers/create.php">

                    <div class="form-group mt-2">
                        <label>Title</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="The Great Gatsby" name="name">
                        </div>
                    </div>


                    <div class="form-group mt-2">
                        <label>Author</label>
                        <input type="text" class="form-control" placeholder="Scott Fitzgerald" name="author">

                    </div>
                    <div class="form-group mt-2">
                        <label>Price</label>
                        <input class="form-control" placeholder="7.99" name="price">
                    </div>


                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </div>
                </form>
            </div>

        </div>

    </div>


</body>

</html>
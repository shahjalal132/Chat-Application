<?php

if (isset($_POST['login'])) {



    die();
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 shadow mt-5 p-4 box">

                <h3 class="text-center text-warning mb-3">Login Page</h3>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email :</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Emter your email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-light">Password :</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password">
                    </div>

                    <input type="submit" class="btn btn-warning" name="login" value="Login">
                </form>

                <p class="text-light mt-3">Dont't have an account? <a class="text-warning registration" href="register.php">Registration</a></p>

            </div>

            <div class="col-md-3"></div>
        </div>
    </div>






    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>
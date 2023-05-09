<?php

require_once('functions.php');

if (isset($_POST['register'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $has_email = mysqli_query($connection, "SELECT * FROM users2 WHERE email = '$email' ");

    if (mysqli_num_rows($has_email) >= 1) {
        echo 'Email already exits! try another email';
    } else {
        $query = mysqli_query($connection, "INSERT INTO users2 (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password') ");

        if ($query) {
            echo 'You have been Registration successfully';
        }
    }

    die();
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Registration Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 shadow mt-5 p-4 box">
                <h2 class="text-center text-warning mb-3">Registration Form</h2>
                <div class="reg_form">
                    <form action="" method="post" class="user_registration">

                        <div class="mb-3">
                            <label for="first_name" class="form-label text-light">First Name :</label>
                            <input type="text" name="first_name" id="first_name" class="form-control common_input" placeholder="First Name" aria-describedby="helpId">
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label text-light">Last Name :</label>
                            <input type="text" name="last_name" id="last_name" class="form-control common_input" placeholder="First Name" aria-describedby="helpId">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-light">Email :</label>
                            <input type="email" class="form-control common_input" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email Address">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-light">Password :</label>
                            <input type="password" class="form-control common_input" name="password" id="password" placeholder="Password">
                        </div>

                        <input type="submit" class="btn btn-warning" name="register" value="Registration">

                    </form>

                    <p class="success"></p>

                    <p class="mt-3 text-light">Have an account? <a class="text-warning login" href="login.php">Login</a></p>

                </div>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>






    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>
<?php
session_start();
require_once('functions.php');

if (!user_logged_in()) {
  header('location: index.php');
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Chat Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <h2 class="text-center text-warning mt-5">This is chat page</h2>

  <a class="btn btn-danger ms-5" href="logout.php">Log Out</a>


</body>

</html>
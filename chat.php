<?php
session_start();
require_once('functions.php');

if (!user_logged_in()) {
  header('location: index.php');
}

if (isset($_POST['chatUpdate'])) {
  $email = $_SESSION['email'];
  $message = $_POST['message'];

  $insert = $connection->query("INSERT INTO conversation (email, message) VALUES ('$email', '$message')  ");

  die();
};

if (isset($_POST['beUpdate'])) {

  $messages = mysqli_query($connection, "SELECT * FROM conversation");

  while ($rows = mysqli_fetch_assoc($messages)) {
    echo '<p><span class="text-success full_name"> '.$rows['email'].' </span> '.$rows['message'].' </p>';
  }

  die();
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

  <div class="container">
    <div class="row">

      <div class="col-md-4 box shadow p-3 mt-5">
        <h2 class="text-center text-light">Chat Box</h2>

        <form action="" method="post" class="send_message">

          <div class="mb-3">
            <label for="message" class="form-label text-light">Message :</label>
            <input type="text" name="message" id="message" class="form-control user_message" placeholder="Write Your Message" aria-describedby="helpId">
          </div>
          <button type="submit" class="btn btn-light">Send</button>

        </form>

        <a class="btn btn-danger mt-3" href="logout.php">Log Out</a>

      </div>

      <div class="col-md-7 shadow-lg message_box bg-light mt-5 p-3 ms-auto" id="message_box">
        
      </div>

    </div>
  </div>



  <script src="js/jquery.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
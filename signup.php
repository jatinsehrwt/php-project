<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'includes/head.html'; ?>
  <?php include_once 'includes/scripts.html'; ?>
  <link href="css/signin.css" rel="stylesheet">
</head>

<body>
  <form method="POST" class="form-signin">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" required autofocus>
      <label for="inputUsername">Username</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPassword">Password</label>
    </div>
    <div class="form-label-group">
      <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
      <label for="confirm_password">Confirm Password</label>
      <span id='message'></span>
    </div>
    <div class="row">
      <button class="col-6 btn btn-lg btn-primary btn-block border" type="submit" name="sub">Sign Up</button>
      <a class="col-6 btn btn-lg btn-primary border" href="index.php">Cancel</a>
    </div>
    <p class="mt-5 mb-3 text-muted text-center">&copy;<?php echo date('Y') ?></p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      require_once 'config.php';
      $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
      if (mysqli_connect_error())
        die(mysqli_connect_error());
      $u = mysqli_real_escape_string($link, $_POST['inputUsername']);
      $p = mysqli_real_escape_string($link, $_POST['inputPassword']);
      $sql = "INSERT INTO accounts(Username,Password) VALUES('$u','$p')";
      if ($r = mysqli_query($link, $sql)) {
        header("location: login.php");
      } else {
        echo "Cannot create account <br>";
      }
      mysqli_close($link);
    }
    ?>
</body>
<script>
  $('#inputPassword, #confirmPassword').on('keyup', function() {
    if ($('#inputPassword').val() == $('#confirmPassword').val()) {
      $('#message').html('Matching').css('color', 'green');
    } else
      $('#message').html('Not Matching').css('color', 'red');
  });
</script>

</html>
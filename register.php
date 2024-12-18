<?php

include 'helper/config.php';

session_start();

$error = [];  // Initialize the error array

if (isset($_POST['submit'])) {
  // Retrieve the field value
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  // Username Validation
  $select = " SELECT * FROM user_form WHERE username = '$username'";
  $result = mysqli_query($conn, $select);
  if (mysqli_num_rows($result) > 0) {
    $error['username'] = "This username has been taken. Please use other username.";
  }

  // Email Validation
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error['email'] = "Invalid email format. Please type in a proper email.";
  } else {
    $select = " SELECT * FROM user_form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
      $error['email'] = "This email has been taken. Please use other email.";
    }
  }

  // Password Length Validation
  if (strlen($password) < 8) {
    $error['password'] = "Password must be at least 8 characters long!";
  }

  // Password and Password Confirmation Validation
  if ($password != $cpassword) {
    $error['cpassword'] = "Passwords do not match!";
  }

  // Checkbox Validation
  if (!isset($_POST['terms'])) {
    $error['terms'] = "Please tick this before proceeding.";
  }

  // If no error, then proceed to add user into DB
  if (empty($error)) {
    $password = md5($password);
    $cpassword = md5($cpassword);

    $insert = "INSERT INTO user_form(username, email, password) VALUES('$username','$email','$password')";
    mysqli_query($conn, $insert);

    $_SESSION['welcome_msg'] = "Thanks for signing up an account. You may now sign in  to your account.";

    header("location: log_in_page.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/signin_styles.css">


  <!-- Bootstrap Libraries Stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Self-Created Stylesheet -->
  <link href="css/helper.css" rel="stylesheet">

  <!-- Font Stylesheet -->
  <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
</head>

<body>
  <!-- Header Section -->
  <?php include "helper/header.php" ?>
  

  <form action="" method="post">
    <div class="row">
      <div class="column left"></div>
      <div class="column middle">
        <h2 style="text-align: center;">Sign Up</h2>
        <p style="text-align: center;">Create a free account to use our service</p>

        <table class="styled-form">
          <tr class="form-row">
            <td class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" required placeholder="Enter your username"
                value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
              <span class="error-msg"
                style="color: red;"><?php echo isset($error['username']) ? $error['username'] : ''; ?></span>
            </td>
            <td class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required placeholder="Enter your email"
                value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
              <span class="error-msg"
                style="color: red;"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span>
            </td>
          </tr>
          <tr class="form-row" id="password-group">
            <td class="form-group">
              <label for="password">Password</label>
              <div class="password-container">
                <input type="password" id="password" name="password" required placeholder="Enter your password"
                  value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                <img src="img/close-eye.png" id="toggle-password" alt="Toggle Password" class="toggle-icon">
              </div>
              <span class="error-msg"
                style="color: red;"><?php echo isset($error['password']) ? $error['password'] : ''; ?></span>
            </td>
            <td class="form-group">
              <label for="confirm-password">Confirm Password</label>
              <div class="password-container">
                <input type="password" id="cpassword" name="cpassword" required placeholder="Enter your password again"
                  value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : ''; ?>">
                <img src="img/close-eye.png" id="toggle-confirm-password" alt="Toggle Password" class="toggle-icon">
              </div>
              <span class="error-msg"
                style="color: red;"><?php echo isset($error['cpassword']) ? $error['cpassword'] : ''; ?></span>
            </td>
          </tr>
          <tr class="form-row">
            <td colspan="2" class="form-group w-100">
              <div class="checkbox-container">
                <input type="checkbox" id="terms" name="terms" <?php echo isset($_POST['terms']) ? 'checked' : ''; ?>>
                <div class="d-flex flex-column">
                  <label for="terms">
                    I agree to the <a href="#">Terms</a> and have read and acknowledge the <a href="#">Global Privacy
                      Statement</a>.
                  </label>
                  <span class="error-msg"
                    style="color: red;"><?php echo isset($error['terms']) ? $error['terms'] : ''; ?></span>
                </div>

              </div>

            </td>
          </tr>

          <tr class="form-row">
            <td colspan="2" class="form-group w-100">
              <input type="submit" name="submit" value="Sign Up" class="form-btn">
              <p style="text-align: center;">Already have an account? <a href="log_in_page.php">Sign in</a> now.</p>
            </td>
          </tr>

        </table>
      </div>
      <div class="column right"></div>
    </div>

    <!-- Footer Section -->
    <?php include "helper/footer.php" ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <Script>
      // Sticky Navbar
      $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
          $('.nav-bar').addClass('sticky-top');
        } else {
          $('.nav-bar').removeClass('sticky-top');
        }
      });
    </script>

    <script>
      function togglePasswordVisibility(inputId, iconId) {
        const passwordField = document.getElementById(inputId);
        const toggleIcon = document.getElementById(iconId);

        if (passwordField.type === "password") {
          passwordField.type = "text";
          toggleIcon.src = "img/open-eye.png";
        } else {
          passwordField.type = "password";
          toggleIcon.src = "img/close-eye.png";
        }
      }

      // Event listeners for both fields
      document.getElementById('toggle-password').addEventListener('click', function () {
        togglePasswordVisibility('password', 'toggle-password');
      });

      document.getElementById('toggle-confirm-password').addEventListener('click', function () {
        togglePasswordVisibility('cpassword', 'toggle-confirm-password');
      });

    </script>

</body>

</html>
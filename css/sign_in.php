<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];

   if(strlen($password) < 8) {
      $error[] = 'Password must be at least 8 characters long!';
   }

   $select = " SELECT * FROM user_form WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exists!';
   }else{
      if($password != $cpassword){
         $error[] = 'Passwords do not match!';
      }else{
         $password = md5($password); 
         $cpassword = md5($cpassword);

         $insert = "INSERT INTO user_form(username, email, password) VALUES('$username','$email','$pass')";
         mysqli_query($conn, $insert);
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign in page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/signin_styles.css">


  <!-- Bootstrap Libraries Stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Self-Created Stylesheet -->
  <link href="css/hci.css" rel="stylesheet">

  <!-- Font Stylesheet -->
  <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg py-0 px-4">
      <!-- Search Start -->
      <div class="col-md-4 nav-search-bar px-4">
        <input type="text" class="form-control border-0 py-3" placeholder="SEARCH">
      </div>
      <!-- Search End -->

      <!-- Menu Button Start -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto px-2">
          <a href="index.html" class="nav-item nav-link">Home</a>
          <a href="about.html" class="nav-item nav-link">Get Recommendation</a>
          <a href="about.html" class="nav-item nav-link">Features</a>
          <a href="about.html" class="nav-item nav-link">About Us</a>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
          <a href="sign_in.html" class="nav-item nav-link active">Sign In/Up</a>
        </div>
      </div>
      <!-- Menu Button End -->
    </nav>
  </div>
  <header> </header>
  <!-- Navbar End -->

  <div class="row">
    <div class="column left"></div>
    <div class="column middle">
      <h2 style="text-align: center;">Sign Up</h2>
      <p style="text-align: center;">Create a free account to use our service</p>
      <form class="styled-form">
    
        <div class="form-row">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" required placeholder="Enter your username">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" required placeholder="Enter your email">
          </div>
        </div>
        <div class="form-row" id="password-group">
          <div class="form-group">
            <label for="password">Password</label>
            <div class="password-container">
              <input type="password" id="password" required placeholder="Enter your password">
              <img src="img/close-eye.png" id="toggle-password" alt="Toggle Password" class="toggle-icon">
            </div>
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <div class="password-container">
              <input type="password" id="cpassword" required placeholder="Enter your password again">
              <img src="img/close-eye.png" id="toggle-confirm-password" alt="Toggle Password" class="toggle-icon">
            </div>
          </div>
        </div>
        <div class="form-group checkbox-container">
          <input type="checkbox" id="terms">
          <label for="terms">
            I agree to the <a href="#">Terms</a> and have read and acknowledge the <a href="#">Global Privacy
              Statement</a>.
          </label>
        </div>
        <div class="form-actions">
          <input type="submit" name="submit" value="register now" class="form-btn">
        </div>
        <p style="text-align: center;">Already have an account? <a href="log_in_page.html">Sign in</a> now.</p>
      </form>

    </div>
    <div class="column right"></div>
  </div>

  <div class="footer">
    <div class="footer-content">
      <div class="footer-section contact">
        <p><strong>CONTACT</strong></p>
        <p>Tel: +03-123 4567</p>
        <p>Email: hciT15@gmail.com</p>
        <div class="social-icons">
          <img src="img/ig-footer.png" alt="Instagram">
          <img src="img/linkedin-footer.png" alt="LinkedIn">
          <img src="img/facebook-footer.png" alt="Facebook">
          <img src="img/youtube-footer.png" alt="YouTube">
        </div>
      </div>

      <div class="footer-section logo">
        <img src="img/group-logo.png" alt="Logo" class="footer-logo" style="width:169px;height:62px;">
        <p>TEACHING STRATEGY RECOMMENDATION WEBSITE</p>
      </div>

      <div class="footer-section quick-links">
        <p><strong>QUICK LINKS</strong></p>
        <ul>
          <li><a href="#">> Home</a></li>
          <li><a href="#">> About Us</a></li>
          <li><a href="contact.html">> Contact</a></li>
          <li><a href="#">> Get Recommendation</a></li>
        </ul>
      </div>
    </div>
  </div>


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
      togglePasswordVisibility('confirm-password', 'toggle-confirm-password');
    });
  </script>

</body>

</html>
<?php

include 'helper/config.php';

session_start();

$error = [];  // Initialize the error array

if (isset($_POST['submit'])) {

    // Retrieve the field value
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Check if the email exists and password match
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '" . md5($password) . "'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        // User found, redirect to the contact page
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
        
    } else {
        // Check if the username exists and password match
        $select = "SELECT * FROM user_form WHERE username = '$email' AND password = '" . md5($password) . "'";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            // User found, redirect to the contact page
            $_SESSION['username'] = $row['username'];
            header("Location: home.php");
            
        } else {
            $error['not_matched'] = 'Username/Email and password do not matched. Please try again.';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login_styles.css">


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

    <div class="row">

        <div class="column left"></div>

        <div class="column middle">
            <!-- Welcome Message Start -->
            <?php
            if (isset($_SESSION['welcome_msg'])) {
                echo "<div class='notification-box'>" . $_SESSION['welcome_msg'] . "</div>";
            }
            unset($_SESSION['welcome_msg']);
            ?>
            <!-- Welcome Message End -->
            <h2 style="text-align: center;">Sign In</h2>
            <p style="text-align: center;">Sign in to your account to use our service</p>

            <form class="styled-form" method="post">
                <!-- Not Matched Message Start -->
                <?php
                if (isset($error['not_matched'])) {
                    echo "<div class='error-msg'>" . $error['not_matched'] . "</div>";
                }
                ?>
                <!-- Not Matched Message End -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="username">Username/Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your username/email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="Enter your password">
                            <img src="img/close-eye.png" id="toggle-password" alt="Toggle Password" class="toggle-icon">
                        </div>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" name="submit" class="sign-btn">Sign In</button>
                </div>
                <p style="text-align: center;">Don't have an account? <a href="register.php">Sign up</a> now.</p>
            </form>
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

    <!-- toggle control-->
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
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="css/contact_styles.css">

    <!-- Bootstrap Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Self-Created Stylesheet -->
    <link href="css/hci.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">

    <!-- Font Stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
</head>

<body>
    <!-- Header Section -->
    <?php include "helper/header.php" ?>

    <header></header>

    <div class="contact_box">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <div class="info-item">
                <p> <img src="img/contact_icon.png" alt="contact" style="float:left; margin-right: 25px;">03-123
                    4567
                </p>
            </div>
            <div class="info-item">
                <p> <img src="img/email_icon.png" alt="email" style="float:left; margin-right: 25px;">hcitig5@gmail.com
                </p>
            </div>
        </div>
        <div class="social-media">
            <p>Visit Our Social Media Account</p>
            <div class="icons">
                <a href="#"><img src="img/linkedin-icon.png" alt="LinkedIn"></a>
                <a href="#"><img src="img/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="img/youtube-icon.png" alt="YouTube"></a>
                <a href="#"><img src="img/facebook-icon.png" alt="Facebook"></a>
            </div>
        </div>
        <p style="padding-top: 3em;">Please feel free to contact us by leaving a message below if you have any
            questions.</p>
    </div>

    <div class="input_box">
        <form class="styled-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" placeholder="Enter the subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Enter your message"></textarea>
            </div>
            <div class="form-actions">
                <button type="button" class="cancel-btn">Cancel</button>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>

    <div class="empty">
        <!-- i also don't know the purpose of this container-->
        <!-- just for alignment i guess :) -->
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
</body>

</html>
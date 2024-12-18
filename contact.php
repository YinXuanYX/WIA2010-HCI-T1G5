<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Navigation Bar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="css/contact_styles.css">

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
                        <a href="about.html" class="nav-item nav-link active">Contact</a>
                        <a href="about.html" class="nav-item nav-link">Sign In/Up</a>
                    </div>
                </div>
                <!-- Menu Button End -->
            </nav>
        </div>
        <header> </header>
        <!-- Navbar End -->
         
        <div class="contact_box">
            <h1>Contact Us</h1>
            <div class="contact-info">
                <div class="info-item">
                    <p> <img src="img/contact_icon.png" alt="contact" style="float:left; margin-right: 25px;">03-123
                        4567
                    </p>
                </div>
                <div class="info-item">
                    <p> <img src="img/email_icon.png" alt="email"
                            style="float:left; margin-right: 25px;">hcitig5@gmail.com
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
            <p style="padding-top: 3em;">Please feel free to contact us by leaving a message below if you have any questions.</p>
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
                        <li><a href="#">> Contact</a></li>
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
</body>

</html>

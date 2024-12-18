<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link to Bootstrap CSS for responsiveness -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Link to Font Awesome CSS for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Link to your custom CSS file (ensure hci.css is in the same folder as this HTML file) -->
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Link to Google Fonts for Abhaya Libre and Aboreto -->
  <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@600;800&family=Aboreto&display=swap" rel="stylesheet">
  <title>About Us Page</title>
</head>

<body>
<!-- Header with Navigation Bar -->
<header>
  <div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg py-0 px-4">
      <!-- Search Bar -->
      <div class="col-md-4 nav-search-bar px-4">
        <input type="text" class="form-control border-0 py-3" placeholder="SEARCH">
      </div>

      <!-- Menu Button -->
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarCollapse">
        <div class="navbar-nav ms-auto px-2">
          <a href="home.html" class="nav-item nav-link">Home</a>
          <a href="getrec_pg1.php" class="nav-item nav-link">Get Recommendation</a>
          <a href="aboutus.php" class="nav-item nav-link">Features</a>
          <a href="aboutus.php" class="nav-item nav-link active">About Us</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
          <a href="register.php" class="nav-item nav-link">Sign In/Up</a>
        </div>
      </div>
    </nav>
  </div>
</header>
<header class="header-image">
  <img src="try.svg" alt="Header Image" class="top-image">
</header>
<main>
  <section>
    <h2 class="section-title">About Us</h2>
    <div class="about-us-content">
      <div class="about-us-image">
        <img src="classroom.jpg" alt="About Us Image" class="img-fluid" />
      </div>
      <div class="about-us-text">
        <h3 class="sub-title">Why you should choose us?</h3>
        <h3 class="sub-title">Get know about us!</h3>
        <p class="about-us-description">
          We aim to transform education with AI-powered tools, providing teachers personalized insights to improve student performance. Founded by university students and tech enthusiasts, we focus on instant feedback and easy integration to help educators use the best teaching methods for each student.
        </p>
        <div class="about-us-features">
          <div class="feature">
            <div class="feature-content">
              <!-- Left column: Image -->
              <div class="left-column">
                <img src="tick.svg" alt="Tailored Solution" class="feature-icon">
              </div>

              <!-- Right column: Title and List -->
              <div class="right-column">
                <h4>Tailored Solution</h4>
                <div class="description">
                  <div class="bullet-point"></div>
                  <ul>
                    <li>Our tools are designed to meet the unique needs of each educator</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="feature">
            <div class="feature-content">
              <!-- Left column: Image -->
              <div class="left-column">
                <img src="tick.svg" alt="User-friendly interface" class="feature-icon">
              </div>

              <!-- Right column: Title and List -->
              <div class="right-column">
                <h4>User-friendly interface</h4>
                <div class="description">
                  <div class="bullet-point"></div>
                  <ul>
                    <li>Platform easy to navigate</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="feature">
            <div class="feature-content">
              <!-- Left column: Image -->
              <div class="left-column">
                <img src="tick.svg" alt="Community Collaboration" class="feature-icon">
              </div>

              <!-- Right column: Title and List -->
              <div class="right-column">
                <h4>Community Collaboration</h4>
                <div class="description">
                  <div class="bullet-point"></div>
                  <ul>
                    <li>Able to join a network of passionate educators who share practices, resources, and strategies</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="content-separator"></div>
  <div class="world">
    <div class="title-wrapper">
      <h3 class="section-title-w">Worldwide User</h3>
    </div>
    <div class="text-container">
      <p class="description">Our website is used by educators from around the world to <br> enhance their teaching skills</p>
    </div>
  </div>

    <div class="two-column-container">
      <!-- World Map Column -->
      <div class="column world-map">
        <img src="worldmap.svg" alt="World Map" class="world-map-img">
      </div>

      <!-- Empty Second Column (Optional for layout) -->
      <div class="empty-column">
        <img src="statistic.png" alt="World Map" class="world-map-img">
      </div>
    </div>
  </div>

</main>
<footer class="bg-white text-dark py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>CONTACT</h3>
        <p>Tel  : +60 3-123 4567</p>
        <p>Email: hcit1g5@gmail.com</p>
        <!-- Social Media Icons -->
        <div class="social-icons">
          <a href="https://www.instagram.com" target="_blank" class="text-dark mr-3">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
          <a href="https://www.linkedin.com" target="_blank" class="text-dark mr-3">
            <i class="fab fa-linkedin-in fa-lg"></i>
          </a>
          <a href="https://www.facebook.com" target="_blank" class="text-dark mr-3">
            <i class="fab fa-facebook-f fa-lg"></i>
          </a>
          <a href="https://www.youtube.com" target="_blank" class="text-dark mr-3">
            <i class="fab fa-youtube fa-lg"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 text-center">
          <img src="HCIT1G5.png" alt="HCI TIG5 Logo" class="img-fluid" style="max-width: 300px;">
      </div>
      <!-- Quick Links Section (Right Aligned) -->
      <div class="col-md-4 d-flex justify-content-end">
        <div>
          <h3>QUICK LINKS</h3>
          <ul class="list-unstyled">
            <li><a href="home.html" class="text-dark">> Home</a></li>
            <li><a href="aboutus.html" class="text-dark">> About Us</a></li>
            <li><a href="#" class="text-dark">> Contact</a></li>
            <li><a href="#" class="text-dark">> Get Recommendation</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-4">
      <div class="col text-center">
        <p>&copy; 2024 HCI TIG5. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0hG5MtrzJ6P8GgZf1m0D44rF01h/2npFwB90dV6H0bxxgSg6" crossorigin="anonymous"></script>

</body>
</html>
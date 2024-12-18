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
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/hci.css">
  <link rel="stylesheet" type="text/css" href="css/helper.css">

  <!-- Link to Google Fonts for Abhaya Libre and Aboreto -->
  <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@600;800&family=Aboreto&display=swap" rel="stylesheet">
  <title>About Us Page</title>
</head>

<body>
<!-- Header Section -->
<?php include "helper/header.php" ?>

<header class="header-image">
  <img src="img/try.svg" alt="Header Image" class="top-image">
</header>
<main>
  <section>
    <h2 class="section-title">About Us</h2>
    <div class="about-us-content">
      <div class="about-us-image">
        <img src="img/classroom.jpg" alt="About Us Image" class="img-fluid" />
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
                <img src="img/tick.svg" alt="Tailored Solution" class="feature-icon">
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
                <img src="img/tick.svg" alt="User-friendly interface" class="feature-icon">
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
                <img src="img/tick.svg" alt="Community Collaboration" class="feature-icon">
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
      <p class="description">Our website is used by educators from around the world <br/>to enhance their teaching skills</p>
    </div>
  </div>

    <div class="two-column-container">
      <!-- World Map Column -->
      <div class="column world-map">
        <img src="img/worldmap.svg" alt="World Map" class="world-map-img">
      </div>

      <!-- Empty Second Column (Optional for layout) -->
      <div class="empty-column">
        <img src="img/statistic.png" alt="World Map" class="world-map-img">
      </div>
    </div>
  </div>

</main>
<!-- Footer Section -->
<?php include "helper/footer.php" ?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0hG5MtrzJ6P8GgZf1m0D44rF01h/2npFwB90dV6H0bxxgSg6" crossorigin="anonymous"></script>

</body>
</html>
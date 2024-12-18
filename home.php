<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set and viewport for responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enhance Teaching With Advanced Strategies</title>

    <!-- Link to Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Link to Bootstrap CSS for responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Link to custom CSS file (ensure hci.css is in the same folder as this HTML file) -->
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">

    <!-- Link to Google Fonts for custom fonts (Abhaya Libre and Aboreto) -->
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@600;800&family=Aboreto&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <?php include "helper/header.php" ?>

     <!-- Welcome Message Start -->
     <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "<div class='notification-box'> Hi, " . $_SESSION['username'] . ". Welcome to our website.</div>";
    }
    unset($_SESSION['username']);
    ?>
    <!-- Welcome Message End -->

    <!-- Main Content Section -->
    <main>
        <section class="hero text-center py-5">
            <div class="container">
                <div class="row">

                    <!-- Left Column with Text Content -->
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h1 class="display-4 square-background">Enhance <span class="teaching-text">Teaching</span> With
                            Advanced Strategies</h1>
                        <p class="lead">Provide the <span class="effective-text">MOST EFFECTIVE</span> teaching methods
                        </p>
                        <button class="btn btn-get-started btn-lg" onclick="location.href='getrec_pg1.php'">Get Started</button>
                    </div>

                    <!-- Right Column with Image -->
                    <div class="col-md-6 text-right">
                        <img src="img/home-bg.png" alt="Classroom" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <?php include "helper/footer.php" ?>

    <!-- JavaScript files for jQuery and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0hG5MtrzJ6P8GgZf1m0D44rF01h/2npFwB90dV6H0bxxgSg6"
        crossorigin="anonymous"></script>
</body>

</html>
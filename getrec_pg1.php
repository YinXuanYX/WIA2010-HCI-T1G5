<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get Recommendation</title>
    <link rel="stylesheet" href="css/gc_style.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
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

    <div class="getrec-1-container">
        <div class="image-container">
            <img src="img/image 2.png" alt="Image">
        </div>

        <div class="getrec-1-text-container">
            <h1>Would you like a</h1>
            <h2>Personalized Teaching Strategies Recommendation?</h2>
            <button class="button" onclick="location.href='getrec_pg2.php'">Start Now</button>
        </div>
    </div>
    <!-- Footer Section -->
    <?php include "helper/footer.php" ?>

</body>

</html>
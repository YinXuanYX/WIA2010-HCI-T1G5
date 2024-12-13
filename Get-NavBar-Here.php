<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Navigation Bar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Bootstrap Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Self-Created Stylesheet -->
    <link href="css/hci.css" rel="stylesheet">

    <!-- Font Stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
</head>

<body>
    <div class=" bg-white">

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg py-0 px-4">
                <!-- Search Start -->
                <div class="col-md-4 nav-search-bar px-4">
                    <input type="text" class="form-control border-0 py-3" placeholder="SEARCH">
                </div>
                <!-- Search End -->

                <!-- Menu Button Start -->
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarCollapse">
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
        <!-- Navbar End -->

        <!-- Some Content Start (To be deleted later) -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">lorem ipsum</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit
                                        diam justo sed vero dolor duo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Some content End (To be deleted later) -->
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
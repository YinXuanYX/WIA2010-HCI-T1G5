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
                <a href="getrec_pg1.php" class="nav-item nav-link">Get Recommendation</a>
                <a href="about.html" class="nav-item nav-link">Features</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="about.html" class="nav-item nav-link">Contact</a>
                <a href="about.html" class="nav-item nav-link">Sign In/Up</a>
            </div>
        </div>
        <!-- Menu Button End -->
    </nav>
</div>
<!-- Navbar End -->

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

    // Highlight current page in navbar
    $(document).ready(function () {
        var currentUrl = window.location.pathname; // Get current page URL path

        // Loop through each nav link
        $('.navbar-nav .nav-link').each(function () {
            var linkPath = $(this).attr('href'); // Get the href attribute of each link

            if (currentUrl.includes('getrec')) {
                // Add the active class if the link contains 'getrecommendation'
                if (linkPath.includes('getrec')) {
                    $(this).addClass('active');
                }
            } else if (currentUrl === linkPath) {
                // Add the active class if it's an exact match
                $(this).addClass('active');
            }
        });
    });
</script>
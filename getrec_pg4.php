<?php
require_once "config.php";

session_start();
$strategy1 = strtolower(str_replace(" ", "-", $_SESSION['strategy-1']));
$strategy2 = strtolower(str_replace(" ", "-", $_SESSION['strategy-2']));
$strategy3 = strtolower(str_replace(" ", "-", $_SESSION['strategy-3']));

if (isset($_GET['strategy'])) {
    $strategy = $_GET['strategy'];
} else {
    $strategy = $strategy1;
}

$strategyFullName = ucfirst(str_replace('-', ' ', $strategy));

// DB
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Strategy WHERE `strategy-tag` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $strategy);
$stmt->execute();
$result = $stmt->get_result();
$duration = $_SESSION['TERM'];

while ($row = $result->fetch_assoc()) {
    $introduction = $row['strategy-introduction'];
    $image = $row['strategy-img'];
    $benefit1 = $row['strategy-benefit-1-name'];
    $benefit2 = $row['strategy-benefit-2-name'];
    $benefit3 = $row['strategy-benefit-3-name'];
    $benefit1_desc = $row['strategy-benefit-1-desc'];
    $benefit2_desc = $row['strategy-benefit-2-desc'];
    $benefit3_desc = $row['strategy-benefit-3-desc'];
    $benefit1_img = $row['strategy-benefit-1-img'];
    $benefit2_img = $row['strategy-benefit-2-img'];
    $benefit3_img = $row['strategy-benefit-3-img'];
    $phase1 = $row["strategy-phase-1-activities-$duration"];
    $phase2 = $row["strategy-phase-2-activities-$duration"];
    $phase3 = $row["strategy-phase-3-activities-$duration"];
    $tips = $row['strategy-important-tips'];
    $video = $row['strategy-video-link'];
}

$stmt->close();

$phase1_title = processPhaseContent($phase1)['title'];
$phase1_list = processPhaseContent($phase1)['listItems'];

$phase2_title = processPhaseContent($phase2)['title'];
$phase2_list = processPhaseContent($phase2)['listItems'];

$phase3_title = processPhaseContent($phase3)['title'];
$phase3_list = processPhaseContent($phase3)['listItems'];

$tipsItems = explode('.', $tips);
$tipsItems = array_filter($tipsItems, function ($item) {
    return !empty(trim($item));
});
function processPhaseContent($content)
{
    // Step 1: Extract the title 
    $titleEndPos = strpos($content, ';');
    if ($titleEndPos !== false) {
        $title = substr($content, 0, $titleEndPos);  
        $remainingContent = substr($content, $titleEndPos + 1); 
    } else {
        $title = $content; 
        $remainingContent = '';  
    }

    // Step 2: Split the remaining content by periods (.) into list items
    $listItems = explode('.', $remainingContent);
    $listItems = array_filter($listItems, function ($item) {
        return !empty(trim($item));
    });

    return [
        'title' => $title,
        'listItems' => $listItems
    ];
}

// Get Image 1
$sql = "SELECT * FROM Strategy WHERE `strategy-tag` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $strategy1);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $image1 = $row['strategy-img'];
}
$stmt->close();

// Get Image 2
$sql = "SELECT * FROM Strategy WHERE `strategy-tag` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $strategy2);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $image2 = $row['strategy-img'];
}
$stmt->close();

// Get Image 3
$sql = "SELECT * FROM Strategy WHERE `strategy-tag` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $strategy3);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $image3 = $row['strategy-img'];
}
$stmt->close();
$conn->close();

unset($_SESSION['YEAR_OF_EXPERIENCE']);
unset($_SESSION['CONVERTED_YEAR_OF_EXPERIENCE']);
unset($_SESSION['AGE']);
unset($_SESSION['PRIMARY_ROLE']);
unset($_SESSION['GENDER']);
unset($_SESSION['SCHOOL_TYPE']);
unset($_SESSION['COURSE_NAME']);
unset($_SESSION['TEACHING_MODE']);
unset($_SESSION['COURSE_LEVEL']);
unset($_SESSION['COURSE_DURATION']);
unset($_SESSION['FIELD_OF_STUDY']);
unset($_SESSION['COURSE_CONTENTS']);
unset($_SESSION['AVERAGE_STUDENT_SCORE']);
unset($_SESSION['STUDENT_PASSING_RATE']);
unset($_SESSION['CLASS_SIZE']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Recommendation Result</title>
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
    <div class="get-recommendation-4">

        <?php
        include "header.php"
            ?>

        <!-- Strategies Selection Start -->
        <div class="p-5" id="strategy-selection">
            <h1><span>3 teaching strategies</span> match your needs.</h1>
            <h2 class="py-2">Click on each to view the strategy details and choose the one that works best.</h2>

            <div class="row">
                <div class="col col-md-4">
                    <div class="img-box" onclick="updateUrl('<?php echo $strategy1 ?>')">
                        <img src="img/<?php echo $image1; ?>">
                        <div class="black-box"><?php echo $_SESSION['strategy-1']; ?></div>
                        <input type="hidden" id="strategy1" name="strategy1" value="<?php echo $strategy1 ?>">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="img-box" onclick="updateUrl('<?php echo $strategy2 ?>')">
                        <img src="img/<?php echo $image2; ?>">
                        <div class="black-box"><?php echo $_SESSION['strategy-2']; ?></div>
                        <input type="hidden" id="strategy2" name="strategy2" value="<?php echo $strategy2 ?>">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="img-box" onclick="updateUrl('<?php echo $strategy3 ?>')">
                        <img src="img/<?php echo $image3; ?>">
                        <div class="black-box"><?php echo $_SESSION['strategy-3']; ?></div>
                        <input type="hidden" id="strategy3" name="strategy3" value="<?php echo $strategy3 ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- Strategies Selection End -->

        <!-- Strategy Details Start -->
        <div id="strategy-details">
            <!-- Strategy Top Section Start -->
            <div class="strategy-top-section">
                <div class="strategy-image">
                    <img src="img/<?php echo $image ?>" alt="">
                </div>
                <div class="strategy-content">
                    <div class="header">
                        Teaching Strategy Recommendation Result</>
                    </div>
                    <div class="introduction">
                        <div class="title">
                            <h2>You have chosen</h2>
                            <h1><b><?php echo $strategyFullName; ?> </b><small>strategy</small></h1>
                        </div>
                        <p>
                            <?php echo $introduction; ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Strategy Top Section End -->

            <!-- Strategy Benefit Section Start -->
            <div class="strategy-benefits-section">
                <div class="title">
                    <h2 class="title-main">What are the</h2>
                    <h2 class="title-highlight">Benefits</h2>
                </div>
                <div class="benefits-container">
                    <div class="benefit-card">
                        <img src="img/<?php echo $benefit1_img; ?>" alt="">
                        <h3><?php echo $benefit1; ?></h3>
                        <p>
                            <?php echo $benefit1_desc; ?>
                        </p>
                    </div>
                    <div class="benefit-card">
                        <img src="img/<?php echo $benefit2_img; ?>" alt="">
                        <h3><?php echo $benefit2; ?></h3>
                        <p>
                            <?php echo $benefit2_desc; ?>
                        </p>
                    </div>
                    <div class="benefit-card">
                        <img src="img/<?php echo $benefit3_img; ?>" alt="">
                        <h3><?php echo $benefit3; ?></h3>
                        <p>
                            <?php echo $benefit3_desc; ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Strategy Benefit Section End -->


            <!-- Strategy Implementation Section Start -->

            <!-- Strategy Implementation Section Header Start -->
            <div class="strategy-implementation-section-header">
                <div class="container">
                    <div class="icon">
                        <img src="img/implementation-plan-calender-icon.png" />
                    </div>
                    <div class="title">
                        <h2>Implementation Plan</h2>
                        <p>There will be a total of three phases for this plan.</p>
                    </div>
                </div>
            </div>
            <!-- Strategy Implementation Section Header End -->

            <!-- Strategy Implementation Section Expand Box Start -->
            <div class="strategy-implementation-section-expand-box">
                <div class="header" onclick="toggleDetails(this)">
                    <span>Phase 1</span>
                    <button>▼</button>
                </div>
                <div class="details hidden">
                    <div class="teaching-modules">
                        <div>Teaching Modules<br />
                            <img src="img/teaching-module-icon.png" />
                        </div>
                        <div>
                            <ol>
                                <li>Module 1</li>
                                <li>Module 2</li>
                                <li>Module 3</li>
                                <li>Module 4</li>
                            </ol>
                        </div>
                    </div>
                    <div class="teaching-methods-and-activities">
                        <div>
                            <h6><?php echo $phase1_title; ?></h6>
                            <ol>
                                <?php foreach ($phase1_list as $list)
                                    echo "<li>$list</li>";
                                ?>
                            </ol>
                        </div>
                        <div>Teaching Methods & Activities<br />
                            <img src="img/teaching-methods-and-activities.png">
                        </div>
                    </div>
                </div>

                <div class="header" onclick="toggleDetails(this)">
                    <span>Phase 2</span>
                    <button>▼</button>
                </div>
                <div class="details hidden">
                    <div class="teaching-modules">
                        <div>Teaching Modules<br />
                            <img src="img/teaching-module-icon.png" />
                        </div>
                        <div>
                            <ol>
                                <li>Module 1</li>
                                <li>Module 2</li>
                                <li>Module 3</li>
                                <li>Module 4</li>
                            </ol>
                        </div>
                    </div>
                    <div class="teaching-methods-and-activities">
                        <div>
                            <h6><?php echo $phase2_title; ?></h6>
                            <ol>
                                <?php foreach ($phase2_list as $list)
                                    echo "<li>$list</li>";
                                ?>
                            </ol>
                        </div>
                        <div>Teaching Methods & Activities<br />
                            <img src="img/teaching-methods-and-activities.png">
                        </div>
                    </div>
                </div>

                <div class="header" onclick="toggleDetails(this)">
                    <span>Phase 3</span>
                    <button>▼</button>
                </div>
                <div class="details hidden">
                    <div class="teaching-modules">
                        <div>Teaching Modules<br />
                            <img src="img/teaching-module-icon.png" />
                        </div>
                        <div>
                            <ol>
                                <li>Module 1</li>
                                <li>Module 2</li>
                                <li>Module 3</li>
                                <li>Module 4</li>
                            </ol>
                        </div>
                    </div>
                    <div class="teaching-methods-and-activities">
                        <div>
                            <h6><?php echo $phase3_title; ?></h6>
                            <ol>
                                <?php foreach ($phase3_list as $list)
                                    echo "<li>$list</li>";
                                ?>
                            </ol>
                        </div>
                        <div>Teaching Methods & Activities<br />
                            <img src="img/teaching-methods-and-activities.png">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Strategy Implementation Section Expand Box End -->

            <!-- Strategy Implementation Section Important Tips Start -->
            <div class="strategy-implementation-section-important-tips">
                <div class="title">
                    <div><img src="img/important-tips-icon.png"></div>
                    <div class="px-2">Important Tips</div>
                </div>
                <div>
                    <ul>
                        <?php foreach ($tipsItems as $tip)
                            echo "<li>$tip</li>";
                        ?>
                    </ul>
                </div>
            </div>
            <!-- Strategy Implementation Section Important Tips End -->

            <!-- Strategy Implementation Section End -->

            <!-- Strategy Teaching Video Sample Section Start -->
            <div class="strategy-teaching-video-sample-section">
                <h2 class="title">Teaching Video Sample</h2>
                <div class="d-flex flex-row same-row">
                    <iframe width="470" height="255" src="<?php echo $video; ?>" title="Active Learning" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <button>Export into PDF</button>
                </div>
            </div>
            <!-- Strategy Teaching Video Sample Section End -->

            <!-- Strategy Feedback Section Header Start -->
            <div class="strategy-feedback-section-header">
                <div class="container">
                    <div class="icon">
                        <img src="img/feedback-icon.png" />
                    </div>
                    <div class="title">
                        <h2>Feedback</h2>
                        <p>Your feedback is greatly appreciated!</p>
                    </div>
                </div>
            </div>
            <!-- Strategy Feedback Section Header End -->

            <!-- Strategy Feedback Section Container Start -->
            <form action="" method="">
                <div class="strategy-feedback-section-container">
                    <!-- Emoji Feedback Start -->
                    <div class="emoji-feedback">
                        <h2>How would you rate your website experience?</h2>
                        <div class="emojis">
                            <span class="emoji" onclick="selectEmoji(this)">😢</span>
                            <span class="emoji" onclick="selectEmoji(this)">☹️</span>
                            <span class="emoji" onclick="selectEmoji(this)">😐</span>
                            <span class="emoji" onclick="selectEmoji(this)">😊</span>
                            <span class="emoji" onclick="selectEmoji(this)">😍</span>
                        </div>
                    </div>
                    <!-- Emoji Feedback End -->

                    <!-- Arrow Start -->
                    <div class="arrow">
                        <img src="img/arrow.png" />
                    </div>
                    <!-- Arrow End -->

                    <!-- Detailed Feedback Start -->
                    <div class="detailed-feedback">
                        <h2>Please share in detail what we can improve on your website experience.</h2>
                        <textarea placeholder="Enter here"></textarea>
                        <button type="button">Submit</button>
                    </div>
                    <!-- Detailed Feedback End -->
                </div>
            </form>
            <!-- Strategy Feedback Section Container End -->

        </div>
        <!-- Strategy Details End -->

        <?php
        include "footer.php"
            ?>



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

            function toggleDetails(headerElement) {
                const details = headerElement.nextElementSibling;
                const button = headerElement.querySelector('button');
                if (details.classList.contains('hidden')) {
                    details.classList.remove('hidden');
                    button.textContent = '▲';
                } else {
                    details.classList.add('hidden');
                    button.textContent = '▼';
                }
            }

            function selectEmoji(selected) {
                const emojis = document.querySelectorAll('.emoji');
                emojis.forEach((emoji) => emoji.classList.remove('selected'));
                selected.classList.add('selected');
            }

            function updateUrl(method) {
                const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + "?strategy=" + method;
                window.history.pushState({ path: newUrl }, '', newUrl);
                window.location.reload()
            }

            window.onload = function () {
                // Get the strategy value from the URL
                const urlParams = new URLSearchParams(window.location.search);
                const strategyFromUrl = urlParams.get('strategy'); // Get the 'strategy' value from the URL

                // Get all elements with the class 'img-box'
                const allBoxes = document.querySelectorAll('.img-box');

                // Loop through all boxes
                allBoxes.forEach(box => {
                    // Find the hidden input element inside the current box
                    const hiddenInput = box.querySelector('input[type="hidden"]');
                    if (hiddenInput) {
                        // Get the value of the hidden input
                        const strategyValue = hiddenInput.value;

                        // If the URL's strategy matches the hidden input's value, add 'active' class
                        if (strategyFromUrl && strategyFromUrl === strategyValue) {
                            box.classList.add('active');
                        }
                    }
                });
            };
        </script>
</body>

</html>
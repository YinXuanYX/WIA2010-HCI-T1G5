<?php
session_start();
$strategy1 = strtolower(str_replace(" ", "-", $_SESSION['strategy-1']));
$strategy2 = strtolower(str_replace(" ", "-", $_SESSION['strategy-2']));
$strategy3 = strtolower(str_replace(" ", "-", $_SESSION['strategy-3']));

if (isset($_GET['strategy'])) {
    $strategy = $_GET['strategy'];
}

$strategyFullName = ucfirst(str_replace('-', ' ', $strategy));
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
                        <img src="img/active-learning.png">
                        <div class="black-box"><?php echo $_SESSION['strategy-1']; ?></div>
                        <input type="hidden" id="strategy1" name="strategy1" value="<?php echo $strategy1 ?>">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="img-box" onclick="updateUrl('<?php echo $strategy2 ?>')">
                        <img src="img/personalized-learning.png">
                        <div class="black-box"><?php echo $_SESSION['strategy-2']; ?></div>
                        <input type="hidden" id="strategy2" name="strategy2" value="<?php echo $strategy2 ?>">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="img-box" onclick="updateUrl('<?php echo $strategy3 ?>')">
                        <img src="img/peer-teaching.png">
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
                    <img src="img/active-learning.png" alt="Two people discussing learning materials">
                </div>
                <div class="strategy-content">
                    <div class="header">
                        Teaching Strategy Recommendation Result</>
                    </div>
                    <div class="introduction">
                        <div class="title">
                            <h2>You have chosen</h2>
                            <h1><b><?php echo $strategyFullName;?> </b><small>strategy</small></h1>
                        </div>
                        <p>
                            When students engage in active learning, they are doing something besides passively
                            learning.
                            They will participate in small or large activities centered around writing, talking,
                            problem-solving, and presentation. This method provides an opportunity for all students in a
                            class to think and engage with course material and practice skills for learning, applying,
                            synthesizing, or summarizing that material.
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
                        <img src="img/active-learning-benefit-1.png" alt="Icon for retention">
                        <h3>Improved Retention and Understanding</h3>
                        <p>
                            Deeper level of engagement helps students retain information and understand complex concepts
                            better than passive learning methods like lectures.
                        </p>
                    </div>
                    <div class="benefit-card">
                        <img src="img/active-learning-benefit-2.png" alt="Icon for critical thinking">
                        <h3>Enhanced Critical Thinking</h3>
                        <p>
                            Helps students to approach problems creatively and develop solutions independently.
                        </p>
                    </div>
                    <div class="benefit-card">
                        <img src="img/active-learning-benefit-3.png" alt="Icon for engagement">
                        <h3>Increased Student Engagement</h3>
                        <p>
                            Provides positive learning experience and higher levels of participation in class.
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
                            <h6>Plan Active Sessions</h6>
                            <ol>
                                <li>Identify topics that benefit from active participation.</li>
                                <li>Schedule regular active learning sessions.</li>
                                <li>Prepare varied materials (debates, group discussions, etc.).</li>
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
                            <h6>Implement Engagement Activities</h6>
                            <ol>
                                <li>Begin each session with a brief introduction and goals.</li>
                                <li>Facilitate activities that require active student involvement.</li>
                                <li>Guide discussions and ask questions to deepen understanding.</li>
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
                            <h6>Evaluate and Reflect</h6>
                            <ol>
                                <li>Gather student feedback on each session’s effectiveness.</li>
                                <li>Analyze which activities were most engaging.</li>
                                <li>Adjust future plans based on feedback and observations.</li>
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
                        <li>Engage all students, especially quieter ones.</li>
                        <li>Use diverse activities to maintain interest.</li>
                        <li>Provide clear examples to illustrate points.</li>
                    </ul>
                </div>
            </div>
            <!-- Strategy Implementation Section Important Tips End -->

            <!-- Strategy Implementation Section End -->

            <!-- Strategy Teaching Video Sample Section Start -->
            <div class="strategy-teaching-video-sample-section">
                <h2 class="title">Teaching Video Sample</h2>
                <div class="d-flex flex-row same-row">
                    <iframe width="470" height="255" src="https://www.youtube.com/embed/D8Wc3eSRaLE?si=q2PYBXyJt70UvQ7_"
                        title="Active Learning" frameborder="0"
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
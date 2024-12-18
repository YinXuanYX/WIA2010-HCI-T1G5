<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image with Text Boxes</title>
    <link href="css/helper.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
    <style>
        body {
            background-color: #F1F1F1;
            margin: 0;
            padding: 0;
            height: 100%;
            /* Ensure body takes full height */
            position: relative;

        }

        h2 {
            font-family: Abhaya Libre SemiBold;
            font-size: 40px;
            text-align: center;
            color: #363636;
        }

        .top-image {
            width: 100%;
            /* Make the image span the entire width of the page */
            max-height: 150px;
            /* Maximum height for the image */
            object-fit: cover;
            /* This will make sure the image covers the area without stretching */
        }

        /* Container for the image and text boxes */
        .feature-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            /* Center the content */
            margin-top: 50px;
        }

        /* Image styling */
        .image-container {
            width: 30%;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        /* Text box styling */
        .text-container {
            width: 40%;
            padding-left: 20px;

        }

        .text-boxa {
            padding: 6px;
            margin-bottom: 10px;
            border-radius: 8px;
            background-color: #363636;
            text-align: center;
            font-family: Abhaya Libre ExtraBold;
        }

        .text-boxb {
            padding: 6px;
            margin-bottom: 10px;
            border-radius: 8px;
            background-color: #FFFFFF;
            font-family: Abhaya Libre;
        }

        .text-boxc {
            padding: 6px;
            margin-bottom: 10px;
            border-radius: 8px;
            background-color: #363636;
            text-align: center;
            font-family: Abhaya Libre ExtraBold;
        }

        .text-boxd {
            padding: 6px;
            margin-bottom: 10px;
            border-radius: 8px;
            background-color: #FFFFFF;
            font-family: Abhaya Libre;

        }

        /* Optional: Box styles for a nicer look */
        .text-container h3 {
            margin: 0;
            font-family: Abhaya Libre ExtraBold;
            font-size: 22px;
            color: #F1F1F1;

        }

        .text-box p {

            font-size: 20px;
            color: #000000;
        }

        .video-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 8px;
            margin-bottom: 100px;
            /* Space between the content and the video */
        }

        .video-container video {
            width: 50%;
            max-width: 600px;
            /* Set a maximum width to ensure it doesn't grow too large */
            height: auto;
            /* Ensure the video maintains its aspect ratio */
        }
    </style>
</head>

<body>
    <?php include 'helper/header.php' ?>
    <img src="img/image 26.png" alt="Top Image" class="top-image">

    <h2>Features</h2>

    <div class="feature-container">
        <!-- Left side: Image -->
        <div class="image-container">
            <img src="img/Active Learning.png">
        </div>

        <!-- Right side: Text Boxes -->
        <div class="text-container">

            <div class="text-boxa">
                <h3>1. Active Learning strategy</h3>
            </div>

            <div class="text-boxb">
                <p>Active learning means students actively participate in activities like writing, discussing,
                    problem-solving, or presenting, instead of just learning passively. This approach helps all students
                    think, engage with the material, and practice skills like learning, applying, synthesizing, and
                    summarizing.</p>
            </div>

            <div class="text-boxc">
                <h3>Benefits</h3>
            </div>

            <div class="text-boxd">
                <ul class="a">
                    <li>Improve Retention and Understanding</li>
                    <li>Enhanced Critical Thinking</li>
                    <li>Increased Student Engagement</li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Video section below the content -->
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/D8Wc3eSRaLE?si=dLYscBG5DvsEtMbI"
            title="Active Learning" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="feature-container">
        <!-- Left side: Image -->
        <div class="image-container">
            <img src="img/Personalised.png">
        </div>

        <!-- Right side: Text Boxes -->
        <div class="text-container">

            <div class="text-boxa">
                <h3>2. Personalized Learning strategy</h3>
            </div>

            <div class="text-boxb">
                <p>Each student receives a learning plan tailored to their knowledge, learning style, and interests. The
                    plan includes ongoing feedback and adjustments to ensure progress. Personalized teaching adapts to
                    each student's pace and needs, boosting engagement, building confidence, and developing critical
                    skills through tailored support.</p>
            </div>

            <div class="text-boxc">
                <h3>Benefits</h3>
            </div>

            <div class="text-boxd">
                <ul class="a">
                    <li>Increased Motivation and Engagement</li>
                    <li>Improved Learning Outcomes</li>
                    <li>Tailored Learning Pace</li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Video section below the content -->
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6oLNLCO0vfI?si=JjTMqIf8d50VtcOH"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="feature-container">
        <!-- Left side: Image -->
        <div class="image-container">
            <img src="img/Peer teaching.png">
        </div>

        <!-- Right side: Text Boxes -->
        <div class="text-container">

            <div class="text-boxa">
                <h3>3. Peer Teaching strategy</h3>
            </div>

            <div class="text-boxb">
                <p>Peer teaching shifts the focus from the teacher to the student, encouraging students to take charge
                    of their learning. By teaching concepts to their peers, students deepen their understanding, retain
                    knowledge better, and gain confidence.</p>
            </div>

            <div class="text-boxc">
                <h3>Benefits</h3>
            </div>

            <div class="text-boxd">
                <ul class="a">
                    <li>Enhanced Understanding and Retention</li>
                    <li>Improved Communication Skills</li>
                    <li>Boosts Confidence and Social Interaction</li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Video section below the content -->
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ScESS8dueLw?si=R7LzjV_3OMxK_hab"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="feature-container">
        <!-- Left side: Image -->
        <div class="image-container">
            <img src="img/coorperative-learning-strategy 1.png">
        </div>

        <!-- Right side: Text Boxes -->
        <div class="text-container">

            <div class="text-boxa">
                <h3>4. Cooperative Learning strategy</h3>
            </div>

            <div class="text-boxb">
                <p>Group work is a cooperative learning strategy where 5-7 students collaborate on a task. They share
                    and listen to ideas, then combine them to make the best decision. This approach improves
                    communication and critical thinking skills.</p>
            </div>

            <div class="text-boxc">
                <h3>Benefits</h3>
            </div>

            <div class="text-boxd">
                <ul class="a">
                    <li>Improved Social and Communication Skills</li>
                    <li>Higher Retention and Academic Achievement</li>
                    <li>Increased Engagement and Motivation</li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Video section below the content -->
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZVcOOGqy9nI?si=j1HGMd5kGfJ3rysa"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="feature-container">
        <!-- Left side: Image -->
        <div class="image-container">
            <img src="img/Experiential strategy.png">
        </div>

        <!-- Right side: Text Boxes -->
        <div class="text-container">

            <div class="text-boxa">
                <h3>5. Experiential strategy</h3>
            </div>

            <div class="text-boxb">
                <p>Experiential learning is a hands-on approach where students “learn by doing” and reflecting on their
                    experiences. Activities like simulations, experiments, and real-world tasks encourage participation
                    and collaboration. This method improves knowledge retention, critical thinking, problem-solving,
                    teamwork, and real-world readiness.</p>
            </div>

            <div class="text-boxc">
                <h3>Benefits</h3>
            </div>

            <div class="text-boxd">
                <ul class="a">
                    <li>Deeper Understanding</li>
                    <li>Enhanced Problem Solving and Critical Thinking</li>
                    <li>Increased Engagement and Motivation</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Video section below the content -->
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/GDchcHORheM?si=ylc-nYv-oaYdcusM"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <?php include 'helper/footer.php' ?>

</body>

</html>
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 03:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `strategy`
--

CREATE TABLE `strategy` (
  `strategy-tag` varchar(100) NOT NULL,
  `strategy-name` varchar(100) NOT NULL,
  `strategy-img` varchar(100) NOT NULL,
  `strategy-introduction` text NOT NULL,
  `strategy-benefit-1-name` varchar(100) NOT NULL,
  `strategy-benefit-1-desc` text NOT NULL,
  `strategy-benefit-1-img` varchar(100) NOT NULL,
  `strategy-benefit-2-name` varchar(100) NOT NULL,
  `strategy-benefit-2-desc` text NOT NULL,
  `strategy-benefit-2-img` varchar(100) NOT NULL,
  `strategy-benefit-3-name` varchar(100) NOT NULL,
  `strategy-benefit-3-desc` text NOT NULL,
  `strategy-benefit-3-img` varchar(100) NOT NULL,
  `strategy-phase-1-activities-short` text NOT NULL,
  `strategy-phase-2-activities-short` text NOT NULL,
  `strategy-phase-3-activities-short` text NOT NULL,
  `strategy-phase-1-activities-med` text NOT NULL,
  `strategy-phase-2-activities-med` text NOT NULL,
  `strategy-phase-3-activities-med` text NOT NULL,
  `strategy-phase-1-activities-long` text NOT NULL,
  `strategy-phase-2-activities-long` text NOT NULL,
  `strategy-phase-3-activities-long` text NOT NULL,
  `strategy-important-tips` text NOT NULL,
  `strategy-video-link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strategy`
--

INSERT INTO `strategy` (`strategy-tag`, `strategy-name`, `strategy-img`, `strategy-introduction`, `strategy-benefit-1-name`, `strategy-benefit-1-desc`, `strategy-benefit-1-img`, `strategy-benefit-2-name`, `strategy-benefit-2-desc`, `strategy-benefit-2-img`, `strategy-benefit-3-name`, `strategy-benefit-3-desc`, `strategy-benefit-3-img`, `strategy-phase-1-activities-short`, `strategy-phase-2-activities-short`, `strategy-phase-3-activities-short`, `strategy-phase-1-activities-med`, `strategy-phase-2-activities-med`, `strategy-phase-3-activities-med`, `strategy-phase-1-activities-long`, `strategy-phase-2-activities-long`, `strategy-phase-3-activities-long`, `strategy-important-tips`, `strategy-video-link`) VALUES
('continuous-evaluation-and-feedback', 'Continuous Evaluation and Feedback\r\n', 'continuous-evaluation-and-feedback.png', 'Continuous Evaluation and Feedback involve assessing students\' progress regularly through quizzes, assignments, discussions, and projects. Feedback is timely and actionable, enabling students to identify strengths, address weaknesses, and adjust their approach. This method ensures that learning is personalized and adaptive, catering to individual needs. Teachers act as facilitators, guiding students through self-assessment and peer reviews to develop critical thinking and self-awareness. The process fosters a growth mindset, encouraging students to view mistakes as opportunities for learning and development.\r\n', 'Improved Performance Through Regular Feedback', 'Frequent feedback helps students correct mistakes early and stay on track.', 'continuous-evaluation-and-feedback-benefit-1.png', 'Promotes Self-Reflection and Growth', 'Students learn to evaluate their work, recognize areas for improvement, and develop resilience.\r\n', 'continuous-evaluation-and-feedback-benefit-2.png', 'Better Engagement and Motivation', 'Continuous assessment keeps students engaged by providing clear goals and progress markers.', 'continuous-evaluation-and-feedback-benefit-3.png', 'Initial Setup;\r\nSet clear learning objectives for the lesson or activity.\r\nIntroduce evaluation criteria and share expectations.\r\nExplain how feedback will be provided and used.\r\n', 'Ongoing Evaluation;\r\nObserve students during tasks and collect quick insights.\r\nUse simple tools (checklists, quizzes, or peer reviews).\r\nOffer immediate, constructive feedback during the activity.\r\n', 'Reflection and Improvement;\r\nSummarize key feedback points after the activity ends.\r\nEncourage students to reflect and self-assess their work.\r\nSuggest specific ways to improve in future tasks.\r\n', 'Plan and Set Expectations;\r\nDefine evaluation goals for the entire unit/module.\r\nShare rubrics or criteria for each activity or assignment.\r\nCreate a timeline for periodic assessments and feedback.\r\n', 'Conduct Evaluations;\r\nUse formative assessments (quizzes, group tasks, or discussions).\r\nProvide ongoing feedback (written, verbal, or through rubrics).\r\nAdjust teaching strategies based on evaluation results.\r\n', 'Review and Adjust;\r\nSummarize progress and discuss with students.\r\nCompare performance with the initial goals set.\r\nHelp students set new goals for further improvement.\r\n', 'Establish System;\r\nSet long-term learning objectives for the semester/year.\r\nDevelop an evaluation framework with diverse tools.\r\nTrain students on how to use feedback effectively.\r\n', 'Implement Evaluation;\r\nConduct regular assessments using varied methods (tests, projects).\r\nOffer frequent, detailed feedback for both group and individual work.\r\nAdapt teaching based on trends from evaluation data.\r\n', 'Summative Review;\r\nConduct final evaluations to assess overall progress.\r\nReflect on feedback trends to identify improvement areas.\r\nDiscuss long-term learning goals with students.\r\n', 'Use simple tools to track progress consistently.\r\nFocus on constructive and actionable feedback.\r\nEncourage self-assessment and peer reviews.\r\n', 'https://www.youtube.com/embed/VLPqhM5y9wE?si=vnipDyeg0dwLkEy4'),
('cooperative-learning', 'Cooperative Learning', 'cooperative-learning.png', 'You can assign the students into groups which consist of 5-7 students. They will be given a collaborative task and cooperate to complete it. They learn how to express their own ideas and listen to other’s ideas as a group. After the group discussion, they combine all the ideas and make the best choice and decision. This strategy helps students to develop their communication and critical thinking skills.\r\n', 'Improved Social and Communication Skills', 'Encourages students to work together, improving their ability to communicate, collaborate, and resolve conflicts.', 'cooperative-learning-benefit-1.png', 'Higher Retention and Academic Achievement', 'Explaining ideas to peers and hearing different perspectives enhances retention and promotes deeper learning.\r\n', 'cooperative-learning-benefit-2.png', 'Increased Engagement and Motivation', 'The support from peers boost motivation, as students feel accountable to contribute to the group’s success.', 'cooperative-learning-benefit-3.png', 'Form Groups for the Lesson;\r\nDivide students into small groups for the lesson.\r\nBriefly explain each group’s activity or task.\r\nAssign roles (eg, note-taker, presenter) if necessary.\r\n\r\n', 'Conduct Cooperative Task;\r\nAllow groups to work together on the activity.\r\nCirculate the room to monitor group interactions.\r\nOffer quick guidance and answer any questions.\r\n', 'Conclude and Summarize;\r\nHave each group briefly present their findings or answers.\r\nSummarize the main points covered in the activity.\r\nEncourage students to share their group experience briefly.\r\n', 'Set Unit Group Goals;\r\nDefine learning objectives for the unit.\r\nAssign groups to focus on specific unit topics.\r\nOutline each member’s responsibilities within the group.\r\n', 'Facilitate Group Activities;\r\nGive groups time to discuss and plan their tasks.\r\nCheck in with each group, offering guidance as needed.\r\nEncourage groups to divide tasks equitably and work together.\r\n', 'Review and Reflect;\r\nHave groups share their progress with the class.\r\nFacilitate a discussion on challenges and solutions.\r\nProvide feedback on group dynamics and individual contributions.\r\n', 'Establish Groups and Goals;\r\nForm groups with balanced strengths.\r\nSet clear project goals for each group.\r\nAssign roles (e.g., researcher, presenter).\r\n', 'Implement Group Work;\r\nAllow groups to plan their project.\r\nFacilitate meetings for discussion and updates.\r\nSupport groups as they work on tasks.\r\n\r\n', 'Reflect on Group Progress;\r\nHave groups present their progress.\r\nDiscuss what’s working well.\r\nAdjust roles or tasks if needed.\r\n', 'Rotate group roles for varied experiences.\r\nPromote equal participation.\r\nAddress any conflicts constructively.', 'https://www.youtube.com/embed/ZVcOOGqy9nI?si=Mh6vk2FhlUnTYyAL'),
('practical-exercises', 'Practical Exercises', 'practical-exercises.png', 'Experiential learning involves engaging students in hands-on activities like simulations, experiments, or real-world tasks. Learners actively participate and reflect on their experiences to draw lessons. Collaboration with peers is encouraged to exchange ideas and perspectives. The benefits include better knowledge retention, improved critical thinking, stronger problem-solving skills, and deeper understanding through practical application. It also enhances teamwork and prepares students for real-world challenges.', 'Deeper Understanding', 'Hands-on experiences help students grasp complex ideas by seeing how they apply in practice, leading to a deeper understanding of the subject.', 'practical-exercises-benefit-1.png', 'Enhanced Problem-Solving and Critical Thinking', 'Encourages students to analyze situations, make choices, and reflect on outcomes, improving their problem-solving abilities.', 'practical-exercises-benefit-2.png', 'Increased Engagement and Motivation', 'More dynamic and interactive than traditional methods, which keeps students engaged and motivated.', 'practical-exercises-benefit-3.png', 'Introduce and Set Expectations;\r\nBriefly explain the day’s experiential activity.\r\nState clear objectives for the activity.\r\nOutline safety or practical guidelines if needed.\r\n', 'Conduct the Activity;\r\nAllow students to engage hands-on with the material or concept.\r\nPrompt them to reflect on what they observe.\r\nAnswer questions to help them connect with the lesson’s focus.\r\n\r\n', 'Wrap up and Reflect;\r\nLead a quick discussion to summarize the experience.\r\nAsk students to share one insight or observation.\r\nTie the activity back to the lesson\'s learning goals.\r\n', 'Plan and Prepare;\r\nIdentify a project or activity that applies unit concepts.\r\nGather necessary materials or organize relevant fieldwork.\r\nSet objectives and guidelines for the experience.\r\n', 'Facilitate the Experience;\r\nGuide students as they engage in hands-on activity.\r\nPrompt students to observe and reflect on their actions.\r\nEncourage them to ask questions and explore independently.\r\n', 'Reflect and Discuss;\r\nHold a debriefing session to discuss observations.\r\nEncourage students to connect the experience to unit content.\r\nNote insights that could improve future experiences.\r\n', 'Plan Experience Goal;\r\nOutline goals that connect theory to real-world practice.\r\nSchedule experiences like field trips or internships.\r\nGather necessary permissions and resources.\r\n', 'Facilitate Real-World Learning;\r\nEncourage observation and note-taking.\r\nPrompt reflection during the experience.\r\nGuide students in asking questions.\r\n', 'Reflect and Connect;\r\nFacilitate a class discussion post-experience.\r\nHelp students link experience to classroom learning.\r\nAdjust future experiences based on feedback.\r\n', 'Emphasize reflection after experiences.\r\nProvide guidance during hands-on activities.\r\nMake connections between experience and theory clear.\r\n', 'https://www.youtube.com/embed/GDchcHORheM?si=URpUucSNj3nLVMWZ'),
('problem-based-learning', 'Problem-based learning', 'problem-based-learning.png', 'PBL encourages students to engage with real-world problems that lack clear solutions. They work collaboratively in small groups to research, discuss, and develop solutions. This method helps students identify what they know, what they need to learn, and how to find the information they need. Facilitators guide the process without providing direct answers, encouraging self-directed learning. PBL helps bridge the gap between theory and practice, making education more relevant and impactful.', 'Improved Critical Thinking and Analytical Skills', 'Students develop the ability to think critically by analyzing problems, identifying solutions, and evaluating outcomes.', 'problem-based-learning-benefit-1.png', ' Real-World Application', 'By addressing practical challenges, students see how concepts learned in class are applied in real-world scenarios.', 'problem-based-learning-benefit-2.png', 'Enhanced Collaboration and Communication', 'Working in groups hones interpersonal skills, fostering teamwork and clear communication.', 'problem-based-learning-benefit-3.png', 'Project Kickoff;\r\nIntroduce a broad, real-world problem that spans multiple subjects.\r\nDefine clear objectives, milestones, and expected outcomes.\r\nAssign long-term groups with specialized roles for better collaboration.\r\n', 'Research and Development;\r\nGuide students through comprehensive research and data collection.\r\nEncourage regular updates, brainstorming sessions, and iterative problem-solving.\r\nFacilitate cross-group collaboration if applicable.\r\n', 'Final Solution and Reflection;\r\nHave groups present their final solutions to an audience (eg, peers, community members, experts).\r\nProvide constructive feedback and discuss alternative approaches.\r\nReflect on the overall learning experience and areas for improvement.\r\n', 'Problem Identification;\r\nPresent a moderately complex problem relevant to the unit.\r\nDefine goals, expected outcomes, and timelines.\r\nHelp students form diverse groups with assigned roles (researcher, organizer, presenter).\r\n', 'Investigation and Collaboration;\r\nGuide students as they conduct in-depth research.\r\nEncourage group discussions to analyze findings and brainstorm solutions.\r\nMonitor progress through periodic check-ins or interim presentations.\r\n', 'Solution Presentation and Evaluation;\r\nGroups present their findings and proposed solutions.\r\nFacilitate peer and instructor evaluations.\r\nReflect as a class on problem-solving strategies and outcomes.\r\n', 'Introduction;\r\nPresent a simple, real-world problem.\r\nProvide background information and clarify objectives.\r\nForm small groups or assign individual tasks.\r\n', 'Problem Exploration;\r\nGuide students in brainstorming potential solutions.\r\nEncourage them to identify gaps in their knowledge.\r\nAssign brief research tasks or activities.\r\n', 'Solution and Reflection;\r\nHave students present their proposed solutions.\r\nFacilitate a discussion on different approaches.\r\nReflect on lessons learned and their application to future problems.\r\n', 'Present authentic, real world problems to maintain relevance.\r\nEnsure group diversity for creative and balanced solutions.\r\nProvide timely guidance without micromanaging.', 'https://www.youtube.com/embed/xLqnxIR2Fj4?si=rFpYV5waYHVZNMwj'),
('resource-sharing-and-online-communities', 'Resource Sharing and Online Communities', 'resource-sharing-and-online-communities.png', 'Resource Sharing and Online Communities connect learners and educators through platforms like Google Drive, discussion forums, and social media groups. Participants share materials, such as articles, videos, and tools, making knowledge accessible to everyone. These platforms encourage interaction through comments, feedback, and discussions, building a sense of community and mutual support. Online communities promote peer learning by enabling members to exchange perspectives, clarify doubts, and co-create content. \r\n', 'Collaborative Learning', 'Sharing resources encourages teamwork and the exchange of diverse perspectives, enhancing understanding.', 'resource-sharing-and-online-communities-benefit-1.png', 'Access to a Wealth of Information', 'Participants gain access to curated resources, saving time and improving learning outcomes.\r\n', 'resource-sharing-and-online-communities-benefit-2.png', 'Improved Engagement and Connectivity', 'Active participation in online discussions fosters engagement and strengthens connections among peers and educators.\r\n', 'resource-sharing-and-online-communities-benefit-3.png', 'Introduction;\r\nExplain the platform and its purpose for resource sharing.\r\nShow students how to upload and access resources easily.\r\nAssign a specific topic for resource contributions.\r\n', 'Resource Contribution;\r\nStudents find and upload resources relevant to the topic.\r\nProvide short descriptions for shared resources for clarity.\r\nEnsure all contributions align with the topic.\r\n', 'Discussion and Review;\r\nFacilitate a discussion about the shared resources.\r\nHighlight the best contributions and explain their usefulness.\r\nReflect on what was learned from the shared materials.\r\n', 'Community Setup;\r\nChoose an easy-to-use online platform for collaboration.\r\nSet rules for sharing resources and acceptable formats.\r\nAssign group roles to encourage participation.\r\n', 'Ongoing Collaboration;\r\nShare resources weekly related to the unit/module.\r\nInteract by commenting, liking, or reviewing shared materials.\r\nConduct regular check-ins to monitor participation.\r\n', 'Consolidation and Feedback;\r\nSummarize and organize key shared resources effectively.\r\nGather feedback on the community’s effectiveness and engagement.\r\nSuggest improvements for better collaboration moving forward.\r\n', 'Foundation Building;\r\nCreate a permanent online platform for resource sharing.\r\nDefine community goals and encourage member involvement.\r\nTeach members how to use the platform effectively.\r\n', 'Sustained Engagement;\r\nHost weekly or monthly discussions and resource uploads.\r\nAdd multimedia formats like videos, infographics, or podcasts.\r\nEncourage members to share personal success stories.\r\n', 'Evaluation and Growth;\r\nAssess community impact through surveys or discussions.\r\nReward active contributors with recognition or incentives.\r\nPlan expansion by inviting new members or broadening topics.\r\n', 'Choose platforms that are intuitive and accessible.\r\nDefine clear guidelines for what and how to share.\r\nEncourage active engagement with discussions and reviews.', 'https://www.youtube.com/embed/cIQ-eyp7_lQ?si=MzpSuI5Nn0n8YnSv');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'Tan Yin Xuan', 'xuantan897@gmail.com', '0e75cb9e7c1b2f7287a9a0be3214aaaa', 'admin'),
(2, 'Tan Yin Xuan', 'xuantan897@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `strategy`
--
ALTER TABLE `strategy`
  ADD PRIMARY KEY (`strategy-tag`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<?php

if(isset($_POST['name'])){
$servername = "localhost";
$username = "root";  // default username for XAMPP
$password = "";      // default password is empty in XAMPP
$dbname = "portfolio";  // name of the database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare the SQL insert statement
$sql = "INSERT INTO `messages` (`name`, `email`, `subject`, `message`, `created_at`) 
        VALUES ('$name', '$email', '$subject', '$message', CURRENT_TIMESTAMP)";

// Execute the query and check for success
if ($conn->query($sql)==true) {
     // Redirect to success.html
     header("Location: success.html");
     exit(); 
} else {
    echo "Error: $sql <br> $conn->error ";
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <div class="nav-container">
            <div class="logo">
                Arjun<span>Kumar</span>
            </div>
            <div class="links">
                <div class="link"><a href="#home">Home</a></div>
                <div class="link"><a href="#about">About</a></div>
                <div class="link"><a href="#skills">Skills</a></div>
                <div class="link"><a href="#projects">Projects</a></div>
                <div class="link"><a href="#contact">Contact</a></div>
            </div>
            <p class="mode">
                <i class="fas fa-sun"></i>
            </p>
            <i class="fa-solid fas fa-bars hamburger" onclick="hamburg()"></i>
        </div>
        <div class="dropdown">
            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
            </div>
        </div>
    </nav>

    <section id="home" onclick="cancel()">
        <div class="main-container">
            <div class="image">
                <img src="Assets/Ajun.png" alt="" style=" height:auto;" loading="lazy">
            </div>
            <div class="content">
                <h1>Hey I'm <span>Arjun</span></h1>
                <div class="typewritter">I'm a <span class="typewritter-text"></span><label for="">|</label>
                </div>
                <P>Hello, I’m Arjun Kumar! <br>
                    A Computer Science student who loves coding, solving problems, and exploring new technologies.
                    Welcome to my space where I share my projects, skills, and tech journey!</P>
                <div class="socials">
                    <a href="https://github.com/Arjunps12" target="_blank"><i
                            class="fa-brands fab fab fa-github social-link"></i></a>
                    <a href="https://www.linkedin.com/in/arjun-kumar-bb4b30300/" target="_blank"><i
                            class="fa-brands fab fab fa-linkedin social-link"></i></a>
                    <a href="https://x.com/arjunuit22" target="_blank"><i
                            class="fa-brands fab fab fab fab fa-twitter social-link"></i></a>
                    <a href="https://www.instagram.com/arjun_ps12/" target="_blank"><i
                            class="fa-brands fab fab fab fab fa-instagram social-link"></i></a>
                </div>
                <div class="button">
                    <button> <a href="Assets/Resume1.pdf" download="Resume1.pdf">Download CV<i style="margin-left: 3px;"
                                class="fa-slid fas fa-download"></i></a></button>
                </div>
            </div>
        </div>
    </section>

    <section id="about" onclick="cancel()">
        <h2 style="color: var(--second-color);">hhh</h2>
        <div class="about-head-cont">
            <h1 class="about-heading">About</h1>
        </div>
        <main class="education">
            <section class="col">
                <header class="title">
                    <h2>EDUCATION</h2>
                </header>
                <div class="about-content">
                    <div class="box">
                        <h4>2022 - 2026</h4>
                        <h3>Bachelor of Technology (BTech) - Uttaranchal University</h3>
                        <p>Pursuing BTech in Computer Science Engineering, with a current CGPA of 8.59. Expected
                            graduation in 2026. Involved in various projects and internships related to web development
                            and UI/UX design.</p>
                    </div>
                    <div class="box">
                        <h4>2019 - 2021</h4>
                        <h3>12th Grade - Gulab Memorial College</h3>
                        <p>Completed 12th grade with 85.2% under the Bihar State Government Board. Focused on core
                            subjects such as Physics, Chemistry, and Mathematics.</p>
                    </div>
                    <div class="box">
                        <h4>2018 - 2019</h4>
                        <h3>10th Grade - Delhi Public School</h3>
                        <p>Passed with 86.6% under CBSE, demonstrating strong foundations in Mathematics and Science,
                            and leadership skills in school projects.</p>
                    </div>
                </div>
            </section>
            <section class="col">
                <header class="title">
                    <h2 style="color: var(--first-color);">EXPERIENCE </h2>
                </header>
                <div class="about-content">
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>UI/UX Designer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>Full-Stack Developer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div class="box">
                        <h4>2018 - 2022</h4>
                        <h3>Frontend Developer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </section>
        </main>
    </section>


    <section id="skills" onclick="cancel()">
        <div class="main-title">
            <h2 style="color: var(--second-color)">hello</h2>
            <div class="skill-head-cont">
                <h1 style="color: var(--primary-color);">My Skills</h1>
            </div>
            <p>"I am skilled in HTML, CSS, JavaScript, and React, with a focus on creating responsive and dynamic web
                applications.I am passionate about Data Structures and Algorithms (DSA) with C++.</p>
        </div>

        <div class="row">

            <!--   *******  Left Section Starts here  *******   -->

            <section class="col">

                <div class="sub-title">
                    <h2>Programming Skills</h2>
                </div>

                <div class="skills-container">

                    <div class="skill">
                        <div class="subject">HTML</div>
                        <div class="progress-bar" value="94%">
                            <div class="progress-line" style="max-width: 94%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="subject">CSS</div>
                        <div class="progress-bar" value="83%">
                            <div class="progress-line" style="max-width: 83%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="subject">JavaScript</div>
                        <div class="progress-bar" value="68%">
                            <div class="progress-line" style="max-width: 68%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="subject">C++</div>
                        <div class="progress-bar" value="68%">
                            <div class="progress-line" style="max-width: 68%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="subject">C++</div>
                        <div class="progress-bar" value="68%">
                            <div class="progress-line" style="max-width: 68%"></div>
                        </div>
                    </div>

                </div>
            </section>


            <!--   ********  Right Section Starts Here  ********  -->

            <section class="col">

                <div class="sub-title">
                    <h2 style="color: var(--first-color);">Leetcode Journey</h2>
                    <img src="Assets/leetcode.png" alt="" width="35px" height="30px">
                </div>

                <div class="skill-container">
                    <div class="leetcode-journey">
                        <h2 style="color: var(--second-color);">LeetCode Journey</h2>
                        <div class="leetcode-stats">
                            <div class="progress-container">
                                <h3>Easy </h3>
                                <div class="circular-progress" data-progress="50">
                                    <span class="progress-value">50</span>
                                </div>
                            </div>
                            <div class="progress-container">
                                <h3>Medium</h3>
                                <div class="circular-progress" data-progress="30">
                                    <span class="progress-value">30</span>
                                </div>
                            </div>
                            <div class="progress-container">
                                <h3>Hard</h3>
                                <div class="circular-progress" data-progress="10">
                                    <span class="progress-value">10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </section>

        </div>

    </section>

    <section id="projects" onclick="cancel()">
        <div class="project-head-cont">
            <h1 class="project-heading">Recent Projects</h1>
        </div>
        <p style=" color: #808080;">I’ve recently uploaded some of my latest projects. Feel free to explore them and see
            the technologies I’ve been
            working with. Check them out below!</p>
        <div class="card-wrapper">
            <ul class="card-list">
                <li class="card-items">
                    <img src="Assets/peoject1.webp" alt="Project 1 Screenshot" class="card-img">
                    <p class="card-details">This project focuses on creating a responsive eCommerce website with a
                        subscription model.</p>
                    <a href="https://project1link.com" target="_blank"><i
                            class="fa-solid fas fa-external-link-alt"></i></a>
                </li>
                <li class="card-items">
                    <img src="Assets/peoject1.webp" alt="Project 2 Screenshot" class="card-img">
                    <p class="card-details">A weather forecasting app using the OpenWeather API, displaying real-time
                        data for multiple locations.</p>
                    <a href="https://project2link.com" target="_blank"><i
                            class="fa-solid fas fa-external-link-alt"></i></a>
                </li>
                <li class="card-items">
                    <img src="Assets/peoject1.webp" alt="Project 3 Screenshot" class="card-img">
                    <p class="card-details">A portfolio website showcasing my web development and UI/UX designlorem5
                        projects.</p>
                    <a href="https://project3link.com" target="_blank"><i
                            class="fa-solid fas fa-external-link-alt"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <section id="contact" onclick="cancel()">
        <div class="contact-head-cont">
            <h1>Contact Me</h1>
        </div>

        <main class="row">

            <section class="col left">

                <div class="contactTitle">
                    <h2>Get In Touch</h2>
                    <p>Your feedback and inquiries are important to me! Don’t hesitate to connect using the form below.
                    </p>
                </div>

                <div class="contactInfo">

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <span>Phone</span>
                            <span>+91 7209016350</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <span>Email</span>
                            <span>arjunuit22@gmail.com</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="details">
                            <span>Location</span>
                            <span>Dehradun Uttarakhand 248007</span>
                        </div>
                    </div>

                </div>


                <div class="socialMedia">
                    <a href="https://www.instagram.com/arjun_ps12/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/arjun-kumar-bb4b30300/" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>


            </section>

            <section class="col right">

                <form action="data.php" method="post" class="messageForm">
                    <div class="inputGroup halfWidth">
                        <input type="text" name="name" id="name" required="required">
                        <label for="name">Your Name</label>
                    </div>

                    <div class="inputGroup halfWidth">
                        <input type="email" name="email" id="email" required="required">
                        <label for="email">Email</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <input type="text" name="subject" id="subject" required="required">
                        <label for="subject">Subject</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <textarea name="message" id="message" required="required"></textarea>
                        <label for="message">Say Something</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <button type="submit">Send Message <i class="fa-solid fas fa-forward"></i></button>
                    </div>
                </form>


            </section>

        </main>

    </section>


    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Arjun Kumar. All rights reserved.</p>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <script src="script.js"></script>
</body>

</html>
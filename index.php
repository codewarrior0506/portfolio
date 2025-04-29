<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if (isset($_POST ['username']) && isset($_POST ['email']) && isset($_POST ['contact']) && isset($_POST ['subject']) && isset($_POST ['message'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (username, email, contact, subject, message) VALUES ('$username', '$email', '$contact', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Please fill all the fields.";
}

$conn->close();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Portfolio</title>
</head>
<body>
   <header class="header">
      <a href="#" class="logo">Amarjeet</a>
      <div class="menu"></div>
      <nav class="navbar">
        <a href="#Home">home</a>
        <a href="#Education">education</a>
        <a href="#Services">services</a>
        <a href="#Testimonials">testimonials</a>
        <a href="#Contact">contact</a>
      </nav>
   </header>

   <section class="home" id="Home">
    <div class="content">
        <h1>Hi, it's <span>Amarjeet</span></h1>
        <h3 class="text-animation">i'm a <span></span></h3>
        <p>Detail-oriented and passionate web developer with a strong foundation in HTML, CSS, and JavaScript. I am seeking an entry level position to leverage my skills in creating responsive and user-friendly web applications.</p>
        <div class="icons">
          <a href="https://www.linkedin.com/in/amarjeet-k-55a39023b"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://github.com/codewarrior0506"><i class="fab fa-github" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/amarjeet0506/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="https://x.com/Amarjeet050"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="flex-btn">
            <a href="#Contact" class="btn hire">hire</a>
            <a href="#Contact" class="btn">contact</a>
        </div>
    </div>
    <img src="images/boy.jfif" alt="">
   </section>
<section class="education" id="Education">
<h2 class="heading">education</h2>
<div class="timeline-items">
    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2019</div>
        <div class="timeline-content">
            <h3>secondary school</h3>
            <p>Completed my secondary education from Sai Dass A. S. Sr. Sec School Jalandhar, Punjab with the percentage of 84.</p>
        </div>
    </div>
    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2021</div>
        <div class="timeline-content">
            <h3>high school</h3>
            <p>Completed my high school education from Sai Dass A. S. Sr. Sec School Jalandhar, Punjab with the percentage of 79.</p>
        </div>
    </div>
    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2024</div>
        <div class="timeline-content">
            <h3>Graduation</h3>
            <p>Completed my bachelor's of education under the PTU (punjab technical university) from CT Institute of Management & IT with the sgpa of 6.9 .</p>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2025</div>
        <div class="timeline-content">
            <h3>Web Development</h3>
            <p>Completed my education of full stack development from Techcadd Institute and enhanced the expertise on real-time projects.</p>
        </div>
    </div>
</div>
</section>

<section class="services" id="Services">
    <h2 class="heading">services</h2>
    <div class="box-container">
        <div class="box">
            <h3>UI Design</h3>
            <p> Skilled in user research, wireframing, prototyping, and high-fidelity design. Create intuitive, accessible, and responsive interfaces using Figma, Adobe XD, and Sketch. Strong in design systems and cross-functional collaboration.</p>
        </div>

        <div class="box">
            <h3>Frontend Development</h3>
            <p>Skilled in HTML, CSS, JavaScript, Bootstrap, and jQuery with a focus on building responsive, user-friendly web interfaces. Passionate about creating clean, maintainable, and user-friendly front-end co</p>
        </div>

        <div class="box">
            <h3>Backend Development</h3>
            <p>specialize in building robust and scalable server-side applications using PHP and MySQL. I have hands-on experience in designing and managing databases and creating secure high-performance web solutions.</p>
        </div>
        

    </div>
</section>

<section class="testimonials" id="Testimonials">
    <h2 class="heading">testimonials</h2>
    <div class="box-container">

        <div class="box">
            <img src="images/boy.jfif" alt="">
            <h3>Problem Solving</h3>
            <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>Implement effective solutions under pressure, with a strong focus on efficiency and innovation. Skilled in analyzing complex challenges, troubleshooting obstacles, and streamlining processes to drive success.</p>
        </div>

        <div class="box">
            <img src="images/boy.jfif" alt="">
            <h3>Team collaboration</h3>
            <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>Excellent team collaboration skills with a focus on building strong relationships and working toward shared goals.Contributed to diverse teams and driving projects forward through cooperation.</p>
        </div>

        <div class="box">
            <img src="images/boy.jfif" alt="">
            <h3>Learning and Growth</h3>
            <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>Committed to continuous learning and professional growth, with a strong ability to quickly adapt to new challenges, technologies, and environments. Passionate about expanding skills.</p>
        </div>

    </div>
</section>

<section class="contact" id="Contact">
    <h2 class="heading">contact <span>me</span></h2>
    <div class="form-container">
        <form action="" method="POST">
            <div class="inputs">
            <label for="username" class="form-label"></label>
                <input type="text" name="username" id="username" placeholder="full name" class="input">
            <label for="email" class="form-label"></label>
                <input type="email" name="email" id="email" placeholder="email" class="input">
            <label for="contact" class="form-label"></label>
                <input type="number" name="contact" id="contact" placeholder="mobile" class="input">
            <label for="subject" class="form-label"></label>
                <input type="text" name="subject" id="subject" placeholder="subject" class="input">
            </div>
            <div class="text">
                <textarea name="message" id="message" placeholder="your message"></textarea>
                 <button class="btn" type="submit" name="submit">SEND MESSAGE</button>
            </div>
        </form>
    </div>
</section>
 <footer class="footer">
    <div class="icons">
        <a href="https://www.linkedin.com/in/amarjeet-k-55a39023b"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://github.com/codewarrior0506"><i class="fab fa-github" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/amarjeet0506/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="https://x.com/Amarjeet050"><i class="fab fa-twitter" aria-hidden="true"></i></a>
    </div>
    <nav class="navbar">
        <a href="#Home">home</a>
        <a href="#Education">education</a>
        <a href="#Services">services</a>
        <a href="#Testimonials">testimonials</a>
        <a href="#Contact">contact</a>
    </nav>
    <div class="credit">
        <p><i class="fa fa-copyright" aria-hidden="true"></i>Amarjeet <span>||</span> all rights reserved</p>
    </div>
 </footer>
    <script src="script.js"></script>
</body>
</html>
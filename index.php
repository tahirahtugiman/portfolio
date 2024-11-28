<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button id="back-to-top">↑</button>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home">
        <h1>Hi, I'm [Your Name]</h1>
        <p>Front-End Developer | Java Programmer | Designer</p>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Me</h2>
        <p>A brief description about yourself, your background, and your skills.</p>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2>My Projects</h2>
        <div class="project">
            <h3>Project 1</h3>
            <p>Description of the project.</p>
            <a href="#">View Project</a>
        </div>
        <div class="project">
            <h3>Project 2</h3>
            <p>Description of the project.</p>
            <a href="#">View Project</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <form action="https://example.com/submit" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Name. All Rights Reserved.</p>
    </footer>
</body>
</html>

<script src="script.js" defer></script>

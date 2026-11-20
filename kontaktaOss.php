<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - M&F Racing</title>
    <link rel="stylesheet" href="css/styls.css">
</head>

<body class="contact-page">

<nav class="navbar">
    <div class="nav-logo">M<span>&</span>F RACING</div>

    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="cars.php">Cars</a></li>
        <li><a href="racing.php">Racing</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="omOss.php">About Us</a></li>
        <li><a href="bokningar.php">Booking</a></li>
    </ul>
</nav>

<main class="contact-container">
    </div>

    <h1>Contact Us</h1>

    <div class="decorative-line"></div>

    <p class="contact-description">
        Do you have any questions or suggestions?
        Feel free to contact us!
    </p>

    <div class="contact-information">

        <div class="contact-item">
            <div class="contact-icon">✉</div>
            <p>faribaMostafaie@gmail.se</p>
        </div>

        <div class="contact-item">
            <div class="contact-icon">☎</div>
            <p>0728776395</p>
        </div>

    </div>

    <h2>Get in Touch</h2>

    <form class="contact-form" action="#" method="post">

        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your name"
            required
        >

        <label for="email">Email Address</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email address"
            required
        >

        <label for="message">Message</label>
        <textarea
            id="message"
            name="message"
            placeholder="Write your message here..."
            required
        ></textarea>

        <button type="submit">SEND MESSAGE</button>

    </form>

    <div class="connect-text">
        CONNECT WITH US!
    </div>

</main>

</body>
</html>
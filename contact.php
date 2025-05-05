<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD BOUNTY - Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="Sub-header">
        <nav>
            <a href="index.html" class="logo">FOOD
                <i class="fab fa-staylinked"></i>BOUNTY
            </a>
            <div class="nav-links" id="navLinks">
                <!-- reposnive bar open and close -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                   
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- reposnive bar open and close -->
        </nav>
        <h1>Contact Us</h1>
    </section>

    <!-- Contact Us Section Start -->

    <section class="loacation">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13574.169890251876!2d76.00432599313659!3d31.728390836874055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b1fd703a37799%3A0x1dc9440ed3f78063!2sEk%20Mauka%20Ek%20Umeed%20NGO!5e0!3m2!1sen!2sin!4v1738502658289!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="content-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>UNA</h5>
                        <p>Himachal Pradesh 177117</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+91 7807858158</h5>
                        <p>Monday To Saturday, 9AM To 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5>emeusanstha@gmail.com</h5>
                        <p>Email Us Yor Query</p>
                    </span>
                </div>
            </div>
            <div class="content-col">
                <form>
                    <input type="text" placeholder="Enter Name" required>
                    <input type="email" placeholder="Enter Email" required>
                    <input type="text" placeholder="Enter Subject" required>
                    <textarea rows="8" placeholder="Message" required></textarea>
                    <button type="submit" class="hero_btn btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Us Section End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <hr>
        <h4>About Us</h4>
        <p>Thank you for your support! Your donation to Food Bounty makes a real difference. Join us in the fight against hunger – tell your friends about Food Bounty
        </p>

        <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>
    </section>
    <!-- Footer Section End -->

    <script src="script.js"></script>
</body>

</html>
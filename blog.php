<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD BOUNTY - Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="Sub-header">
        <nav>
            <a href="index.php" class="logo">FOOD
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
        <h1>Our Post</h1>
    </section>

    <!-- Blog Page Section Start -->

    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <h2>Our Certificate of Appreciation</h2>
                <h5>2025</h5>
                <img src="certificate.jpeg" alt="">
                <p>YOU ARE A HERO</p>
                <br>
                <p>We extend our sincere appreciation for your donation to Food Bounty.  Your gift strengthens our efforts to create a community where everyone has access to nutritious food.  By supporting Food Bounty, you are joining a network of compassionate individuals dedicated to making a difference.  Together, we are working to reduce food waste, alleviate hunger, and foster a stronger, more connected community. Thank you for being a part of the Food Bounty family.</p>
                <br>
                <p>With heartfelt gratitude, we acknowledge your generous donation to Food Bounty. Your support is invaluable as we strive to eliminate food insecurity and promote food rescue.  Your contribution enables us to continue our vital work of collecting surplus food from businesses and delivering it to those who need it most.  Thank you for your compassion and commitment to making a positive impact on the lives of others.  We are truly grateful for your partnership</p>
                <br>
                <p>Thank you for your incredible generosity! Your donation to Food Bounty makes a real difference in the lives of those facing hunger in our community.  We are so grateful for your support, which allows us to rescue perfectly good food and get it to people who need it.  Your kindness and compassion inspire us all. Thank you for being a Food Bounty hero!</p>

                <div class="comment-box">
                    <h3>Leave a Comment</h3>
                    <form class="comment-form">
                        <input type="text" placeholder="Enter Name" required>
                        <input type="email" placeholder="Enter Email" required>
                        <textarea rows="5" placeholder="Your Comment"></textarea>
                        <button type="submit" class="hero_btn btn">POST COMMENT</button>
                    </form>
                </div>
            </div>

          
    </section>

    <!-- Blog Page Section end -->
    
    <!-- Footer Section start -->
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
    <!-- Footer Section end -->

    <script src="script.js"></script>
</body>

</html>
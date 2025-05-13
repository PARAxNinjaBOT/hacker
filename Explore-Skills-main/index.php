<!DOCTYPE html>
<html lang="en">

<head>
<marquee behavior="scroll" direction="left">Make a step,You can be a hero for someone, Together, we can turn food waste into a bounty for those in need ,! Stay turned for updates.</marquee>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD BOUNTY </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="stylesheet"

        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>

<body>
    <section class="header">
        <nav>
            <a href="about.php" class="logo">FOOD
                <i class="fab fa-staylinked"></i>BOUNTY
            
            </a>
            <div class="nav-links" id="navLinks">
                <!-- Reposnive bar open and close -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!-- Reposnive bar open and close -->
        </nav>

        <div class="text_box">
            <h2>WASTE FOOD TO BOUNTY</h2>
            <p id="headtext">TO HELP OTHERS</p>
            <p>By connecting surplus food from restaurants , marriage parties,birthday parties and individuals with the collaboration of NGO's and afterwards those in need, we strive to create a sustainable and compassionate food system.
            </p>
            <a href="login.php" class="hero_btn">DONOR LOGIN</a>
             <a href="adminlogin.php" class="hero_btn">ADMIN LOGIN</a>
        </div>
    </section>

    <section class="course">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>EXPLORE OUR <br> MAJOR OBJECTIVES</h1>
        

        <div class="row">
            <div class="course-col">
                <h3>Become a Part of FOOD BOUNTY</h3>
                <p>Take a step and join Food Bounty and give your contribution as a,collector, distibutor , online handler,and be a part of FOOD BOUNTY team.</p>
            </div>
            <div class="course-col">
                <h3>Collection of eatables</h3>
                <p>The one(restaurant etc) requesting to take away the leftover food is immidiately collected by the FOOD BOUNTY team.</p>
            </div>
            <div class="course-col">
                <h3>Distribution to the ones in need</h3>
                <p>Once the food is collected successfully next step is to take the food to the one's who are in need.</p>
            </div>
        </div>
    </section>
    <!-- Course Section End -->

    <!-- Campus Section Start-->

    <section class="campus">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>OUR COLLABORATIONS TILL NOW</h1>
        <p>NGO'S with which we are in touch.</p>

        <div class="row">
            <div class="campus-col">
                <img src="https://pbs.twimg.com/profile_images/1178590487600480256/YFNjhlla_400x400.jpg" alt="">
                <div class="layer">
                    <h3>UNA</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="https://static.wixstatic.com/media/e07cd5_486b19363583475e8f3b487422e7b945~mv2.jpg/v1/fill/w_390,h_260,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/DSC_0051_JPG.jpg" alt="">
                <div class="layer">
                    <h3>RAKKAR</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="https://files.yappe.in/place/full/mudraas-charitable-society-8626923.webp" alt="">
                <div class="layer">
                    <h3>DHARAMSHALA</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Campus Section End -->

    <!-- Facilities Section Start -->
    <section class="facilities">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>Our TEAM</h1>
        <p>This program is not yet live we are just students working on it</p>

        <div class="row">
            <div class="facilities-col">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>MANAGEMENT TEAM</h3>
                <p>Manages all the requests ,responds to requests ,looks for the places to food supply
                </p>
            </div>
            <div class="facilities-col">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpRQDM1Xyr3UpUOnekuyKlMaglpDVvgMvWhg&s" alt="">
                <h3>DELIVERY TEAM </h3>
                <p>All the procedures of Picking up , then firstly taking it to warehouse for packging and delivering the food in different places
                </p>
            </div>
            <div class="facilities-col">
                <img src="https://static.vecteezy.com/system/resources/previews/005/721/929/non_2x/delivery-service-team-staffs-with-many-parcel-boxes-illustration-vector.jpg" alt="">
                <h3>PACKGING TEAM</h3>
                <p>This team contains the active workers for packging and cooks to recook the food if needed
                </p>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonials Section Start -->
    <section class="testimonials">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>What Our TEAM Says</h1>
        <p>About the project</p>

        <div class="row">
            <div class="testimonials-col">
                <img src="img/user.png" alt="oo..">
                <div>
                    <p>My main motive on this project is to change the surrounding with the new thought of distributing the exrta leftover food rather than wasting</p>
                    <h3>Aryan Singh</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="img/user.png" alt="oo..">
                <div>
                    <p>My main motive is to contibute my best for the one's who sleep without a proper food.</p>
                    <h3>Vishal Guleria</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- Call To Action Section Start -->
    <section class="cta">
        <h1>GIVE REQUEST FOR FOOD COLLECTION</h1>
        <a href="contact.php" class="hero_btn">CONTACT US</a>
    </section>
    <!-- Call To Action Section End -->

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
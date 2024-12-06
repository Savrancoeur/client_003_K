<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <!-- title of site -->
    <title>AUS Sport Club</title>

    <!-- For favicon png -->

    <!--font-awesome.min.css-->
    <!-- <link
      rel="stylesheet"
      href="../../public/libs/fontawesome-6/css/fontawesome.min.css"
    /> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!--linear icon css-->
    <link rel="stylesheet" href="../../public/libs/linearicons/linearicons.css" />

    <!--flaticon.css-->
    <link rel="stylesheet" href="../../public/libs/flaticon/flaticon.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="../../public/libs/animate/animate.css" />

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="../../public/libs/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../public/libs/owl-carousel/owl.theme.default.min.css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="../../public/libs/bootstrap-5/css/bootstrap.min.css" />

    <!--style.css-->
    <link rel="stylesheet" href="../css/style.css" />

    <!--header.css-->
    <link rel="stylesheet" href="../css/header.css" />

    <!--pastevents.css-->
    <link rel="stylesheet" href="../css/pastevents.css" />

    <!--footer.css-->
    <link rel="stylesheet" href="../css/footer.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="../css/responsive.css" />
</head>

<body>
    <!--nav-bar start -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">AUS Sport Club</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll" aria-label="Navigate to Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="events.php" class="nav-link smoothScroll" aria-label="Navigate to Events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="pastevents.php" class="nav-link smoothScroll" aria-label="Navigate to Past Events">Past
                            Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="news.php" class="nav-link smoothScroll"
                            aria-label="Navigate to News and Announcements">News & Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link smoothScroll" aria-label="Navigate to About Us">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link smoothScroll"
                            aria-label="Navigate to Contact Us">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <!-- Sign In/Up Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="signInDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sign In/Up
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="signInDropdown">
                            <a class="dropdown-item" href="./login.php" aria-label="Navigate to Login">Login</a>
                            <a class="dropdown-item" href="./register.php"
                                aria-label="Navigate to Register">Register</a>
                        </div>
                    </li>

                    <!-- Profile Dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="profileDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="Profile Menu">
                            <img src="../../public/images/pf_logo.png" style="width: 30px" alt="Profile"
                                class="profile-pic" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <a class="dropdown-item" href="./admin.php" aria-label="Go to Admin Panel">
                                    Admin
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./member.php" aria-label="Go to Member Dashboard">
                                    Member
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="./logout.php" aria-label="Logout">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Past Events Section -->
    <section id="past-events" class="past-events-section" aria-labelledby="past-events-heading">
        <div class="container">
            <h2 id="past-events-heading" class="section-heading">Past Events</h2>
            <p class="section-description" aria-describedby="past-events-description">
                Take a look at the exciting events we've hosted in the past. These
                moments reflect our dedication to promoting sports and building
                community.
            </p>

            <div class="row">
                <!-- Event Card 1 -->
                <div class="col-md-4" role="region" aria-labelledby="event-1-heading">
                    <div class="event-card" aria-describedby="event-1-description">
                        <div class="event-status">
                            <span class="tag past" role="status" aria-live="polite">Completed</span>
                        </div>
                        <img src="../../public/images/events/basketball.png" alt="Basketball Tournament"
                            aria-labelledby="event-1-heading" />
                        <div class="event-content">
                            <h3 id="event-1-heading">Basketball Tournament</h3>
                            <p>
                                <i class="fa fa-location-dot" aria-hidden="true"></i> Mandalay
                                Stadium
                            </p>
                            <p>
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i> 25th
                                December 2024
                            </p>
                            <p><i class="fa fa-clock" aria-hidden="true"></i> 3:00 PM</p>
                            <p>
                                <i class="fa fa-child" aria-hidden="true"></i> Age Group:
                                16-25 years
                            </p>
                            <p id="event-1-description" class="event-summary">
                                The basketball tournament was a huge success with fierce
                                competition and amazing sportsmanship.
                            </p>
                            <a href="./eventdetails.html" class="details-btn"
                                aria-label="View details of Basketball Tournament">
                                <button type="button">View Details</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 1 -->
                <div class="col-md-4" role="region" aria-labelledby="event-1-heading">
                    <div class="event-card" aria-describedby="event-1-description">
                        <div class="event-status">
                            <span class="tag past" role="status" aria-live="polite">Completed</span>
                        </div>
                        <img src="../../public/images/events/basketball.png" alt="Basketball Tournament"
                            aria-labelledby="event-1-heading" />
                        <div class="event-content">
                            <h3 id="event-1-heading">Basketball Tournament</h3>
                            <p>
                                <i class="fa fa-location-dot" aria-hidden="true"></i> Mandalay
                                Stadium
                            </p>
                            <p>
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i> 25th
                                December 2024
                            </p>
                            <p><i class="fa fa-clock" aria-hidden="true"></i> 3:00 PM</p>
                            <p>
                                <i class="fa fa-child" aria-hidden="true"></i> Age Group:
                                16-25 years
                            </p>
                            <p id="event-1-description" class="event-summary">
                                The basketball tournament was a huge success with fierce
                                competition and amazing sportsmanship.
                            </p>
                            <a href="./eventdetails.html" class="details-btn"
                                aria-label="View details of Basketball Tournament">
                                <button type="button">View Details</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 1 -->
                <div class="col-md-4" role="region" aria-labelledby="event-1-heading">
                    <div class="event-card" aria-describedby="event-1-description">
                        <div class="event-status">
                            <span class="tag past" role="status" aria-live="polite">Completed</span>
                        </div>
                        <img src="../../public/images/events/basketball.png" alt="Basketball Tournament"
                            aria-labelledby="event-1-heading" />
                        <div class="event-content">
                            <h3 id="event-1-heading">Basketball Tournament</h3>
                            <p>
                                <i class="fa fa-location-dot" aria-hidden="true"></i> Mandalay
                                Stadium
                            </p>
                            <p>
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i> 25th
                                December 2024
                            </p>
                            <p><i class="fa fa-clock" aria-hidden="true"></i> 3:00 PM</p>
                            <p>
                                <i class="fa fa-child" aria-hidden="true"></i> Age Group:
                                16-25 years
                            </p>
                            <p id="event-1-description" class="event-summary">
                                The basketball tournament was a huge success with fierce
                                competition and amazing sportsmanship.
                            </p>
                            <a href="./eventdetails.html" class="details-btn"
                                aria-label="View details of Basketball Tournament">
                                <button type="button">View Details</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <section class="event-feedback-section">
        <div class="container">
            <h2>What People Say</h2>
            <p class="feedback-description">
                Discover the impact our past events have had on participants. Here's
                what some of them had to say.
            </p>
            <div class="feedback-grid">
                <!-- Feedback Item 1 -->
                <div class="feedback-item">
                    <div class="feedback-avatar">
                        <img src="../../public/images/clients/client1.png" alt="John Doe" />
                    </div>
                    <p>
                        "The basketball tournament was an amazing experience. I met great
                        people and had a lot of fun!"
                    </p>
                    <span>- John Doe</span>
                </div>

                <!-- Feedback Item 2 -->
                <div class="feedback-item">
                    <div class="feedback-avatar">
                        <img src="../../public/images/clients/client2.png" alt="Jane Smith" />
                    </div>
                    <p>
                        "A well-organized event that brought the community together.
                        Highly recommend participating in future events!"
                    </p>
                    <span>- Jane Smith</span>
                </div>

                <!-- Feedback Item 3  -->
                <div class="feedback-item">
                    <div class="feedback-avatar">
                        <img src="../../public/images/clients/client3.png" alt="Mark Jones" />
                    </div>
                    <p>
                        "I had an incredible time at the event. The organization was
                        seamless, and I can't wait for the next one!"
                    </p>
                    <span>- Mark Jones</span>
                </div>

                <!-- Feedback Item 4  -->
                <div class="feedback-item">
                    <div class="feedback-avatar">
                        <img src="../../public/images/clients/client4.png" alt="Emily Davis" />
                    </div>
                    <p>
                        "The event was a great way to challenge myself. Everyone was so
                        supportive, and I enjoyed every moment of it!"
                    </p>
                    <span>- Emily Davis</span>
                </div>
            </div>
        </div>
    </section>

    <!--footer start-->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <!-- Club Info -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="index.html" aria-label="Navigate to Home">AUS Sport Club</a>
                            </div>
                            <p>
                                Bringing the community together through sports and recreation.
                                Join us for events, news, and updates that keep our club
                                vibrant.
                            </p>
                            <div class="footer-contact">
                                <p aria-label="Contact Email">info@ausclub.com</p>
                                <p aria-label="Contact Number">+1 (800) 555-1234</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>Quick Links</h2>
                            <ul>
                                <li>
                                    <a href="index.php" aria-label="Home">Home</a>
                                </li>
                                <li>
                                    <a href="events.php" aria-label="View Upcoming Events">Events</a>
                                </li>
                                <li>
                                    <a href="pastevents.php" aria-label="View Past Events">Past Events</a>
                                </li>
                                <li>
                                    <a href="news.php" aria-label="View News and Announcements">News & Announcements</a>
                                </li>
                                <li>
                                    <a href="aboutus.php" aria-label="Learn About Us">About Us</a>
                                </li>
                                <li>
                                    <a href="contactus.php" aria-label="Contact Us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="col-md-5 col-sm-12">
                        <div class="single-footer-widget">
                            <h2>Newsletter</h2>
                            <p>
                                Stay updated with the latest news, events, and announcements.
                            </p>
                            <form class="newsletter-form" aria-label="Subscribe to Newsletter">
                                <input type="email" class="form-control" placeholder="Enter your email"
                                    aria-label="Enter your email address" />
                                <button type="submit" class="btn btn-subscribe" aria-label="Subscribe">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-sm-8">
                        <p>
                            &copy; 2024 AUS Sport Club. All rights reserved. Designed with
                            care by AUS Developers.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-social">
                            <a href="#" aria-label="Visit Facebook"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" aria-label="Visit Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="Visit LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" aria-label="Visit Twitter"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <script src="../../public/libs/jquery/jquery-3.7.1.min.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="../../public/libs/bootstrap-5/js/bootstrap.min.js"></script>

    <!--popper.min.js-->
    <script src="../../public/libs/bootstrap-5/js/popper.min.js"></script>

    <!--owl.carousel.js-->
    <script src="../../public/libs/owl-carousel/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="../js/custom.js"></script>

    <!-- header js -->
    <script src="../js/header.js"></script>

    <!-- footer js -->
    <script src="../js/footer.js"></script>
</body>

</html>
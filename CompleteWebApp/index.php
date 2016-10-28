
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/Responsive.css">
</head>
<body>
    <div class="body">
    <header>
        <img class="header-img" src="Image/nsbm_logo.jpg" alt="Logo of NSBM">
        <h1 class="logo-overwrite">NSBM</h1>
        <?php if( !empty($user) ): ?>

        <div class="logout">
        <br />Welcome <?= $user['email']; ?> 
        <br /><br />You are successfully logged in!
        <br /><br />
        <a href="logout.php">Logout?</a>
        </div>

    <?php else: ?>

    <?php endif; ?>
        <p class="header-text">South Asia Biggest University</p>  
    </header>
    
    <!-- Main Menu-->
    <ul class="navbar menu-shadow menu-colors">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li class="dropdown-hover">
            <a href="#">Faculties</a>
            <div class="dropdown-content dropdown-content-colors dropdown-content-shadow">
                <a href="computing.html">Computing</a>
                <a href="managment.html">Management</a>
                <a href="engineering.html">Engineering</a>
            </div>
        </li> 
        <li><a href="contact_us.html">Contact us</a></li>
        <li class="dropdown-hover"><a href="#">E-Learning</a>
            <div class="dropdown-content dropdown-content-colors dropdown-content-shadow">
                <a href="login.php">Login</a>
                <a href="register.php">Create Account</a>
            </div>
        </li>
    </ul>
    <!--Image Slider-->
    <div id="slider">
    <figure>
        <img src="Image/0.jpg" alt="">
        <img src="Image/1.jpg" alt="">
        <img src="Image/2.jpg" alt="">
        <img src="Image/3.jpg" alt="">
        <img src="Image/0.jpg" alt="">
    </figure>
    </div>
    <!--Faculties Infor -->
    <section>
        <a class="text-deco" href="managment.html">
        <div class="card-div">
        <img src="Image/School_of_Business.jpg" alt="School of Business" style="width:100%">
            <div class="text-center">
                <h3>School of Business of NSBM</h3>
                <p>School of Business of NSBM is the ideal institute for any undergraduate interested in pursuing a career in the Business field. The School nurtures students with a business mind and integrate them into fully fledged business leaders of the future. The drive behind achieving this goal is the passion for excellence and perfection that surrounds the School of Business in its methods of teaching, learning, research and networking with the business community.
                </p>
            </div>
        </div>
        </a>

        <a class="text-deco" href="computing.html">
        <div class="card-div">
        <img src="Image/school_of_computing.jpg" alt="School of computing" style="width:100%">
            <div class="text-center">
                <h3>School of Computing</h3>
                <p>School of Computing of NSBM has the perfect background to build up technological expertise and innovation, which provides world class training and education in Computing, Information Technology, Management Information Systems and Design at undergraduate and postgraduate levels. The School of Computing integrate innovation, entrepreneurship with a strong ethnical foundation to lead student to world-class experts in technology.
                </p>
            </div>
        </div>
        </a>


        <a class="text-deco" href="engineering.html">
        <div class="card-div">
        <img src="Image/School_of_Engineering.jpg" alt="School of Engineering" style="width:100%">
            <div class="text-center">
                <h3>School of Engineering</h3>
                <p>School of Engineering will be the newest addition to the faculties at NSBM which is planned to launch in 2015 in Green University Premises. The School of Engineering hopes to acquire, promote, develop and disseminate knowledge of engineering sciences in order to improve the quality of life by equipping future generations with the right attitudes and skills to grow into competent individuals who could be considered an asset to the nation.
                </p>
            </div>
        </div>
        </a>
    </section>
    <div id="footer">
                <div class="footer">
                <ul class="footer-ul addres">
                    <li><h2 class="footer-heading">Contact Us</h2></li>
                    <li>309, High Level Road</li>
                    <li>Colombo 05</li>
                    <li>00500</li>
                    <li>Sri Lanka</li>
                    <li>Tel: <a class="footer-link" href="tel:+94115445000">+94 (11) 544 5000</a></li>
                    <li>Fax: <a class="footer-link" href="tel:+94115445009">+94 (11) 544 5009</a></li>
                    <li>Email: <a class="footer-link" href="mailto:info@nsbm.lk">info@nsbm.lk</a></li>
                </ul>
                
                 <ul class="footer-ul">
                    <li><h2 class="footer-heading">Faculties</h2></li>
                    <li><a href="computing.html">Computing</a></li>
                    <li><a href="managment.html">Management</a></li>
                    <li><a href="engineering.html">Engineering</a></li>
                </ul>
                
                <ul class="footer-ul">
                    <li><h2 class="footer-heading">Quick Links</h2></li>
                    <li><a class="" href="index.html"><img class="link-icon" src="Image/Link.png" alt="link icon" >Home</a></li>
                    <li><a class="footer-link" href="about%20.html"><img class="link-icon" src="Image/Link.png" alt="link icon" >About</a></li>
                    <li><a class="footer-link" href="programs.html"><img class="link-icon" src="Image/Link.png" alt="link icon" >Faculties</a></li>
                    <li><a class="footer-link" href="news_&_event.html"><img class="link-icon" src="Image/Link.png" alt="link icon" >News &amp; Event</a></li>
                    <li><a class="footer-link" href=contact_us.html><img class="link-icon" src="Image/Link.png" alt="link icon" >Contact us</a></li>
                </ul>
                
                <ul class="footer-ul">
                    <li><h2 class="footer-heading">Find Us On</h2></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">LinkedIn</a></li>
                    <li><a href="">Facebook</a></li>
                </ul>
                    <p class="copyright">Copyright © 2016 National School of Business Management. All Rights Reserved.</p>
                </div>
    
    </div>
    <script src=""></script>
</body>
</html>
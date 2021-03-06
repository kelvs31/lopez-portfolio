<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
</head>
<body>

	<!-- Navbar Section -->
	<nav class="navbar">
        <div class="navbar__container">
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> 
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">HOME</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">ABOUT</a>
                </li>
                <li class="navbar__item">
                    <a href="#expirience" class="navbar__links" id="expirience-page">SEMINARS</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section-->
    <div class="hero" id="home">
        <div class="hero__container">
            <div class="text" style="font-size: 30px; margin-top: -5%; color: #ffcc00">MY PORTFOLIO</div>
            <br>
           
            <br>
            <div class="btn">
                <a href="#about"><span>MY DETAILS</span></a>
            </div>
        </div>
    </div>

    <!-- About SEction-->
    <div class="main" id="about">
        <div class="main__container">
            
            <img src="profile.jpg" style="border-radius: 50%; height: 300px">
            
            <div class="main__content">
                <div class="text" style="color: white;">About Me</div>
                <br>
                <h3 style="font-size: 35px; color: white;">Eugenio Arne D. Lopez</h3>
                <br>
                <h4> 
                &nbsp;&nbsp;&nbsp;&nbsp; I am a 3rd year student of Polytechnic University of the Philippines, Institute of Technology. He is currently taking Diploma in Information Communication Technology. He is a student who also working as a Service Crew in Mcdonalds and as a delivery Grab Rider. He is a hard working student who performs a great quality of service to help his family.  
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;This webpage was made to demonstrate my abilities and what I've learn. In addition, I've included all of the webinars that I've attended on this page.
                </h4>
                <br>
                    
                
            </div>
        </div>
    </div>


    <!-- Features Section-->
    <div class="main" id="expirience">
        <div class="text" style="text-align: center; color: white;">SEMINARS</div><br><br>
            
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p1.jpg" target="popup" onclick="window.open('img/p1.jpg','popup','width=600,height=600'); return false;">???Website Advice Mobile Commerce Uncovered???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p2.jpg" target="popup" onclick="window.open('img/p2.jpg','popup','width=600,height=600'); return false;">???JPCS Introducion to Arduino Boards???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p3.jpg" target="popup" onclick="window.open('img/p3.jpg','popup','width=600,height=600'); return false;">???Ground Gurus Introduction to Algorithms, Data Structures & Design Patterns for Aspiring Developers???</a>
            </div> <br>
            <div style="text-align: center;">
               <a style="color: white; font-size: 20px;" href="img/p4.jpg" target="popup" onclick="window.open('img/p4.jpg','popup','width=600,height=600'); return false;">???Filta JavaScript HTML DOM Create Webpages using JavaScript???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p5.jpg" target="popup" onclick="window.open('img/p5.jpg','popup','width=600,height=600'); return false;">???Filta How to Build a Portfolio Website in Webflow for Design Students???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p6.jpg" target="popup" onclick="window.open('img/p6.jpg','popup','width=600,height=600'); return false;">???Filta How I Became a Front End Developers at 15 in the middle of a Pandemic???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p7.jpg" target="popup" onclick="window.open('img/p7.jpg','popup','width=600,height=600'); return false;">???Filta Dealing with Work Stress during Pandemic???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p8.jpg" target="popup" onclick="window.open('img/p8.jpg','popup','width=600,height=600'); return false;">???Filipino Science Hub Data Science Topics for High School and College Research Projects???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p9.jpg" target="popup" onclick="window.open('img/p9.jpg','popup','width=600,height=600'); return false;">???DPS Intro to Data Analysis Using MS Excel???</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/p10.jpg" target="popup" onclick="window.open('img/p10.jpg','popup','width=600,height=600'); return false;">???DIGIPHIL Google Workspace for Education Fundamentals???</a>
            
        </div>
    </div>

 
    <script src="app.js"></script>
</body>
</html>

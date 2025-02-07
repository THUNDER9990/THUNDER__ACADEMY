<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Gallery.css">
</head>
<body>

    <header>

    <div class="navbar">
                
                <a class="navbar-content"href="./index.php">Home</a>
    
                <a class="navbar-content" href="./About-Us.php">About-Us</a>
    
                <a class="navbar-content" href="./AdmissionPage.php">Admission</a>
    
                <a class="navbar-content" href="./Contact-Us.php">Contact-Us</a>
                
                <a class="navbar-content" href="./Gallery.php">Gallery</a>
           
            </div>
        <main style="margin-top: 10px;">
        
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
               
                <img src="./images/Thunder__Academy__1.png" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                   
                    <img src="./images/Thunder__Academy__2.jpg" style="width:100%">
                   
                </div>
            
                <div class="mySlides fade">
                    
                    <img src="./images/Thunder__Academy__3.jpg" style="width:100%">
                    
                </div>
                
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>

        </header>
        
    </main>
    <footer id="gallery-footer">
        <p>&copy; 2023 Your Website</p>
        <nav>
            <a href="./index.php">Home</a>

            <a  href="./About-Us.php">About-Us</a>

            <a  href="./Contact-Us.php">Contact-Us</a>
            
            <a  href="./Gallery.php">Gallery</a>
        </nav>
       <p id="rights"> © 2022 - 2023 ThunderAcademy. All rights reserved</p>
    </footer>

    <script src="index.js"></script>
    
</body>
</html>
<?php
$page = (isset($_GET['page']) && $_GET['page'] !='') ? $_GET ['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> PHP Demo</title>
        <link rel = "stylesheet" href= "css/exam.css">
    </head>
    <body>
            <a href="index.php"> Home </a>
            <a href="index.php?page=about"> About Me </a>
            <a href="index.php?page=sample"> Sample Works </a>
        <?php
        switch ($page){
                case "about";
                    include "about.php";
                break;
                case "sample";
                    include "sample.php";
                break;
                default;
                    include "default.php";
                break;
        }
        ?>
        <div id= "container">
            <div id= "main">
                <div class= "first">
                    <img src="me.jpg">
                </div>
                <div class="second">
                    <h1>Hello I am Jahziel Banne Libo-on!</h1>
                    <h3> A College Student from University of St. La Salle </h3>
                </div>
            </div>
            <div id= "about">
                <h2 style="margin-left:20px;"> Introduction About Myself</h2>
                <img src="1x1%20.jpg">
                <div class="aboutme">
                    <h3>Birthday: October 03, 2002</h3>
                    <h3>Contact Number: 09454601382/ 09207959968 </h3>
                    <h3> Birth Place: Bacolod City, Negros Occidental</h3>
                </div>
                <div class="aboutmes">
                    <h3> Age: 19 </h3>
                    <h3> Course and Year: BSIT 1-B </h3>
                    <h3> Email Address: jahzielbanne100302@gmail.com </h3>
                </div>
            </div>
            <div id="samples">
                    <div class="sample1">
                    <h2 style="margin-left:2%;"> Sample Works</h2>
                    <img id="img5" src="Screenshot%20(99).png"><br><br>
                    <a href="https://jahzielbanne.herokuapp.com/LT2/homepage.html" target= "blank">Learning Task 2</a>
                    <a href="https://jahzielbanne.herokuapp.com/LT3/index.html" target= "blank">Learning Task 3</a>
                    <a href="https://jahzielbanne.herokuapp.com/CLE1MT/index.html" target= "blank">Midterm Exams</a>
                    <a href="https://jahzielbanne.herokuapp.com/LT4/index.html" target= "blank"> Learning Task 4</a>
                    </div>
                    <div class="sample2">
                         <script>

                     function setnewimage() {
                     document.getElementById("img5").src = "Screenshot%20(99).png";
                     }
                     function setnewimage1() {
                     document.getElementById("img5").src = "Screenshot%20(98).png";
                     }
                     function setnewimage2() {
                     document.getElementById("img5").src = "Screenshot%20(96).png";
                     }
                     function setnewimage3() {
                     document.getElementById("img5").src = "Screenshot%20(97).png";
                     }
                     </script>
                     <br><br>
                     <img id="img1" src="Screenshot%20(99).png" onmouseover="setnewimage()"
                    width="300" onmouseout="setoldimage()">
                     <img id="img2" src="Screenshot%20(98).png" onmouseover="setnewimage1()"
                    width="300" height="200" onmouseout="setoldimage()">
                     <img id="img3" src="Screenshot%20(96).png" onmouseover="setnewimage2()"
                    width="300" height="200" onmouseout="setoldimage()">
                     <img id="img4" src="Screenshot%20(97).png" onmouseover="setnewimage3()"
                    width="300" height="200" onmouseout="setoldimage()">
                    <br>    
                    </div>    
                </div>
                <div id="footer">
                    <h1>Jahziel Banne Libo-on. 2022</h1>
                    <h3>BSIT 1-B Student from University of St. La Salle</h3>
                </div>
            </div>    
    </body>
</html>
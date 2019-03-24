<!DOCTYPE html>
<html>
 <head>
  <title>Web Page Header #1</title>
  <meta name="robots" content="noindex,nofollow"/>
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="stylesheet" href="css/finalproject.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <!-- <script src="js/script.js"></script> -->
</head>
    
 <body>
     <div class="banner">
         <h1><a class="logo" href="index.html">Kelani</a></h1>
     </div>
     
     <div class="wrapper">
       <div class="hero-image" style="background-image: url(images/inspirationhero.jpg)">
         <div class="nav">
            <ul class="mobilenav">
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="inspiration.php" class="active">Inspiration</a></li>
                <li><a href="resources.php" >Resources</a></li>
                <li><a href="contact.php">Contact</a></li> 
            </ul>
         </div>
      </div>
 <section>
       <h2 class="pageID">Where Do I Find My Inspiration?</h2>
     
<p>Organic actually snackwave, skateboard heirloom messenger bag 3 wolf moon crucifix gentrify whatever bushwick. Tattooed unicorn etsy sustainable master cleanse. Kinfolk hammock asymmetrical vegan quinoa typewriter celiac swag actually ramps live-edge scenestermlkshk. Beard pour-over meh, sustainable roof party actually chillwave butcher distillery viral literally.</p>
     
<div class="w3-content" style="max-width:1200px">
    <img class="mySlides" src="images/inspiration1.jpg" style="width:100%">
    <img class="mySlides" src="images/inspiration2.jpg" style="width:100%">
    <img class="mySlides" src="images/inspiration3.jpg" style="width:100%">
    <img class="mySlides" src="images/inspiration4.jpg" style="width:100%">
    <img class="mySlides" src="images/inspiration5.jpg" style="width:100%">
    <img class="mySlides" src="images/inspiration6.jpg" style="width:100%">
    
  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration1.jpg" style="width:100%" onclick="currentDiv(1)">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration2.jpg" style="width:100%" onclick="currentDiv(2)">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration3.jpg" style="width:100%" onclick="currentDiv(3)">
    </div>
    <div class="w3-col s4">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration4.jpg" style="width:100%" onclick="currentDiv(4)">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration5.jpg" style="width:100%" onclick="currentDiv(5)">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration6.jpg" style="width:100%" onclick="currentDiv(6)">
    </div>
      <div class="w3-col s4">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration7.jpg" style="width:100%" onclick="currentDiv(7)">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration8.jpg" style="width:100%" onclick="currentDiv(8)">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration9.jpg" style="width:100%" onclick="currentDiv(9)">
    </div>
    <div class="w3-col s4">
       <img class="demo w3-opacity w3-hover-opacity-off" src="images/inspiration10.jpg" style="width:100%" onclick="currentDiv(10)">
    </div>
</div>
     
<script>

  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}  
    
</script> 
     
</section>

    <footer>
        <p><small>&copy; 2019 by <a href="contact.php" target="_blank">Riley Patterson</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>    
  </div>
 </body>
</html>
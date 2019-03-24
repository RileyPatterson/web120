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
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
     
 <body>

     <div class="banner">
        <h1><a class="logo" href="index.html">Kelani</a></h1>
     </div>
     
     <div class="wrapper">
        <div class="hero-image" style="background-image: url(images/contacthero.jpg)">
         <div class="nav">
            <ul class="mobilenav">
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="inspiration.php">Inspiration</a></li>
                <li><a href="resources.php" >Resources</a></li>
                <li><a href="contact.php" class="active ">Contact</a></li> 
            </ul>
         </div>
      </div>

 <section style="">
       <h2 class="pageID">Contact Client!</h2>

     <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other 1!       
         *
         *///include 'includes/multiple.php';#demonstrates multiple form elements
         include 'includes/simple.php'; #demonstrates a simple contact form

	   ?>
     
 </section>


      
    <footer>
        <p><small>&copy; 2019 by <a href="contact.php" target="_blank">Riley Patterson</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>    
  </div>
 </body>
</html>
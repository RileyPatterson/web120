<!DOCTYPE html>
<html>
 <head>
  <title> Riley Patterson's WEB120 Portal </title>
  <meta name="viewport" content="width=device-width"/>
  <meta name="robots" content="noindex,nofollow"/>
  <meta charset="utf-8"/>
     <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
 </head>
    
 <body>
                    <!-- START WRAPPER -->
  <div class="wrapper">
   <header>
       <h1><a href="index.php"><i class="logo fa fa-envelope"></i>Riley Patterson's WEB120 Portal</a></h1> 
     <nav>
      <ul class="topnav" id="myTopnav">
        <li><a href="index.php">Welcome!</a></li>
        <li><a href="big/index.php">BIG</a></li>
        <li><a href="aia.html">AIA</a></li>
        <li><a href="https://docs.google.com/document/d/1RXWs35l_ugAUmEdJKIWXMISOxi6nk8ffgymMP-XOajQ/edit?usp=sharing">Flowchart</a></li>
        <li><a href="fp/index.php">Final Project</a></li>
        <li><a class="selected" href="contactme.php">Contact Riley</a></li>
        <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul>
     </nav>
   </header>
                    <!-- START LEFT COL -->
   <section>
       
       <h2 class="pageID">Get in touch!</h2>
       
            	<!-- START HTML CONTACT FORM -->
	<form action="index.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Say Hi!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LcoBY0UAAAAAGn_f1-HGR1C64of3MKKY_J1rixY"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	                <!-- END HTML FORM -->
                    <!-- END LEFT COL -->
   
    <script 
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
	        <p class="clear-recaptcha"></p>
    </section>         
     
                    <!-- START FOOTER --> 
    <footer>
        <p><small>&copy; 2019 by <a href="contactme.php" target="_blank">Riley Patterson</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML5</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer> 
                    <!-- END FOOTER -->  
  
     <script>
         /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
         function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        
         /* reCaptcha function */
        grecaptcha.ready(function() {
        grecaptcha.execute('6LeUT4kUAAAAAF_Mw3YbkVb6GZKRYugT2SUnJj58', {action: 'action_name'})
        .then(function(token) {
// Verify the token on the server.
        });
        });        
     </script>
     </div>                     <!-- END WRAPPER -->           
 </body>
</html>
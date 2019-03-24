<?php
//config.php
// echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');
//reCAPTCHA credentials here
$title = THIS_PAGE;
//no index while building a client site in our space
$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle. Focus on JavaScript, CSS & HTML.";
$meta_keywords = "web design, website design, website builder, web developer, Seattle web developer, programmer, website designer, responsive web design, Seattle web design, web development, web page design, web development student";
switch(THIS_PAGE){
    case 'index.php':
        $title = 'Riley Patterson | Web 120';
        $logo = "fa-home";
        $heading2 = 'Welcome';
        $heading3 = 'This is my site';
        $meta_description = "I'm Riley Patterson, I am a " . meta_description;
    break;
    
    case 'aia.php':
        $title = 'Audience, Issues and Approach Chart';
        $logo = 'fa-table';
        $meta_description = "Please take a look at the newest project Riley is developing, I am a " . meta_description;
    break;   
        
    case 'contactme.php':
    $title = 'Riley\'s Contact Page!';
    $logo = "fa-paper-plane-o";
    $robots = "noindex,follow";
    $meta_description = "Please contact Riley, I'm a " . 
    $meta_description;
    $meta_keywords = "how to build a website, build a website, design website, website layout" .
    $meta_keywords;
break;
}
//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['contactme.php'] = "Contact Riley";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
 $nav1['https://docs.google.com/document/d/1RXWs35l_ugAUmEdJKIWXMISOxi6nk8ffgymMP-XOajQ/edit?usp=sharing'] = "Flowchart";
    $nav1['fp/template.php'] = "FP Template";
    $nav1['fp/index.php'] = "Final Project";
       
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';
    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}
?>
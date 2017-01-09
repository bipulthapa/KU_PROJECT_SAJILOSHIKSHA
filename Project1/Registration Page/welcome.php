<?php 
	session_start();
	$username = $_SESSION['username'];
    if(!$username)
    {
        die('Sorry Invalid Excess');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>www.Sajiloshiksha.com</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/style.css" type="text/css">
    </head>
    
  <body>
        <div id="wrapper">
            <div id="header">
                <img src="logo.png" style="height: 100px;">
                Sajilo Shiksha
                
                <span id="searchbox">
                    <input type="search" placeholder="Search ..." onkeydown="if(event.keyCode == 13) alert('You Searched ' + this.value);">
                </span>
                
                <div id="style01" title="logout" onclick="location.href='logout.php'">LO.</div>
            </div>
            
            <div id="side-section">
                Notification:
                <br>
                
            </div>
            
            <div id="main-section">
                <h2>Main Section</h2>
        </div>
            <div id="aside-section">
                Aside News!
            </div>
      </div>        
    </body>
</html>
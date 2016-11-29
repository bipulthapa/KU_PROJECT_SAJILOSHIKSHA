<?php
  session_start();  // starting the session

  if( isset($_POST["submit"]) ) {
    $username = stripslashes(htmlspecialchars($_POST["username"]));
    $password = stripslashes(htmlspecialchars($_POST["password"]));

    if($username && $password) {
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;

      header("Location: Index.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>www.SajiloShiksha.com</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #login_form {
        width: 70%;
        margin: 10px auto;
        border: 1px solid #e1e1e1;
        padding: 10px;
        text-align: center;
        font-size: 20px;
      }

      #login_form input {
        outline: none;
        border: 1px solid #ddd;
        padding: 3px;
        font-size: 21px;
        margin: 5px;
        border-radius: 3px;
      }

      #login_form input:focus {
        box-shadow: 0px 0.2px 5px 1px #ddd;
      }

      #login_form input[type="submit"] {
        outline: none;
        padding: 5px;
        font-size: 21px;
        margin: 5px;
        border: 0px;
        background-color: #3399ff;
        color: #fff;
        float: right;
        box-shadow: 0px 2px 3px #666;
      }

      #login_form input[type="submit"]:active {
        box-shadow: 0px 2px 3px #666 inset;
      }
    </style>
    <script src="scripts/script.js"></script>
  </head>

  <body onload="document.getElementById('search_bar').style.width='25%';document.getElementById('search_bar').style.height='30px';document.getElementById('search_bar').style.opacity='1';">
    <div id="wrapper">

      <!-- The Main header of the page goes here -->
      <div id="header">
        <img src="logo.png" style="width: 55px;">
        <span style="color: #fff;"><strong>S</strong>ajilo</span><span style="color: #c7c6ce;"><strong>S</strong>hiksha</span>
        <input id="search_bar" type="text" placeholder="Search ..." onkeydown="if(event.keyCode == 13) alert(this.value)" autocomplete="off" disabled>
      </div>

      <!-- Main Navigation bar of the page goes here -->
      <div id="navigation-menu">
        <ul>
          <li><a href="javascript:void(0);" class="active"><i class="fa fa-home"></i>&nbsp;Login</a></li>
        </ul>
      </div>

      <!-- Main body section goes here -->
      <div id="main-section">

        <!-- This section contains the actual content of the page -->
        <div id="main-section-article-container">


          <!-- Articles goes here -->

          <div id="main-section-article" style="height: 300px;">
            <header>
              Login Below
            </header>
            <div id="content-separator"></div>

            <div id="login_form">
              <form action="login.php" method="post">
                Username: <input type="text" placeholder="Your username" name="username" autocomplete="off">
                <br>
                Password:&nbsp; <input type="password" placeholder="Your password" name="password">
                <br>
                <input type="submit" value="Log In" name="submit">
              </form>
              <div style="clear: both;"></div>
            </div>
          </div>

        </div>

        <!-- This section covers the side news of the page -->
        <div id="main-section-news-container">

          <!-- News one -->
          <div class="side-news" id="id01">
            <p>Sign Up</p>
            <div id="content-separator"></div>
            <div id="news-content">You can sign up for free!</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

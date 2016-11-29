<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>www.SajiloShiksha.com</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/script.js"></script>
  </head>

  <body onload="document.getElementById('search_bar').style.width='25%';document.getElementById('search_bar').style.height='30px';document.getElementById('search_bar').style.opacity='1';">
    <div id="wrapper">

      <!-- The Main header of the page goes here -->
      <div id="header">
        <img src="logo.png" style="width: 55px;">
        <span style="color: #fff;"><strong>S</strong>ajilo</span><span style="color: #c7c6ce;"><strong>S</strong>hiksha</span>
        <input id="search_bar" type="text" placeholder="Search ..." onkeydown="if(event.keyCode == 13) alert(this.value)" autocomplete="off">
      </div>

      <!-- Main Navigation bar of the page goes here -->
      <div id="navigation-menu">
        <ul>
          <li><a href="Index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
          <li><a href="javascript:void(0);" class="active">Profile</a></li>
          <li><a href="javascript:void(0);">Model&nbsp;Test</a></li>
          <li><a href="javascript:void(0);">Discussion&nbsp;Forum</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>

      <!-- Main body section goes here -->
      <div id="main-section">

        <!-- This section contains the actual content of the page -->
        <div id="main-section-article-container">


          <!-- Articles goes here -->

          <div id="main-section-article">
            <header>
              Profile page article
            </header>
            <div id="content-separator"></div>
            <p>
              You are currently in profile page...
            </p>
          </div>

          <div id="main-section-article" style="height: 300px;">
            <header>
              Second Article of page
            </header>
            <div id="content-separator"></div>
            <p>
              This defines the article of the page...
            </p>
          </div>

        </div>

        <!-- This section covers the side news of the page -->
        <div id="main-section-news-container">

          <!-- News one -->
          <div class="side-news" id="id01">
            <p>Latest News</p>
            <div id="content-separator"></div>
            <div id="news-content">Here new tutorials pdf are available here.</div>
          </div>

          <!-- News two -->
          <div class="side-news" id="id02">
            <p>Updates</p>
            <div id="content-separator"></div>
            <div id="news-content">New Model Test available.</div>
            <div id="side-news-close-btn"><a href="javascript:void(0);">&times;</a></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

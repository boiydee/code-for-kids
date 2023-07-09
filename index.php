<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="stylesheet.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <title>Welcome Page</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #D61355;
      font-family: "handwriting", cursive;
      display: flex;
      flex-direction: column;
    }


    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
    }


    nav ul li a {
      color: #FFF;
      text-decoration: none;
      padding: 5px 10px;
    }

    .menu-icon {
      display: none;
      cursor: pointer;
    }

    .menu-icon span {
      display: block;
      width: 25px;
      height: 3px;
      background-color: #FFF;
      margin-bottom: 5px;
    }

    footer {
      background-color: #4388CC;
      color: #FFF;
      text-align: center;
      margin-top: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    footer div {
      flex: 1;
      text-align: left;
    }

    footer div:nth-child(2) {
      text-align: center;
    }

    footer div:nth-child(3) {
      text-align: right;
    }

    .content {
      max-width: 800px;
      margin: 0 auto;
    }

    .content h1 {
      color: #4388CC;
      padding: 20px;
    }

    .content p {
      margin-bottom: 20px;
    }

    .content:after {
      content: "";
      display: table;
      clear: both;
    }

    .content img {
      float: left;
      margin-right: 10px;
      max-width: 300px;
    }

    .content-text {
      text-align: left;
    }

    @media (min-width: 769px) {
      .menu {
        display: flex;
        align-items: center;
      }

      .menu li.right {
        margin-left: auto;
      }

      .menu li:not(.right) {
        margin-right: 10px;
      }
    }
  </style>
  <script>
    function toggleMenu() {
      var menu = document.querySelector('.menu');
      menu.classList.toggle('active');
    }
  </script>
</head>
<body>
<nav class = "navbar">
  <!-- Icon for mobile navigation -->
  <a href="javascript:void(0);" id="mobileNavIcon">
    <i class="fa-solid fa-bars"></i>
  </a>
  <!-- Desktop navigation bar-->
  <nav class="desktopNavigation">
    <ul class ="navItems">
      <li><a href="index.html">Home</a></li>
      <li>
        <div class="dropDown">
          <button class="dropdownButton">Levels</button>
          <div class="levels-content-dropdown">
            <a href="beginner-intro.php">Beginner</a>
            <a href="intermediate-intro.php">Intermediate</a>
            <a href="hard-intro.php">Hard</a>
          </div>
        </div>
      </li>
      <li><a href="progressPage.php">Progress</a></li>
      <li><a href="admin.php">Admin</a></li>
    </ul>
  </nav>
  <?php if (isset($user)): ?>
  <li class="right">Welcome, <?php echo $user; ?></li>
  <?php else: ?>
  <li class="right"><a href="login.html">LogIn</a></li>
  <?php endif; ?>
</nav>
<!-- Mobile navigation bar -->
<nav id = "mobileNavigation">
  <ul class ="navItems">
    <li><a href="index.php">Home</a></li>
    <li>
      <div class="dropDown">
        <button class="dropdownButton">Levels</button>
        <div class="levels-content-dropdown">
          <a href="beginner-intro.php">Beginner</a>
          <a href="intermediate-intro.php">Intermediate</a>
          <a href="hard-intro.php">Hard</a>
        </div>
      </div>
    </li>
    <li><a href="progressPage.php">Progress</a></li>
    <li><a href="admin.php">Admin</a></li>
    <li><a href="login.html">Login</a></li>
  </ul>
</nav>

  <h1 style="color: #4388CC; padding: 20px;">Code for Kids!</h1>

  <div class="content">
    <img src="kid_coding.jpg" alt="Code for Kids">
    <div class="content-text">
      <h1>Welcome!</h1>
      <p>Welcome to our website, a place where kids can learn to code in a fun and interactive way!</p>
    </div>
  </div>

  <footer id="footer">
    <p >Contact us: <br>
      Email Address: <a href="mailto:Code.For.Kids@strath.uk">Code.For.Kids@strath.uk</a><br>
      Phone number: 01236 879010 </p>
    <p><a style="color: white" href="news.html">News</a></p>
    <p id="feedback-link">Give us <a href="feedback.html">feedback here!</a></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>

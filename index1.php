<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Royal Bites- Restaurant</title>
    <meta name="description" content="ROSA is an enchanting Parallax Restaurant WordPress Theme that allows you to tell your story in an enjoyable way, perfect for restaurants or coffee shops.">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script>
    $(document).ready(function() {
      $('a').click(function(e) {
        e.preventDefault(); // Prevent the default behavior of the anchor tag
        var href = $(this).attr('href'); // Get the href attribute of the clicked link
        
        // Check if the clicked link is for Reservation section
        if (href === '#') {
          openReservation(); // Call the openReservation function directly
        } else {
          $('body').fadeOut(300, function() { // Fade out the body content
            // Apply animation property after fading out
            $('body').css({
              'animation': 'your-animation 0.6s ease-out', // Example animation property
              'animation-fill-mode': 'forwards' // Keep the final state of the animation
            });
            
            // Redirect to the new page after animation
            setTimeout(function() {
              window.location.href = href;
            }, 300); // Wait for the animation duration
          });
        }
      });
    });
          
  </script> -->
</head>
<body class="stop-scroll">

  <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--End loader-->

  <!--Start Dots-->
  <div class="dots">
      <div class="active one" data-x="header"></div>
      <div class="  two" data-x=".recipes"></div>
      <div class=" three" data-x=".fixed-image"></div>
  </div>
  <!--End Dots-->

 <!--Start Header-->
  <header>
      <nav>
           <div class="logo">
              <!-- <a href="index.html"><img style="height: 140px; width: 60px;" src="https://pbs.twimg.com/profile_images/1478837915778261001/K0lHpct9_400x400.jpg" alt="Royal bites Logo"></a> -->
          </div> 
          <div class="toggle">
              <span class="first"></span>
              <span class="middle"></span>
              <span class="last"></span>
          </div>
          <div class="navigation-bar">
              <ul>
                  <li class="active"><a href="index1.php">Home<span class="underline"></span></a></li>
                  <li><a href="#" onclick="openReservation()">Reservations<span class="underline"></span></a></li>
                  <li><a href="Menu.php">Menu<span class="underline"></span></a></li>
                  <li><a href="About Us.php">About<span class="underline"></span></a></li>
                  <li><a href="gallery.php">Gallery<span class="underline"></span></a></li>
                  <li><a href="Contact.php">Contact<span class="underline"></span></a></li>
              </ul>
          </div>
      </nav>
      <div class="MLA">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve form data
      $date = $_POST["date"];
      $time = $_POST["time"];
      $guests = $_POST["guests"];

    // Perform any validation or sanitization of data here

    // Example: Insert data into a table
      $sql = "INSERT INTO `booking` (`date`, `time`, `guests`) VALUES ('$date', '$time', '$guests')";

      if ($conn->query($sql) === TRUE) {
          echo "Reservation successful!";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      }
      $conn->close();

      ?>
      </div>
      <div id="reservationModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeReservation()">&times;</span>
              <h1 style="font-size: 60px;letter-spacing: 2px;"><center>RESERVATIONS</center></h1><br>
            <!-- Your reservation form or booking widget can go here -->
            <!-- Example form -->
              <form id="KR" method="post" action="index1.php">
                  <label for="date">Date:</label>
                  <input type="date" id="date" name="date"><br><br>
                  <label for="time" >Time:</label>
                  <input type="time" id="time" name="time"><br><br>
                  <label for="guests">Number of Guests:</label>
                  <input type="number" id="guests" name="guests"><br><br>
                  <button type="submit">BOOK A TABLE</button>
              </form>
          </div>
      </div>
      <div class="container" id="loginContainer">
        <h4>Login</h4>
        <form action="#" method="post" id="loginForm" >  Email
          <input type="text" name="username" placeholder="" required>  Password
          <div class="password-container">
            <input type="password" name="password" id="passwordInput" placeholder="" required>
            <i class="fas fa-eye" id="togglePassword"></i> <!-- Eye icon -->
          </div>
          <input type="submit" value="Sign in">
        </form>
        <div class="message"></div>
        <div class="forgot-password">
          <a href="#">Forgot Password?</a> <!-- Forgot Password option -->
        </div>
        <div class="cont" style="color: #fff;"> or continue with</div>
        <div class="icons">
          <ul>
              <li><a id="gg" href="#"><img id="k1" src="google.icon.png" alt=""></a></li>
              <li><a id="tt" href="#"><img id="k2" src="twitter.png" alt=""></a></li>
              <li><a id="ff" href="#"><img id="k3" src="facebook.icon.png" alt=""></a></li>
          </ul>
        </div>
        <div id="other">Don't have an account yet? <a href="#" id="toggleRegistration">Register for free</a></div>
        <i class="fas fa-times" id="closebtn"></i>
      </div>
      
      <div class="container" id="registerContainer">
      <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["confirm_password"];

       $passwordHash = password_hash($password, PASSWORD_DEFAULT);

       $errors = array();

       if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
          array_push($errors, "All fields are required");
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($errors, "Email is not valid");
      }
      if (strlen($password) < 8) {
          array_push($errors, "Password must be at least 8 characters long");
      }
      if ($password !== $passwordRepeat) {
          array_push($errors, "Passwords do not match");
      }

      if (count($errors) > 0) {
          foreach ($errors as $error) {
              echo "<div class='alert alert-danger'>$error</div>";
         }
      } else {
          require_once "database.php";
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          if ($rowCount > 0) {
              array_push($errors, "Email already exists!");
              foreach ($errors as $error) {
                  echo "<div class='alert alert-danger'>$error</div>";
            }
           } else {
               $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
               $stmt = mysqli_stmt_init($conn);
               $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
              if ($prepareStmt) {
                  mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                  mysqli_stmt_execute($stmt);
                  echo "<div class='alert alert-success'>You are registered successfully.</div>";
               } else {
                  die("Something went wrong");
                }
            }
          }
         }
        ?>
        <h4>Register</h4>
        <form action="#" method="post" id="registerForm" style="color: #fff;">
          <!-- Your registration form fields here -->
          <input type="text" name="fullname" placeholder="Full Name" required>
          <input type="text" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <i class="fas fa-eye" id="togglePassword1"></i>
          <input type="password" name="confirm_password" placeholder="Confirm Password" required>
          <i class="fas fa-eye" id="togglePassword2"></i>
          <input type="submit" value="Register">
        </form>
        <!-- Additional registration form elements can be added here -->
        <div id="other1">Already have an account? <a style="color: #f1f1f1;" href="#" id="toggleLogin">Login</a></div>
        <i class="fas fa-times" id="closebtn1"></i>
      </div>
      <div class="text">
          <h2>Welcome</h2><br>
          <h1>Royal Bites</h1>
          <div class="arrow">
              <span class="left"></span>
              <i class="fas fa-asterisk"></i>
              <span class="right"></span>
          </div>
          <span>"Ready To Be Opened"</span><br>
          <span>"Login for updates!"</span>
          <div class="button"><button id="loginBtn" onclick=window.location.href="http://localhost/login-register/login.php">Login</button></div>
      </div>
      <svg class="svg-down" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <div class="arrow-down">
      </div>
  </header>

  <!--End Header-->

  <!--start About Us-->
  <div class="about-us">
      <div class="text">
          <h2>Discover</h2>
          <h3>Our Story</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Royal Bites is a restaurant, bar and coffee roastery located on a busy corner site in Farringdon’s Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling Mumbai intersection.</p>
          <div><a class="a-CTA" href="About Us.html">About Us</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988527/vertical-photo-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988532/vertical-photo-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--start Recipes-->
  <div class="recipes">
      <div class="image"></div>
      <div class="text">
          <h2>Tasteful</h2>
          <h3>Recipes</h3>
      </div>
  </div>
  <!--End Recipes-->

  <!--start Menu-->
  <div class="menu">
      <div class="box-model">
          <i class="fas fa-times fa-2x close"></i>
          <div class="arrow">
              <div class="arrow arrow-right"></div>
              <div class="arrow arrow-left"></div>
          </div>
          <div class="box-image-container">
              <div class="box-image">
                  <img src=""  alt="Food Photo">
              </div>
          </div>
      </div>
      <div class="menu-image-container">
          <div class="image active">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988517/big-menu-thumb-1.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988526/big-menu-thumb-2.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/big-menu-thumb-4.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988524/big-menu-thumb-6.jpg" alt="Food Photo">
          </div>
      </div>
      <div class="text">
          <h2>Discover</h2>
          <h3>Menu</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates.  We love food, lots of different food, just like you.</p>
          <div><a class="a-CTA" href="Menu.html">View The Full Menu</a></div>
      </div>
  </div>
  <!--End Menu-->

  <!--Start fixed-image-->
  <div class="fixed-image">
      <div class="text">
          <h2>The Perfect</h2>
          <h3>Blend</h3>
      </div>
  </div>
  <!--End fixed-image-->

  <!--start About Us-->
  <div class="reservation">
      <div class="text">
          <h2>Culinary</h2>
          <h3>Delight</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.</p>
          <div><a class="a-CTA" href="#">Make a Reservation</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--Start Footer-->
  <footer>
      <div class="text">
          <h2>ABOUT ROYAL BITES</h2>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Royal Bites is an enchanting and easy-to-use parallax Restaurant WordPress theme that allows you to tell your story in a dynamic, narrative and enjoyable way, making it perfect for restaurants, bakeries, bars or coffee shops.</p>
      </div>
      <div class="contact-container">
        <div class="social-media">
            <h3>Follow Along</h3>
            <div class="links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
          <div class="newsletter">
            <h3>NewsLetter</h3>
              <form method="post">
                  <input type="email" name="email" placeholder="Type Your Email">
                  <i class="fas fa-envelope"></i>
              </form>
          </div>
      </div>
  </footer>
<!--End Footer-->

<!--Start Copy-Right-->
  <div class="copyright">
      <svg class="svg-up" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#262526" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <i class="fas fa-angle-double-up arrow-up"></i>
      <ul class="info">
          <li>© ROYAL BITES 2022</li>
          <li>13 NALA SOPARA, MUMBAI</li>
          <li>Tel: 8482890897</li>
          <li>Handcrafted with love by <a href="#">Dityun</a> Team</li>
      </ul>
      <ul class="CTA">
          <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
          <li><a href="#">CONTACT THE TEAM</a></li>
      </ul>
  </div>
  <script src="script.js"></script>
</body>
</html>
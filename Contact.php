<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "contact";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
  <!--Fonts-->

  <!--FontAwesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!--FontAwesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="style about.css"> -->
  <script>
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
          
  </script>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    /* background-color: #000; */
    background: url(https://i.makeagif.com/media/6-21-2021/Ml33kt.gif);
    background-size:contain ;

background-repeat: no-repeat;  }
  body,input,textarea,a{
    font-family:"Roboto",sans-serif;
  }
  #section-wrapper{
    width: 100%;
    padding: 46px 46px 46px 46px;
    position: relative;
    z-index: 0;
    
  }
  .box-wrapper{
    position: relative;
    display: table;
    width: 1100px;
    margin: auto;
    margin-top: -28px;
    border-radius: 30px;
    right: 2%;
  }
  .info-wrap{
    width: 35%;
    height: 551px;
    padding: 40px;
    float: left;
    display: block;
    border-radius: 30px 0px 0px 30px;
    background: linear-gradient(144deg,rgba(126,39,156,1)0%,rgba(49,39,157,1)100%);
    color: #fff;
  }
  .info-title{
    text-align: left;
    font-size: 28px;
    letter-spacing: 0.5px;
  }
  .info-sub-title{
    font-size: 18px;
    font-weight: 300;
    margin-top: 17px;
    letter-spacing: 0.5px;
    line-height: 26px;
  }
  .info-details{
    list-style: none;
    margin: 60px 0px;
  }
  .info-details li{
    margin-top: 25px;
    font-size: 18px;
    color: #fff;
  }
  .info-details li i{
    background: #F44770;
    padding: 12px;
    border-radius: 50%;
    margin-right: 5px;
  }
  .info-details li a{
    color: #fff;
    text-decoration: none;
  }
  .info-details li a:hover{
    color: #F44770;
  }
  .special-icons{
    list-style:none;
    text-align: center;
    margin: 20px 0px;
  }
  .social-icons li{
    display: inline-block;
  }
  .social-icons li i{
    background: #F44770;
    color: #fff;
    padding: 15px;
    font-size: 20px;
    border-radius: 22%;
    margin: 0px 5px;
    cursor: pointer;
    transition: all .5s;
  }
  .social-icons li i:hover{
    background: #fff;
    color: #000;
  }
  .form-wrap{
    width: 242%;
    height:551px;
    float: right;
    position: relative;
    left: 255%;
    top: -488px;
    padding: 40px 24px 35px 25px;
    border-radius: 0px 30px 30px 0px;
    background: #ecf0f3;
  }
  .form-title{
   text-align: left;
   margin-left: 23px;
   font-size: 28px;
   letter-spacing: 0.5px;
   color: #000;
  }
  .form-fields{
    display: table;
    width: 100%;
    padding: 15px 5px 5px 5px;
  }
  .form-fields input,
  .form-fields textarea{
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    color: #555;
    padding: 20px 10px 20px 5px;
    width: 100%;
  }
  .form-fields textarea{
    height: 150px;
    resize: none;
  }
  .form-group{
    width: 46%;
    float: left;
    padding: 0px 30px;
    border-radius: 25px;
    margin: 14px 12px;
    box-shadow: inset 8px 8px 8px #cbc3d1, inset -8px -8px 8px #ffffff;
  }
  .form-fields .form-group:Last-child{
    width: 96%;
  }
  .submit-button{
    width: 96%;
    height: 60px;
    margin: 0px 12px;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 700;
    outline: none;
    border: none;
    cursor: pointer;
    color: #fff;
    text-align: center;
    background: #F44770;
    box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
    transition: .5s;
  }
  .submit-button:hover{
    background: #31279d;
  }
  @media only screen and (max-width:767px){
    .box-wrapper{
      width: 100%;
    }
    .info-wrap,
    .form-wrap{
      width: 100%;
      height: inherit;
      float: none;
    }
    .info-wrap{
      border-radius: 30px 30px 0px 0px;
    }
    .form-wrap{
      border-radius: 0px 0px 30px 30px;
    }
    .form-group{
      width: 100%;
      float: none;
      margin: 25px 0px;
    }
    .form-fields .form-group:Last-child,
    .submit-button{
      width: 100%;
    }
    .submit-button{
      margin: 10px 0px;
    }
  }
  #kk{
      width: 100%;
      height: 650px;
      }
      .navigation-bar {
  display: flex;
  text-align: center;
  position: relative;
  justify-content: center;
  font-family:"Cabin",sans-serif;
  font-size: 30px;
  color: #121212;
  position: relative;
  top: 25px;
}

.navigation-bar ul {
  list-style: none;
  font-family:"Cabin",sans-serif; 
}

.navigation-bar ul li {
  display: inline-block;
  margin-right: 20px; /* Adjust spacing between menu items */
}

.navigation-bar ul li:last-child {
  margin-right: 0; /* Remove margin-right for the last menu item */
}

.navigation-bar ul li a {
font-size: 25px;
  color: white;
  text-decoration: none;
  /* color: ; Menu item text color */
  /* font-weight: bold; */
  position: relative; /* Position for the underline */
  transition: color 0.3s; /* Smooth color transition effect */
}

.underline {
  position: absolute; /* Absolute position for the underline */
  bottom: -2px; /* Place the underline below the text */
  left: 50%;
  transform: translateX(-50%); /* Center the underline */
  width: 0;
  height: 2px; /* Underline height */
  background-color: transparent; /* Underline color */
  transition: width 0.6s, background-color 0.6s; /* Smooth transition effect */
}

.navigation-bar ul li a:hover {
color: #e85d04; /* Change text color on hover */
}
.navigation-bar ul li a.active-link .underline { 
display: inline-block;
width: 100%;
height: 2px;
background-color:#e85d04; 
}

.navigation-bar ul li a:hover .underline {
  width: 100%; /* Full width on hover */
  background-color: #e85d04; /* Change underline color on hover */
}
header{
  height: 100px;
  font-family: "Cabin",sans-serif;
  color:white;
  position: relative;
  text-decoration: none;
  /* background-color: #45a049; */
  /* background-image: url("https://img.freepik.com/free-photo/top-view-seasonings-salt-inside-bowls-dark-blue-background-pepper-salt-seasoning-photo-color_140725-30880.jpg?size=626&ext=jpg&ga=GA1.1.1467430420.1709134669&semt=ais"); */
  background-size: cover;
}
footer {
    height: 480px;
    background-color: #121212;
    padding: 60px 20px;
  }
  footer .text {
    max-width: 500px;
    margin: auto;
    color: #fff;
  }
  footer .text h2 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 19px;
    letter-spacing: 1.9px;
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
  }
  footer .text .fa-asterisk {
    font-size: 12px;
    color: #a96700;
    display: flex;
    justify-content: center;
  }
  footer .text p {
    padding: 12px 0px 0px 0px;
    line-height: 27px;
    display:flex;
    text-align: center;
    font-family: 'Cabin',sans-serif;
  }
  footer .contact-container {
    padding: 40px 0;
    max-width: 1000px;
    margin: auto;
    display: flex;
    position: relative;
    top: 42px;
  }
  footer .contact-container > div {
    flex: 1;
    position: relative;
  
  }
  footer .contact-container h3 {
    font-size: 19px;
    letter-spacing: 1.9px;
    color: #eee;
    position: relative;
    left: 196px; 
    font-family: 'Sans Code Pro',sans-serif;
  }
  #hero h3{
    display:flex;
    position: relative;
    left: 30px;
  }
  footer .social-media .links a {
    margin: 0 10px;
    font-size: 25px;
    color: #eee;
    /* display: flex; */
    top: 14px;
    flex-wrap: nowrap;
    position: relative;
    left: 172px;
  }
  footer .newsletter input {
    padding: 15px;
    width: 270px;
    background-color: #eee;
    border: none;
    margin-left: -15px;
    display: flex;
    position: absolute;
    left: 31%;
    top: 30px;
  }
  footer.newsletter h3{
    color: #eee;
  }
  footer .newsletter i {
    margin-left: -40px;
    vertical-align: middle;
    font-size: 21px;
    color: #fff;
    position: absolute;
    top: 42px;
    left:421px;
    
  }
  .copyright {
    /* display: flex;
    position: relative; */
    padding: 21px 40px 30px;
    background-color: #262526;
    height: 130px;
    position: relative;
    top: 10%;
  }
  .copyright1{
    /* display: flex;
    position: relative; */
    padding: 21px 40px 30px;
    background-color: #262526;
    height: 130px;
    position: relative;
    top: -2%;
  }
  .copyright .svg-up {
    display: flex;
    position: relative;
    top: -28%;
    left: 50%;
    margin-left: -96px;
    margin-top: -50px;
  }
  .copyright .arrow-up {
    display: flex;
    place-items: center;
    justify-content: center;
    text-align: center;
    align-items: center;
    position: relative;
    width: 45px;
    height: 30px;
    top: -66px;
    left: 696px;
    color: #fff;
    line-height: 1.9
  }
  .copyright ul {
    display: flex;
    justify-content: center;
    text-align: center;
    list-style: none;
    margin-top: -14px;
    font-family:'Cabin',sans-serif;
  }
  .copyright li {
    color: #919191;
    font-size: 14px;
  }
  .copyright li:not(:last-of-type):after {
    content: '•';
    margin: 10px;
  }
  .copyright .CTA {
    margin-top: 24px;
    display: flex;
    justify-content: center;
    text-align: center;
    text-decoration: none;
    font-family:'Cabin',sans-serif;
  }
  .copyright .CTA li a {
    color: #919191;
    text-decoration: none;
  }
  .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  
}
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  position: absolute;
  /* text-align: center; */
  top: -20%;
  left: 10%;
  padding: 20px;
  border: 1px solid #888;
  height: 600px;
  width: 80%;
  animation-name: modal-open;
  animation-duration: 1.5s;
  font-family: Arial, sans-serif;
  background-image: url("https://meikong.com.pk/wp-content/uploads/2017/11/h9-parallax-img-1.jpg");
  background-size:cover;
  /* background-repeat: no-repeat; */
  /* background-color: violet; */
}
@keyframes modal-open {
  from {opacity: 0}
  to {opacity: 1}
}
.close {
  color: #aaa;
  display: flex;
  position:absolute;
  top: -1.5%;
  left: 97%;
  font-size: 50px;
  font-weight: bolder;
  width: 20px;
  padding: 0px 2px;
  /* border: 3px solid black ; */
}
.close1{
  color: #aaa;
  display: flex;
  position:absolute;
  top: -1.5%;
  left: 97%;
  font-size: 50px;
  font-weight: bolder;
  width: 20px;
  padding: 0px 2px;
  /* border: 3px solid black ; */
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
form {
  margin-top: 20px;
  position: relative;
  text-align: center;
  justify-content: center;
  font-size: 25px;
  color: white;
}
#frm{
  display: flex;
  flex-direction: column;
  margin-top: -10px;
  position: relative;
  text-align: center;
  justify-content: center;
  align-items: center;
  font-size: 12px;
  color: white;
}
label {
  display: block;
  margin-bottom: 10px;
 
}
input[type="date"],
input[type="time"],
input[type="number"],
input[type="submit"] {
  width: 70%;
  justify-content: center;
  align-items:center ;
  padding: 10px;
  margin-bottom: 20px;
}
button{
  height: 50px;
  width: 110px;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  position: relative;
  bottom: 1%;
  background-color: #4CAF50;
  transition: background-color 0.3s;
}
button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
  <header>
    <div class="navigation-bar">
        <ul>
            <li>
                <a href="index1.php" style="text-decoration: none;">Home <span class="underline"></span></a>
            </li>
            <li>
                <a href="#" style="text-decoration: none;" onclick="openReservation()">Reservation<span class="underline"></span></a>
            </li>
            <li>
                <a href="Menu.php" style="text-decoration: none;">Menu<span class="underline"></span></a>
            </li>
            <li>
                <a  href="About Us.php" style="text-decoration: none;">About<span class="underline"></span></a>
            </li>
            <li>
                <a href="gallery.php" style="text-decoration: none;">Gallery<span class="underline"></span></a>
            </li>
            <li>
                <a class="active-link" href="Contact.php" style="text-decoration: none;">Contact<span class="underline"></span></a>
            </li>
        </ul>
    </div>
    
    <div class="toggle"></div>
  </header>
  <div id="reservationModal" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeReservation()">&times;</span>
            <h1 style="font-size: 60px; color: azure;" ><center>RESERVATIONS</center></h1><br>
          <!-- Your reservation form or booking widget can go here -->
          <!-- Example form -->
            <form action="Reservation.php" method="post">
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
  <section id="section-wrapper">
    <div class="box-wrapper">
      <div class="info-wrap">
        <h2 class="info-title">Contact Information</h2>
        <h3 class="info-sub-title">Fill up the form and our team will get back to you within 24 hours</h3>
        <ul class="info-details">
          <li>
            <i class="fas fa-phone-alt"></i>
            <span>Phone: </span><a href="tel:+123456789">8482890897</a>
          </li>
          <li>
            <i class="fas fa-paper-plane"></i>
            <span>Email: </span><a href="mailto:info@yoursite">royalbites@gmail.com</a>
          </li>
          <li>
            <i class="fas fa-globe"></i>
            <span>Website: </span><a href="https://yoursite.com">www.royalbites.org</a>
          </li>
        </ul>
        <ul class="social-icons">
          <li>
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
        <div class="MLA">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // Retrieve form data
         $first_name = $_POST["first_name"];
         $last_name = $_POST["last_name"];
         $email = $_POST["email"];
         $number = $_POST["number"];
         $message = $_POST["message"];
         // Perform any validation or sanitization of data here

         // Example: Insert data into a table
         $sql = "INSERT INTO `people` (`first_name`, `last_name`, `email`,`number`,`message`) VALUES ('$first_name', '$last_name', '$email', '$number', '$message')";

         if ($conn->query($sql) === TRUE) {
           echo " successful!";
          } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
        $conn->close();

        ?>
       </div>
        <div class="form-wrap">
          <form action="Contact.php" method="post">
            <h2 class="form-title">Send a message</h2>
            <div class="form-fields">
              <div class="form-group">
                <input type="text" name="first_name" class="fname" placeholder="first_name">
              </div>
              <div class="form-group">
                <input type="text"  name="last_name" class="lname" placeholder="last_name">
              </div>
              <div class="form-group">
                <input type="email"  name="email" class="email" placeholder="Gmail">
              </div>
              <div class="form-group">
                <input style="justify-content:center;align-items:center;" type="number" name="number" class="phone" placeholder="number">
              </div>
              <div class="form-group">
                <textarea name="message" value="Send message"  id="" placeholder="message"></textarea>
              </div>
            </div>
            <input type="submit" value="Send message" class="submit-button" placeholder="submit-button">
          </form>
        </div>
      </div>
    </div>
  </section>
  <div id="omi">
    <p><iframe id="kk" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121656.3675347661!2d75.8362153086408!3d17.661452169932737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5d082b54ac5d5%3A0x3c719de6c83710d0!2sSolapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1713521615576!5m2!1sen!2sin" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </p>
  </div>  
  <footer>
    <div class="text">
        <h2>ABOUT ROYAL BITES</h2>
        <div><i class="fas fa-asterisk"></i></div>
        <p>Royal Bites is an enchanting and easy-to-use parallax Restaurant WordPress theme that allows you to tell your story in a dynamic, narrative and enjoyable way, making it perfect for restaurants, bakeries, bars or coffee shops.</p>
    </div>
    <div class="contact-container">
      <div class="social-media" id="heros">
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
        <li>© FOODIE 2022</li>
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
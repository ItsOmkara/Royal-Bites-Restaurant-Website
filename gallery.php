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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Gallery</title>
  <link rel="stylesheet" href="style about.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<style>
  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .bkg{
    height: 550px;
    width: 100%;
    max-width: 100%;
    background-image: url(https://images.squarespace-cdn.com/content/v1/624f5630bf354869b36f3bca/1651508905522-TWJA6I0ILW2458NI7BF6/AFL_Mains%2BDessert+copy.jpg?format=2500w );
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 100% 100%;
    background-position: center;
    /* display: block;
    margin: 0 auto;
    }
    .overlay {
     position: absolute;
     top: 100px;
     left: 0;
     width: 100%;
     height: 500px;
     background-color: rgba(0, 0, 0, 0.5);
    }
    .bkg h1{
      display: flex;
    position: absolute;
    top: 40%;
    left: 35%;
    transform: translate(-50% -50%);
    z-index: 1;
    }
    .gallery {
     display: flex;
     flex-wrap: wrap;
     padding: 0px;
     /* margin-right: 20%; */
     /* position: relative;
    left: -61px; */
   }

   .imagesection {
    width: calc(23% - 20px); /* 25% width for each image with some space between them */
    margin: -72px 10px;
    position: relative;
    }

   .imagesection img {
    width: 100%;
    height: 60%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    /* border: 1px solid black; */
    /* cursor: pointer; */
    }
    .imagesection img:hover{
      transform: scale(1.09);
      width: 100%;
      height: 60%;
    }
</style>
</head>
<body>
    <header>
        <div class="navigation-bar">
            <ul>
                <li>
                    <a href="index1.php" style="text-decoration: none; color: black" onmouseover="this.style.color='rgb(208, 67, 67)';" 
                    onmouseout="this.style.color='black';">Home <span class="underline"></span></a>
                </li>
                <li>
                    <a href="#" style="text-decoration: none; color: black;" onclick="openReservation()" onmouseover="this.style.color='rgb(208, 67, 67)';" 
                    onmouseout="this.style.color='black';">Reservation<span class="underline"></span></a>
                </li>
                <li>
                    <a href="Menu.php" style="text-decoration: none; color: black;" onmouseover="this.style.color='rgb(208, 67, 67)';" 
                    onmouseout="this.style.color='black';">Menu<span class="underline"></span></a>
                </li>
                <li>
                    <a  href="About Us.php" style="text-decoration: none; color: black;" onmouseover="this.style.color='rgb(208, 67, 67)';" 
                    onmouseout="this.style.color='black';">About<span class="underline"></span></a>
                </li>
                <li>
                    <a class="active-link" href="" style="text-decoration: none; color: black;" onmouseover="this.style.color='rgb(208, 67, 67)';" 
                    onmouseout="this.style.color='black';">Gallery<span class="underline"></span></a>
                </li>
                <li>
                    <a href="Contact.php" style="text-decoration: none; color: black;" onmouseover="this.style.color='rgb(208, 67, 67)';" 
                    onmouseout="this.style.color='black';">Contact<span class="underline"></span></a>
                </li>
            </ul>
        </div>
        
      <div class="toggle"></div>
    </header>
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
        <div class="modal-content1">
          <span class="close1" onclick="closeReservation()">&times;</span>
            <h1 style="font-size: 60px; color: azure;" ><center>RESERVATIONS</center></h1><br>
          <!-- Your reservation form or booking widget can go here -->
          <!-- Example form -->
            <form id="frm" action="gallery.php" method="post">
                <label for="date" style="font-size: 25px;">Date:</label>
                <input type="date" id="date" name="date" ><br><br>
                <label for="time"style="font-size: 25px;">Time:</label>
                <input type="time" id="time" name="time"><br><br>
                <label for="guests" style="font-size: 25px;">Number of Guests:</label>
                <input type="number" id="guests" name="guests"><br><br>
                <button>BOOK A TABLE</button>
            </form>
        </div>
    </div>
    <div class="bkg">
      <!-- <div class="overlay">
      <h1 style="color: #fff; font-size: 80px; font-weight: bolder;"></h1>
      </div> -->
    </div><br>
    <div><h1 style="font-family: Bebas Neue,sans-serif; font-weight: normal; display: flex; justify-content:center; font-size: 120px;">Gallery</h1></div>
    <div class="gallery">
      <div class="imagesection">
        <img src="https://www.elegantthemes.com/layouts/wp-content/uploads/2017/12/food-01.jpg" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/2059151/pexels-photo-2059151.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/1833349/pexels-photo-1833349.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/2230540/pexels-photo-2230540.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/2555240/pexels-photo-2555240.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/2290744/pexels-photo-2290744.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/6126305/pexels-photo-6126305.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/4871118/pexels-photo-4871118.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/2878738/pexels-photo-2878738.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/17864141/pexels-photo-17864141/free-photo-of-cup-of-cappuccino-and-plant.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://www.elegantthemes.com/layouts/wp-content/uploads/2017/12/food-21.jpg" alt="">
      </div>
      <div class="imagesection">
        <img src="https://www.elegantthemes.com/layouts/wp-content/uploads/2017/12/food-16.jpg" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/12432401/pexels-photo-12432401.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/14906576/pexels-photo-14906576.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/15189513/pexels-photo-15189513/free-photo-of-dishes-and-cutlery-on-restaurant-table.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="imagesection">
        <img src="https://images.pexels.com/photos/17331980/pexels-photo-17331980/free-photo-of-bar-in-a-restaurant.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img id="img1" style="height: 850px;" src="brooke-lark-aGjP08-HbYY-unsplash.jpg" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
              <img id="img2" style="height: 850px;"  src="lily-banse--YHSwy6uqvk-unsplash.jpg" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
              <img id="img3" style="height: 850px;"  src="rachel-park-hrlvr2ZlUNk-unsplash.jpg" class="d-block w-100" alt="Slide 3">
          </div>
          <!-- Add more carousel items as needed -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
<div class="copyright1">
    <svg class="svg-up1" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#262526" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
    <i class="fas fa-angle-double-up arrow-up1"></i>
    <ul class="info1">
        <li>© FOODIE 2022</li>
        <li>13 NALA SOPARA, MUMBAI</li>
        <li>Tel: 8482890897</li>
        <li>Handcrafted with love by <a href="#">Dityun</a> Team</li>
    </ul>
    <ul class="CTA1">
        <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
        <li><a href="#">CONTACT THE TEAM</a></li>
    </ul>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="script.js"></script>    
</body>
</html>

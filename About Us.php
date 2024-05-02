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
    <title>Document</title>
    <link rel="stylesheet" href="style about.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a class="active-link" href="About Us.php" style="text-decoration: none;">About<span class="underline"></span></a>
                </li>
                <li>
                    <a href="gallery.php" style="text-decoration: none;">Gallery<span class="underline"></span></a>
                </li>
                <li>
                    <a href="Contact.php" style="text-decoration: none;">Contact<span class="underline"></span></a>
                </li>
            </ul>
        </div>
        
      <div class="toggle"></div>
    </header>
    
     <div id="hed">
        ABOUT US
    </div> 
    <div><img id="oo" src="petr-sevcovic-qE1jxYXiwOA-unsplash.jpg" alt="">
    </div>
   <!-- <section class="featured-items">
    <h2>ABOUT US</h2>
    Welcome to Royal Bites, where the flavors of India come alive in every bite. Nestled in the heart of [City Name], our restaurant is a culinary oasis for those seeking authentic Indian cuisine in a regal ambiance.

    At Royal Bites, we believe in the power of traditional recipes passed down through generations, combined with a touch of modern innovation. Each dish on our menu is meticulously crafted using the finest ingredients and spices, ensuring a dining experience that tantalizes the taste buds and transports you to the vibrant streets of India.

    Our journey began with a vision to share the rich culinary heritage of India with the world. Drawing inspiration from the majestic palaces and diverse regional cuisines of India, we strive to create an atmosphere of elegance and warmth in every aspect of our restaurant.

    From our Tandoori specialties to our aromatic curries and tantalizing street food delights, every dish at Royal Bites tells a story of tradition, passion, and flavor. Whether you're a connoisseur of Indian cuisine or embarking on a culinary adventure, our team is dedicated to providing you with exceptional service and a dining experience fit for royalty.

    Join us at Royal Bites and embark on a gastronomic journey through the enchanting flavors of India. We invite you to savor the richness of our heritage, one bite at a time.
   </section> -->
   <div class="philf">
    <div class="container">
        <div class="content">
            <div class="real">
                <p id="tt">Welcome to Royal Bites, where the flavors of India come alive in every bite. Nestled in the heart of  Mumbai, our restaurant is a culinary oasis for those seeking authentic Indian cuisine in a regal ambiance.At Royal Bites, we believe in the power of traditional recipes passed down through generations, combined with a touch of modern innovation. Each dish on our menu is meticulously crafted using the finest ingredients and spices, ensuring a dining experience that tantalizes the taste buds and transports you to the vibrant streets of India</p>
                <p id="pp">From our Tandoori specialties to our aromatic curries and tantalizing street food delights, every dish at Royal Bites tells a story of tradition, passion, and flavor. Whether you're a connoisseur of Indian cuisine or embarking on a culinary adventure, our team is dedicated to providing you with exceptional service and a dining experience fit for royalty.
                </p>
            </div>
            <div class="myimg">
                <img id="kk" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L3Vwd2s2MTY2MTU3Ny13aWtpbWVkaWEtaW1hZ2Uta293YXBlZWouanBn.jpg" alt="">
            </div>
        </div>
    </div>
   </div>
   <div class="philf2">
    <div class="container2">
        <div class="content2">
            <div id="Img2">
                <img id="mnk" src="https://w0.peakpx.com/wallpaper/978/830/HD-wallpaper-restaurant-architecture-lighting-brown-beautiful-decor-furniture-cool-peaceful-interiors-luxury-style.jpg" alt="">
            </div>
            <div class="real2">
                <p id="uu">Vegetarian delights abound at Royal Bites, with vibrant dishes that highlight the richness and versatility of plant-based ingredients. From creamy paneer tikka masala to aromatic vegetable biryanis, our vegetarian offerings are sure to satisfy even the most discerning palate.For those seeking a taste of the sea, our seafood selection showcases the freshest catches prepared with skill and finesse. From fragrant fish curries to crispy prawn appetizers, each dish showcases the bounty of the ocean in all its glory.</p>
                <p id="rr">And of course, no meal at Royal Bites would be complete without a sweet finale. Indulge your senses with our selection of decadent desserts, from traditional Indian sweets like gulab jamun and rasgulla to innovative creations that marry classic flavors with modern flair.At Royal Bites, every dish is a masterpiece, crafted with care and attention to detail to ensure a truly unforgettable dining experience. Join us and explore the myriad flavors of India, where each bite is a journey of discovery and delight.</p>
            </div>
        </div>
    </div>
   </div>
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
            <h1 style="font-size: 60px; color: azure;" ><center>RESERVATIONS</center></h1><br>
          <!-- Your reservation form or booking widget can go here -->
          <!-- Example form -->
            <form action="About Us.php" method="post">
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
    <div class="gallery">
        <div class="image-section">
          <img src="https://images.pexels.com/photos/1058277/pexels-photo-1058277.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image 1">

        </div>
        <div class="image-section">
          <img src="https://images.pexels.com/photos/397913/pexels-photo-397913.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image 2">

        </div>
        <div class="image-section">
            <img src="https://images.pexels.com/photos/2351274/pexels-photo-2351274.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image 1">
  
          </div>
          <div class="image-section">
            <img src="https://images.pexels.com/photos/2878741/pexels-photo-2878741.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image 2">
            
          </div>
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
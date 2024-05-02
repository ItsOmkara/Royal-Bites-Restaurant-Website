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
    <title>Menu</title>
    <link rel="stylesheet" href="styles1.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
  $('a').click(function(e) {
    var href = $(this).attr('href'); // Get the href attribute of the clicked link

    // Check if the clicked link is for Reservation section
    if (href === '#') {
      openReservation(); 
    } else if (!($(this).attr('href').includes('.pdf'))) { // Exclude PDF links from animation
      e.preventDefault(); 
      $('body').fadeOut(300, function() { // Adjust the duration here (1000 milliseconds for example)
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
    <section class="showcase">
        <header>
            <div class="navigation-bar">
                <ul>
                    <li>
                        <a href="index1.php" style="text-decoration: none;" >Home <span class="underline"></span></a>
                    </li>
                    <li>
                        <a class="active link" id="reservation" href="#" style="text-decoration: none;" onclick="openReservation()">Reservation<span class="underline"></span></a>
                    </li>
                    <li>
                        <a class="active-link" href="" id="menu" style="text-decoration: none;">Menu<span class="underline"></span></a>
                    </li>
                    <li>
                        <a  href="About Us.php" style="text-decoration: none;">About<span class="underline"></span></a>
                    </li>
                    <li>
                        <a id="gallery" href="gallery.php" style="text-decoration: none;">Gallery<span class="underline"></span></a>
                    </li>
                    <li>
                        <a id="contact" href="Contact.php" style="text-decoration: none;">Contact<span class="underline"></span></a>
                    </li>
                </ul>
            </div>
          <h2 class="logo"> Royal Bites</h2>
          <div class="toggle"></div>
        </header>
        <video src="Restaurent.mp4.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
          <h2>Indulge in a Culinary </h2>
          <h3>Journey of Flav<span>o</span>urs</h3>
          <h3>and Delights</h3>
          <p></p>
          <!-- <a href="#">Explore</a> -->
        </div>
        <ul class="social">
          <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
          <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
          <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
    </section>
    <div class="menu">
        <ul>
            <h1>Menu</h1><br>
          <li><a href="#Special.pdf"> Special</a></li><br>
          <li><a href="deserts_removed.pdf"> Deserts</a></li><br>
          <li><a href="Lunch.pdf">  Lunch</a></li><br>
          <li><a href="Dinner.pdf">  Dinner</a></li><br>                                          
          <li><a href="Wine Jacks.pdf">  Wine</a></li>
        </ul>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
          <h1 style="font-size: 60px; color: azure; font-weight: bold; letter-spacing: 2px;" ><center>RESERVATIONS</center></h1><br>
        <!-- Your reservation form or booking widget can go here -->
        <!-- Example form -->
          <form action="Menu.php" method="post">
              <label for="date">Date:</label>
              <input type="date" id="date" name="date"><br><br>
              <label for="time" >Time:</label>
              <input type="time" id="time" name="time"><br><br>
              <label for="guests">Number of Guests:</label>
              <input type="number" id="guests" name="guests"><br><br>
              <button style="border-radius: 10px;font-size: 15px;" type="submit">BOOK A TABLE</button>
          </form>
      </div>
    </div>
  </div> 
  <section id="Special.pdf" class="service-grid pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center mb-4">
                <div class="service-title" style="font-size: 50px;">
                    <h2 style="font-size: 50px;">Royal Bites Special</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i /*class="fas fa-layer-group"*/>Butter Chicken</i>
                    </div>
                    <h4></h4>
                    <p>A classic Indian dish made with tender pieces of chicken cooked in a rich and creamy tomato-based sauce, flavored with butter, cream, and a blend of aromatic spices. Butter chicken is known for its indulgent taste and smooth texture, making it a favorite among both locals and international food enthusiasts.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrapservice2">
                    <div class="service-icon">
                        <i > Pav Bhaji</i>
                    </div>
                    <h4></h4>
                    <p>A popular street food from Mumbai, Pav Bhaji consists of a spicy vegetable curry (bhaji) served with buttered bread rolls (pav). The bhaji is made by simmering mixed vegetables in a special blend of spices, resulting in a flavorful and tangy gravy. It is often garnished with chopped onions, coriander leaves</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap-3">
                    <div class="service-icon">
                        <i>Dal Makhni</i>
                    </div>
                    <h4></h4>
                    <p>A creamy and indulgent Punjabi lentil dish made with black lentils (urad dal), red kidney beans (rajma), butter, cream, and a blend of aromatic spices. Dal Makhni is slow-cooked to perfection, allowing the flavors to meld together and develop a rich, velvety texture. It is typically served with rice or Indian breads like naan or roti.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap-4">
                    <div class="service-icon">
                        <i>Thali</i>
                    </div>
                    <h4></h4>
                    <p> A traditional Indian meal consisting of a variety of dishes served on a large platter (thali). Thali typically includes a selection of curries, vegetables, lentils, rice, bread, yogurt, chutneys, and desserts, providing a balanced and wholesome dining experience. It offers a diverse array of flavors, textures, and nutritional elements in one meal.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap-5">
                    <div class="service-icon">
                        <i>Palak Panner</i>
                    </div>
                    <h4></h4>
                    <p>A popular North Indian dish made with fresh spinach (palak) and paneer (Indian cottage cheese) cooked in a creamy and flavorful gravy. Palak Paneer is known for its vibrant green color and hearty texture. It is delicately spiced with garlic, ginger, and garam masala, resulting in a nutritious and satisfying vegetarian dish.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap-6">
                    <div class="service-icon">
                        <i>Dal Tadka</i>
                    </div>
                    <h4></h4>
                    <p>Dal tadka or tadkewali dal is a traditional lentil-based dish originating from the northern parts of India. Although there are variations, the dish is usually prepared with toor dal (split yellow pigeon peas), garlic, ginger, onions, tomatoes, garam masala, chili peppers, ghee, cumin, coriander, turmeric, red chili powder</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
  </section>
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
        <i class="fas fa-angle-double-up arrow-up" style="cursor:pointer;"></i>
        <ul class="info">
            <li>© FOODIE 2022</li>
            <li>13 NALA SOPARA, MUMBAI</li>
            <li>Tel: 8482890897</li>
            <li>Handcrafted with love by <a style="color: #a96700; text-decoration: none;" href="#">Dityun</a> Team</li>
        </ul>
        <ul class="CTA">
            <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
            <li><a href="#">CONTACT THE TEAM</a></li>
        </ul>
    </div>
<script src="script1.js"></script>
</body>
</html>

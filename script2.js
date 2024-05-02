const header = document.getElementById('header');
const title = document.getElementById('title');
const excerpt = document.getElementById('excerpt');
const profile_img = document.getElementById('profile_img');
const name = document.getElementById('name');
const date = document.getElementById('date');
const animated_bgs = document.querySelectorAll('.animated-bg');
const animated_bg_texts = document.querySelectorAll('.animated-bg-text');

// Call getData function after 2500 milliseconds
setTimeout(getData, 2500);

function getData() {
    // Your image address
    let imageUrl = 'https://www.pepperdelight.com/wp-content/uploads/2020/10/pepper-delight-butter-chicken-1-scaled.jpg';
    
    // Update content with new image source
    header.innerHTML = '<img src="' + imageUrl + '" alt="" />';
    title.innerHTML = 'Your Title';
    excerpt.innerHTML = 'Your excerpt';
    profile_img.innerHTML = ''; // Clear any existing content
    profile_img.style.backgroundImage = 'url(' + imageUrl + ')';
    name.innerHTML = 'Your Name';
    date.innerHTML = '22 Jan 2021';
    
    // Remove the 'animated-bg' and 'animated-bg-text' classes to stop animation
    animated_bgs.forEach((bg) => bg.classList.remove('animated-bg'));
    animated_bg_texts.forEach((bg) => bg.classList.remove('animated-bg-text'));

    // Add clickable option for title
    title.style.cursor = 'pointer';
    title.addEventListener('click', function() {
        // Open a link when title is clicked
        window.open('https://www.example.com', '_blank');
    });

    // Add clickable option for profile image
    header.style.cursor = 'pointer';
    header.addEventListener('click', function() {
        // Open a link when profile image is clicked
        window.open('https://www.example.com', '_blank');
    });
}
function SendMail(){
    var params = {
        from_name: document.getElementById("FirstName").value,
        last_name: document.getElementById("LastName").value,
        phone: document.getElementById("phone").value,
        from_email: document.getElementById("email_id").value,
        message: document.getElementById("message").value
    };

    emailjs.send("service_ca3kbub", "template_tzfrj7b", params)
        .then(function(res) {
            alert("Email sent successfully! Status: " + res.status);
        })
        .catch(function(error) {
            console.error("Error sending email:", error);
            alert("An error occurred while sending the email. Please try again later.");
        });
}

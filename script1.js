document.addEventListener("DOMContentLoaded", function() {
    var image = document.getElementById("sliding-image");
    if (image) {
        image.classList.add("slide-in");
    }
});
function openReservation() {
    var modal = document.getElementById("reservationModal");
    modal.style.display = "block";
}
function closeReservation() {
    var modal = document.getElementById("reservationModal");
    modal.style.display = "none";
}
const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');})
const navLinks = document.querySelectorAll('.navigation-bar ul li a');

// Loop through each link and add event listener
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Remove 'active-link' class from all links
        navLinks.forEach(link => {
            link.classList.remove('active-link');
        });
        // Add 'active-link' class to the clicked link
        this.classList.add('active-link');
    });
});
svgUp = document.querySelector(".copyright .arrow-up")
svgUp.addEventListener("click", () => {
    window.scroll({
        top: 0,
        behavior: "smooth"
    });
});


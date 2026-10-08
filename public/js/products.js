// ===============================
// NAVIGATION
// ===============================
const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");
const navbar = document.getElementById("navbar");

menuBtn.addEventListener("click", () => {
  navMenu.classList.toggle("show");
});

window.addEventListener("scroll", () => {
  if (window.scrollY > 20) {
    navbar.classList.remove("transparent");
    navbar.classList.add("solid");
  } else {
    navbar.classList.add("transparent");
    navbar.classList.remove("solid");
  }
});

// ===============================
// FADE-IN ANIMATION
// ===============================
const cards = document.querySelectorAll(".product-card");
window.addEventListener("scroll", () => {
  cards.forEach(card => {
    const rect = card.getBoundingClientRect();
    if(rect.top < window.innerHeight - 50) {
      card.style.opacity = 1;
      card.style.transform = "translateY(0)";
      card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    }
  });
});

// Booking form submission via AJAX
const form = document.getElementById("bookingForm");
const formMessage = document.getElementById("form-message");

if(form) { // Check if the form exists on this page
  form.addEventListener("submit", function(e) {
    e.preventDefault();
    const data = new FormData(form);

    fetch('app/processes/booking_process.php', { method: 'POST', body: data })
      .then(res => res.text())
      .then(res => {
        formMessage.style.color = "green";
        formMessage.textContent = "Thank you! Your booking has been received.";
        form.reset();
      })
      .catch(err => {
        formMessage.style.color = "red";
        formMessage.textContent = "An error occurred. Please try again.";
      });
  });
}
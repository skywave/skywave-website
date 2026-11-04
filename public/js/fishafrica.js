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
// FADE-IN ANIMATION FOR CARDS
// ===============================
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px"
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = 1;
      entry.target.style.transform = "translateY(0)";
    }
  });
}, observerOptions);

// Observe all animated elements
document.querySelectorAll(".fa-card, .fa-journey-step, .fa-feature-card").forEach(el => {
  el.style.opacity = 0;
  el.style.transform = "translateY(20px)";
  el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
  observer.observe(el);
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({ behavior: "smooth", block: "start" });
      // Close mobile menu if open
      navMenu.classList.remove("show");
    }
  });
});
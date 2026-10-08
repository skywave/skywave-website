// ===============================
// NAVIGATION
// ===============================
const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");
const navbar = document.getElementById("navbar");

menuBtn.addEventListener("click", () => {
  navMenu.classList.toggle("show");
});

/*window.addEventListener("scroll", () => {
  if (window.scrollY > 20) {
    navbar.classList.remove("transparent");
    navbar.classList.add("solid");
  } else {
    navbar.classList.add("transparent");
    navbar.classList.remove("solid");
  }
});*/

const container = document.querySelector('.slides-container');
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
let slideIndex = 0;

// Show slide function
function showSlide(n) {
  slideIndex = (n + slides.length) % slides.length;
  container.style.transform = `translateX(-${slideIndex * 100}%)`;
  dots.forEach((d, i) => d.classList.toggle('active', i === slideIndex));
}

// Controls
function resetAutoSlide() {
  clearInterval(autoSlide);
  autoSlide = setInterval(() => {
    showSlide(slideIndex + 1);
  }, 5000);
}
document.querySelector('.next').onclick = () => {
  showSlide(slideIndex + 1);
  resetAutoSlide();
};

document.querySelector('.prev').onclick = () => {
  showSlide(slideIndex - 1);
  resetAutoSlide();
};

document.querySelector('.next').onclick = () => {
  showSlide(slideIndex + 1);
  resetAutoSlide();
};

document.querySelector('.prev').onclick = () => {
  showSlide(slideIndex - 1);
  resetAutoSlide();
};

// Dots click
dots.forEach((dot, index) => {
  dot.onclick = () => {
  showSlide(index);
  resetAutoSlide();
};
});

// Initialize slider
showSlide(slideIndex);
// Auto slide every 5 seconds
let autoSlide = setInterval(() => {
  showSlide(slideIndex + 1);
}, 5000);


// ===============================
// FADE-IN ANIMATION
// ===============================
const faders = document.querySelectorAll(".fade-in");

const appearOptions = { threshold: 0.2, rootMargin: "0px 0px -50px 0px" };

const appearOnScroll = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
      observer.unobserve(entry.target);
    }
  });
}, appearOptions);

faders.forEach((fader) => appearOnScroll.observe(fader));

// ===============================
// HERO FLASH ROTATOR
// ===============================
(function () {
  const flashes = [
    "Products",
    "Key service summary",
    "Authorized Yeastar distributor"
  ];
  let idx = 0;
  const container = document.getElementById("hero-flash");

  if (container) {
    function renderFlash() {
      container.innerHTML = "";
      for (let i = 0; i < 3; i++) {
        const span = document.createElement("span");
        span.className = "flash-item";
        span.textContent = flashes[(idx + i) % flashes.length];
        container.appendChild(span);
      }
      idx = (idx + 1) % flashes.length;
    }

    renderFlash();
    setInterval(renderFlash, 3500);
  }
})();

const heroSlider = document.querySelector('.sw-hero');

heroSlider.addEventListener('mouseenter', () => clearInterval(autoSlide));
heroSlider.addEventListener('mouseleave', resetAutoSlide);
/*
// ===============================
// TESTIMONIALS NAVIGATION
// ===============================
(function () {
  const slides = document.querySelectorAll("#testimonial-wrap .slide");
  if (!slides.length) return;

  let current = 0;

  window.nextTestimonial = function () {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  };

  window.prevTestimonial = function () {
    slides[current].classList.remove("active");
    current = (current - 1 + slides.length) % slides.length;
    slides[current].classList.add("active");
  };
})();*/


const counters = document.querySelectorAll('.counter');
let started = false;

function animateCounters() {
  const statsSection = document.querySelector('#stats');
  const sectionTop = statsSection.getBoundingClientRect().top;
  const triggerPoint = window.innerHeight - 100;

  if (sectionTop < triggerPoint && !started) {
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      let count = 0;
      const increment = target / 100;

      const updateCounter = () => {
        count += increment;
        if (count < target) {
          counter.innerText = Math.ceil(count);
          requestAnimationFrame(updateCounter);
        } else {
          counter.innerText = target;
        }
      };

      updateCounter();
    });

    started = true;
  }
}

window.addEventListener('scroll', animateCounters);

// ===============================
// WEBRTC PLACEHOLDER (optional link)
// ===============================
function openWebRTC() {
  window.location.href = "https://www.skywavetech.cloud/webrtc/";
}
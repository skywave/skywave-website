// =========================================================
// Skywave Technologies Malawi — landing page interactions
// =========================================================

const header = document.getElementById("navbar");
const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");

// Add a shadow to the header once the user scrolls past the top of the hero.
function updateHeader() {
    if (!header) return;
    header.classList.toggle("scrolled", window.scrollY > 40);
}

window.addEventListener("scroll", updateHeader, { passive: true });
updateHeader();

// Mobile navigation.
if (menuBtn && navMenu) {
    menuBtn.addEventListener("click", () => {
        const isOpen = navMenu.classList.toggle("open");
        menuBtn.setAttribute("aria-expanded", String(isOpen));
    });

    navMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("open");
            menuBtn.setAttribute("aria-expanded", "false");
        });
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            navMenu.classList.remove("open");
            menuBtn.setAttribute("aria-expanded", "false");
        }
    });
}

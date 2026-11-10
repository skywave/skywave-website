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

// Print / save the company profile as a PDF.
document.querySelectorAll("[data-print]").forEach((button) => {
    button.addEventListener("click", () => window.print());
});

// Contact form — submits to malawi/app/processes/contact_process.php.
const contactForm = document.getElementById("contactForm");
const formMessage = document.getElementById("form-message");

if (contactForm && formMessage) {
    contactForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalLabel = submitButton ? submitButton.textContent : "";

        formMessage.textContent = "";
        formMessage.classList.remove("success", "error");

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = "Sending…";
        }

        try {
            const response = await fetch(contactForm.getAttribute("action"), {
                method: "POST",
                body: new FormData(contactForm),
                headers: { "X-Requested-With": "XMLHttpRequest" },
            });

            const data = await response.json();

            if (!response.ok || data.status !== "success") {
                throw new Error(data.message || "We could not send your message.");
            }

            formMessage.textContent = data.message || "Thank you, your message has been received.";
            formMessage.classList.add("success");
            contactForm.reset();
        } catch (error) {
            formMessage.textContent =
                error instanceof Error && error.message
                    ? error.message
                    : "An error occurred. Please try again or email info@skywavetech.co.zm.";
            formMessage.classList.add("error");
        } finally {
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = originalLabel;
            }
        }
    });
}

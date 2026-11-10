// =========================================================
// Active navigation highlighting (shared across all pages)
//
// Adds:
//   .active          -> the tab for the page the user is on
//   .section-active  -> the in-page section currently in view
// =========================================================
(function () {
  "use strict";

  var navMenu = document.getElementById("navMenu");
  if (!navMenu) return;

  var links = Array.prototype.slice.call(navMenu.querySelectorAll("a[href]"));
  if (!links.length) return;

  // Normalise a URL path so "/about", "/about.php" and "/about/"
  // all resolve to the same page key ("about").
  function pageKey(pathname) {
    var path = pathname
      .replace(/\/index\.php$/i, "/")
      .replace(/\.php$/i, "")
      .replace(/\/+$/, "");

    if (!path) return "index";

    var parts = path.split("/");
    return parts[parts.length - 1] || "index";
  }

  var currentPage = pageKey(window.location.pathname);
  var pageTab = null;
  var sectionLinks = [];

  // Pages that have no tab of their own highlight their closest parent tab.
  var NAV_ALIASES = {
    products: "index#offerings",
    services: "index#offerings",
    solutions: "index#offerings"
  };

  links.forEach(function (link) {
    var raw = (link.getAttribute("href") || "").trim();
    if (!raw) return;
    if (/^(?:[a-z]+:)?\/\//i.test(raw)) return; // external
    if (/^(?:mailto|tel):/i.test(raw)) return; // non-page links

    var hash = "";
    var pathPart = raw;

    if (raw.charAt(0) === "#") {
      hash = raw.slice(1);
      pathPart = "";
    } else {
      var hashIndex = raw.indexOf("#");
      if (hashIndex !== -1) {
        hash = raw.slice(hashIndex + 1);
        pathPart = raw.slice(0, hashIndex);
      }
    }

    if (!hash && !pathPart) return;

    var targetPage = pathPart ? pageKey(pathPart) : currentPage;

    // Links to a section on this page are handled by the scroll-spy below.
    if (hash && targetPage === currentPage) {
      var section = document.getElementById(hash);
      if (section) {
        sectionLinks.push({ link: link, section: section });
      }
      return;
    }

    // A link with no hash that targets this page is the current page tab.
    if (targetPage === currentPage && !hash) {
      pageTab = link;
    }
  });

  // Fall back to the closest parent tab for pages without their own tab.
  if (!pageTab && NAV_ALIASES[currentPage]) {
    var aliasHref = NAV_ALIASES[currentPage];
    links.forEach(function (link) {
      if (!pageTab && (link.getAttribute("href") || "").trim() === aliasHref) {
        pageTab = link;
      }
    });
  }

  function markPageTab(isCurrent) {
    if (!pageTab) return;

    if (isCurrent) {
      pageTab.classList.add("active");
      pageTab.setAttribute("aria-current", "page");
    } else {
      pageTab.classList.remove("active");
      pageTab.removeAttribute("aria-current");
    }
  }

  markPageTab(true);

  if (!sectionLinks.length) return;

  var sectionActiveLink = null;
  var frame = 0;

  function markSection(link) {
    if (sectionActiveLink === link) return;

    if (sectionActiveLink) {
      sectionActiveLink.classList.remove("section-active");
      if (sectionActiveLink.getAttribute("aria-current") === "location") {
        sectionActiveLink.removeAttribute("aria-current");
      }
    }

    sectionActiveLink = link;

    if (link) {
      link.classList.add("section-active");
      link.setAttribute("aria-current", "location");
    }

    // Keep a single highlight: while a section on this page is in view,
    // it takes over from the page tab.
    markPageTab(!link);
  }

  function update() {
    frame = 0;

    var header = document.getElementById("navbar");
    var offset = (header ? header.getBoundingClientRect().height : 0) + 48;
    var current = null;

    sectionLinks.forEach(function (entry) {
      if (entry.section.getBoundingClientRect().top <= offset) {
        current = entry.link;
      }
    });

    // Near the end of the page the last section can never reach the header,
    // so fall back to the last one still visible in the viewport.
    var doc = document.documentElement;
    var atBottom = window.innerHeight + window.scrollY >= doc.scrollHeight - 2;

    if (atBottom) {
      var lastVisible = null;
      sectionLinks.forEach(function (entry) {
        if (entry.section.getBoundingClientRect().bottom > 0) {
          lastVisible = entry.link;
        }
      });
      if (lastVisible) current = lastVisible;
    }

    markSection(current);
  }

  function requestUpdate() {
    if (!frame) {
      frame = window.requestAnimationFrame(update);
    }
  }

  window.addEventListener("scroll", requestUpdate, { passive: true });
  window.addEventListener("resize", requestUpdate);
  window.addEventListener("load", requestUpdate);
  update();
})();

// main css
import "../css/app-landing.scss";

// functions js
import "./vendor/js/layout.min.js";

// magnific popup js
import "./vendor/js/magnific.min.js";

// nice select js
import "./vendor/js/nice-select.min.js";

// owl carousel js
import "./vendor/js/owl.min.js";

// counter up js
import "./vendor/js/counter-up.min.js";

// waypoint js
import "./vendor/js/waypoint.min.js";

// AOS (Animate On Scroll)
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener("DOMContentLoaded", () => {
  AOS.init({
    duration: 800, // durasi animasi
    delay: 100,    // delay default
    once: true,    // animasi hanya sekali saat scroll
  });
});

import "./modules.js";

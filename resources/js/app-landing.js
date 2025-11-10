// Import CSS utama
import "../css/app-landing.scss";

// AOS (Animate On Scroll)
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener("DOMContentLoaded", () => {
  AOS.init({
    duration: 800,
    delay: 100,
    once: true,
  });
});

// Script tambahan modern milikmu
import "./modules.js";


// main css
import "../styles/app.scss";

// functions js
import "../vendor/js/layout.min.js";

// magnific popup js
import "../vendor/js/magnific.min.js";

// nice select js
import "../vendor/js/nice-select.min.js";

// owl carousel js
import "../vendor/js/owl.min.js";

// counter up js
import "../vendor/js/counter-up.min.js";

// waypoint js
import "../vendor/js/waypoint.min.js";

// wow js
import WOW from "wowjs";
import "animate.css";

document.addEventListener("DOMContentLoaded", () => {
  new WOW.WOW({ live: false }).init();
});

import "./modules.js";

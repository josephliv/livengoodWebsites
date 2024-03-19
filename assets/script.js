const mobileMenuButton = document.querySelector(".mobile-menu-button");

const mobileMenuSidebar = document.querySelector(".mobile-menu-sidebar");

// This is to open the entire menu on mobile devices
const openMenu = () => {
  mobileMenuSidebar.classList.toggle("is-active");
};

mobileMenuButton.addEventListener("click", openMenu);

// Back to the top button
//Get the button
const mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//  For details tab to close when another one is opened (home page for now)
const detailsElements = document.getElementsByTagName("details");

for (let element of detailsElements) {
  element.addEventListener("toggle", function () {
    if (this.open) {
      // Close other open details elements
      for (let otherElement of detailsElements) {
        if (otherElement !== this && otherElement.open) {
          otherElement.open = false;
        }
      }
    }
  });
}

// exit popup 

const exitPopup = document.querySelector(".exitPopup");
const overlay = document.querySelector(".overlay");
exitPopup.style.display = "none";

// Add a flag to track if the popup has been shown
let isPopupShown = false;

// document.addEventListener("mouseleave", function (event) {
//   // Check if the popup has not been shown and the mouse is leaving the window boundaries
//   if (!isPopupShown && (event.clientY <= 0 || event.clientX <= 0 || event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {
//     if (window.getComputedStyle(exitPopup).display === "none") {
//       exitPopup.style.display = "block";
//       overlay.style.display = "block";
//       setTimeout(() => {
//         exitPopup.style.opacity = "1";
//         overlay.style.opacity = "1";
//       }, 10); // Use setTimeout to allow display change to apply first

//       // Set the flag to true to prevent the popup from showing again
//       isPopupShown = true;
//     }
//   }
// });


function closePopup() {
  exitPopup.style.opacity = "0";
  overlay.style.opacity = "0";
  setTimeout(() => {
    exitPopup.style.display = "none";
    overlay.style.display = "none";
  }, 500); // Match the duration of the transition
}

function closePopup() {
  exitPopup.style.display = "none";
  overlay.style.display = "none";
}

function bookFreeAnalysis() {
  // Redirect to booking page or handle the booking logic
  window.location.href = "https://calendly.com/livengoodwebsites"; // Example path to booking page
}

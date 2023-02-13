const mobileMenu = document.querySelector(".mobile-menu"); 
const mainNav = document.querySelector(".main-nav"); 

// This is to open the entire menu on mobile devices 
const openMenu = () => {
  mainNav.classList.toggle('is-active');
}

mobileMenu.addEventListener('click', openMenu);



// Back to the top button 
 //Get the button
 const mybutton = document.getElementById("myBtn");

 // When the user scrolls down 20px from the top of the document, show the button
 
 window.onscroll = function () {
   scrollFunction();
 };

 function scrollFunction() {
   if (
     document.body.scrollTop > 80 ||
     document.documentElement.scrollTop > 80
   ) {
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

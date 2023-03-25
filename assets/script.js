
const mobileMenu = document.querySelector(".mobile-menu"); 
const mainNav = document.querySelector(".main-nav"); 
alert("im running here too");
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

 // ======================================
 // image popup script for restaurant page
 // ====================================

 // Get the modal
var foodAppModal = document.getElementById("foodAppModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var foodAppImg = document.getElementById("foodAppImg");
var FoodAppmodalImg = document.getElementById("foodAppModalImg");
var foodAppCaption = document.getElementById("foodAppCaption");

 function foodAppPopUp(){
  alert('it worked')
  foodAppModal.style.display = "block";
  // modalImg.src = this.src;
  foodAppCaption.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


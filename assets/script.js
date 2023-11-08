
const mobileMenuButton = document.querySelector(".mobile-menu-button");
 
const mobileMenuSidebar = document.querySelector(".mobile-menu-sidebar");


// This is to open the entire menu on mobile devices 
const openMenu = () => {
  mobileMenuSidebar.classList.toggle('is-active');
}


mobileMenuButton.addEventListener('click', openMenu);




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

//  For details tab to close when another one is opened (home page for now)
const detailsElements = document.getElementsByTagName('details');

  for (let element of detailsElements) {
    element.addEventListener('toggle', function() {
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

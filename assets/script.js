
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

  function confirmAndRedirect(event) {
    event.preventDefault();
    let userResponse = confirm("Thanks for reaching out! Quick check: You're not here to sell us top Google rankings or secret marketing strategies, right? We're on a quest for genuine connections, not SEO magic potions. Click 'OK' if you're here for the real deal!");
    if (userResponse) {
      // User clicked "OK"
      window.location.href = "https://calendly.com/livengoodwebsites"; // Replace this with your actual Calendly link
    } else {
      // User clicked "Cancel", 
      alert("We get it, no hard feelings! If you ever change your mind and need our expertise, you know where to find us. Take care!");
      //window.location.href = "/contact";
    }
  }
  

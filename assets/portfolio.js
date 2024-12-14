
document.addEventListener("DOMContentLoaded", function() {
  const images = document.querySelectorAll(".popup-img");
  const modals = document.querySelectorAll(".modal");
  const closeButtons = document.querySelectorAll(".close");
  const mybutton = document.getElementById("myBtn");

  images.forEach(function(image, index) {
    image.addEventListener("click", function() {
      modals[index].style.display = "block";
      modals[index].classList.remove('closing'); 
      document.body.classList.add("modal-open");
      mybutton.style.display = "none";
    });

    closeButtons[index].addEventListener("click", function() {
      // Add the closing class to trigger the animation
      modals[index].classList.add('closing');

      // Wait for the animation to complete (300ms), then hide the modal
      setTimeout(function() {
        modals[index].style.display = "none";
        modals[index].classList.remove('closing'); 
        document.body.classList.remove("modal-open");
        mybutton.style.display = "none";
      }, 300); 
    });
  });
});

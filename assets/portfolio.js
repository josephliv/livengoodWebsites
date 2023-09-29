
document.addEventListener("DOMContentLoaded", function() {
  const images = document.querySelectorAll(".popup-img");
  const modals = document.querySelectorAll(".modal");
  const closeButtons = document.querySelectorAll(".close");

  images.forEach(function(image, index) {
    image.addEventListener("click", function() {
      modals[index].style.display = "block";
    });

    closeButtons[index].addEventListener("click", function() {
      modals[index].style.display = "none";
    });
  });
});
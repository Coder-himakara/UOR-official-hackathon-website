// script.js

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var image = document.querySelector(".responsive-robo-container");

    // Check if the image is in the viewport
    if (isInViewport(image)) {
      image.classList.add("shaking");
    } else {
      image.classList.remove("shaking");
    }
  });
});

// Function to check if an element is in the viewport
function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  return (
    rect.top <= window.innerHeight &&
    rect.bottom >= 0
  );
}

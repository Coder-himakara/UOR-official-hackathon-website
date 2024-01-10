// script.js

document.addEventListener('DOMContentLoaded', function () {
  const revealContainers = document.querySelectorAll('.responsive-robo-container');

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  function handleScroll() {
    revealContainers.forEach((container) => {
      if (isInViewport(container) && !container.classList.contains('reveal')) {
        container.classList.add('reveal');
      }
    });
  }

  // Initial check on page load
  handleScroll();

  // Listen for scroll events
  window.addEventListener('scroll', handleScroll);
});

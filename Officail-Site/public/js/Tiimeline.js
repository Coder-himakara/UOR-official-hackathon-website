window.addEventListener("scroll", function () {
var timelineSec = document.querySelector('.timelineSec');
var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            timelineSec.classList.add('animate-scroll');
        } else {
            timelineSec.classList.remove('animate-scroll');
        }
    }); 
});
observer.observe(timelineSec);
});
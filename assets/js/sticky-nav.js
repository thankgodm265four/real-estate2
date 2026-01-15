// Sticky Navigation for all pages
// Add this to any page that needs a sticky navbar

document.addEventListener('DOMContentLoaded', function () {
    const nav = document.getElementById('mainNav');

    if (nav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }
});

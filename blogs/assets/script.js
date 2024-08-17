document.addEventListener('DOMContentLoaded', function () {
    const navButton = document.getElementById('mobile-nav-button');
    const header = document.getElementById('mobile-header');

    if (navButton && header) {
        navButton.addEventListener('click', function () {
            header.classList.toggle('open');
        });
    } else {
        console.error('Element(s) not found.');
    }
});
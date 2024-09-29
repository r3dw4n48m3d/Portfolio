document.addEventListener("DOMContentLoaded", function() {
    let terminalBody = document.querySelector('.terminal-body');
    let backLink = document.querySelector('.back-link');

    // Add cool transition for the back link hover
    backLink.addEventListener('mouseenter', function() {
        backLink.style.color = '#ff69b4';
    });

    backLink.addEventListener('mouseleave', function() {
        backLink.style.color = '#00ff00';
    });
});

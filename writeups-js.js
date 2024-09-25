document.addEventListener("DOMContentLoaded", function() {
    let terminalBody = document.querySelector('.command');
    let commandText = "ls ~/writeups/";
    let cursor = document.getElementById("blinking-cursor");

    // Typing effect
    let index = 0;
    function typeCommand() {
        if (index < commandText.length) {
            terminalBody.innerHTML += commandText.charAt(index);
            index++;
            setTimeout(typeCommand, 100); // 100ms typing delay
        } else {
            cursor.style.display = "inline";
        }
    }

    // Fade-in effects for list items
    const fadeItems = document.querySelectorAll('.fade-in');
    fadeItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = 1; // Set opacity to 1 to show item
            item.style.transform = 'translateY(0)'; // Move item into position
        }, index * 300); // Stagger the fade-in effect
    });

    setTimeout(typeCommand, 1000); // Start typing after 1 second
});

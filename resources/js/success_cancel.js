// Countdown timer
let countdownElement = document.getElementById('countdown');
let redirectButton = document.getElementById('redirect-btn');
let countdown = 10;

// Update countdown every second
const timer = setInterval(() => {
    countdown--;
    countdownElement.textContent = countdown;

    // Redirect when countdown reaches 0
    if (countdown <= 0) {
        clearInterval(timer);
        window.location.href = trangchuUrl;
    }
}, 1000);

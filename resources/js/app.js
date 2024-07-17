// Function to start the countdown
require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function startCountdown() {
    var timer = 4;
    var startTimer = setInterval(function () {
        timer = timer - 1;
        document.getElementsByClassName("breathing")[0].innerHTML = timer;

        if (timer == 1) {
            clearInterval(startTimer);
            breathIn();
        }
    }, 1000);
}
startCountdown();

// Function to handle the breathing in phase
function breathIn() {
    document.getElementsByClassName("breathing")[0].innerHTML = "Breath In";
    document.getElementsByClassName("main-circle-container")[0].classList.add('main-circle-container-large');

    var startBreathing = setInterval(function () {
        document.getElementsByClassName("breathing")[0].innerHTML = "Hold";
        clearInterval(startBreathing);
        breathOut();
    }, 6000);
}

// Function to handle the breathing out phase
function breathOut() {
    var holdBreath = setInterval(function () {
        document.getElementsByClassName("breathing")[0].innerHTML = "Breath Out";
        document.getElementsByClassName("main-circle-container")[0].classList.remove('main-circle-container-large');
        clearInterval(holdBreath);
        showCompletionModal();
    }, 3000);
}

// Function to show the completion modal
function showCompletionModal() {
    $('#endExerciseModal').modal('show');
}

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true,
});

// script.js
const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');

toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
});

const form = document.querySelector("form");
form.addEventListener("submit", function(event) {
    event.preventDefault();

const feedback = document.createElement("div");
feedback.textContent = "Mensagem enviada com sucesso!";
feedback.style.color = "red";
feedback.style.fontSize = "20px";
feedback.style.marginTop = "20px";

form.appendChild(feedback);
form.reset();
});
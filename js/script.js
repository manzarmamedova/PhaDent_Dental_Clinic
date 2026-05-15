
// Burger menu toggle
document.addEventListener("DOMContentLoaded", function () {

    const menuBtn = document.createElement("div");
    menuBtn.classList.add("burger");
    menuBtn.innerHTML = "☰";

    const nav = document.querySelector(".navbar");
    const header = document.querySelector(".header");

    header.appendChild(menuBtn);

    menuBtn.addEventListener("click", function () {
        nav.classList.toggle("active");
        menuBtn.classList.toggle("open");
    });

});
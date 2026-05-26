document.addEventListener("DOMContentLoaded", function () {

    // ================= BURGER MENU =================
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


    // ================= FORM VALIDATION =================
    const form = document.querySelector(".contact-form");

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const name = document.querySelector("#name").value.trim();
            const email = document.querySelector("#email").value.trim();
            const message = document.querySelector("#message").value.trim();

            if (!name || !email || !message) {
                alert("Please fill all required fields!");
                return;
            }

            // basit email kontrolü
            if (!email.includes("@")) {
                alert("Please enter a valid email!");
                return;
            }

            alert("Appointment request sent successfully!");

            form.reset();
        });
    }

});
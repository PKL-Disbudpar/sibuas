document.addEventListener("DOMContentLoaded", function () {
    const mobileMenu = document.getElementById("mobile-menu");
    const nav = document.querySelector("nav");
    const dropdownBtn = document.querySelector(".dropbtn");
    const dropdownMenu = document.querySelector(".dropdown");

    mobileMenu.addEventListener("click", function () {
        nav.classList.toggle("active");
    });

    dropdownBtn.addEventListener("click", function () {
        dropdownMenu.classList.toggle("active");
    });

    // Close dropdown on click outside
    document.addEventListener("click", function (event) {
        if (
            !dropdownBtn.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.classList.remove("active");
        }
    });
});

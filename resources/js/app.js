document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector("#menuToggle");
    const navMenu = document.querySelector("#navMenu");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", () => {
            const isOpen = navMenu.classList.toggle("show");

            menuToggle.setAttribute("aria-expanded", isOpen);
            menuToggle.textContent = isOpen ? "Tutup" : "Menu";
        });
    }
});

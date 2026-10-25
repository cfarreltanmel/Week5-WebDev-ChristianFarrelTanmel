document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggleOpen");
    const menu = document.getElementById("collapseMenu");

    toggleBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
        const isExpanded =
            menu.classList.contains("flex") &&
            !menu.classList.contains("hidden");
        toggleBtn.setAttribute("aria-expanded", isExpanded);
    });
});

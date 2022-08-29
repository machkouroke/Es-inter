const body = document.querySelector("body"),
    sidebar = document.querySelector("nav"),
    sidebarToggle = document.querySelector(".sidebar-toggle");

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})
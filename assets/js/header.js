const toggle_btn = document.getElementById("menu-toggle-btn");
const toggle_container = document.getElementById("menu-container");


toggle_btn.addEventListener("click", () => {
    toggle_container.classList.toggle("active");
    toggle_btn.classList.toggle("active");
});


function close_drawer() {
    document.getElementById('menu-toggle-btn').click()
}


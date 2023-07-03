const menu = document.getElementById("menu");
const menu_drawer = document.getElementById("menu-drawer")
const menu_overlay = document.getElementById("menu-overlay")

menu.addEventListener('click', () => {
    menu_overlay.style.opacity = 1;
    menu_overlay.style.visibility = "visible";
    menu_drawer.style.transform = "translateX(0)";
})

menu_overlay.addEventListener('click', () => {
    menu_overlay.style.opacity = 0;
    menu_overlay.style.visibility = "hidden";
    menu_drawer.style.transform = "translateX(-100%)";
})
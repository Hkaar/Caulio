/**
 * A function to toggle the side bar
 */
function toggleSideBar() {
    const sideBar = document.getElementById("sideBar");

    if (sideBar?.classList.contains("-translate-x-full")) {
        sideBar.classList.replace("-translate-x-full", "translate-x-0");
    } else {
        sideBar?.classList.replace("translate-x-0", "-translate-x-full");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    'use strict'

    const sideBarToggles = document.querySelectorAll(".sideBarToggle");

    sideBarToggles.forEach((e) => {
        e.addEventListener("click", toggleSideBar);
    })
})
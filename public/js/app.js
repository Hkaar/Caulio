/**
 * A function to toggle the side bar
 */
function toggleSideBar() {
    const sideBar = document.getElementById("sideBar");
    const sideBarMenus = document.querySelectorAll(".menu-text");

    if (sideBar?.classList.contains("-translate-x-full") || sideBar?.classList.contains("md:max-w-20")) {
        sideBar.classList.replace("-translate-x-full", "translate-x-0");
        sideBar.classList.replace("md:max-w-20", "md:max-w-48");

        sideBarMenus.forEach((e) => {
            e.classList.remove("hidden");
        })
    } else {
        sideBar?.classList.replace("translate-x-0", "-translate-x-full");
        sideBar?.classList.replace("md:max-w-48", "md:max-w-20");

        sideBarMenus.forEach((e) => {
            e.classList.add("hidden");
        })
    }
}

document.addEventListener("DOMContentLoaded", () => {
    'use strict'

    const sideBarToggles = document.querySelectorAll(".sideBarToggle");

    sideBarToggles.forEach((e) => {
        e.addEventListener("click", toggleSideBar);
    })
})
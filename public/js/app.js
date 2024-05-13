/**
 * A function to toggle the side bar
 */
function toggleSideBar() {
    const sideBar = document.getElementById("sideBar");
    const sideBarMenus = document.querySelectorAll(".menu-text");

    if (sideBar?.classList.contains("-translate-x-full") || sideBar?.classList.contains("min-w-16")) {
        sideBar.classList.replace("-translate-x-full", "translate-x-0");
        sideBar.classList.replace("min-w-16", "min-w-80");

        sideBarMenus.forEach((e) => {
            e.classList.remove("hidden");
        })
    } else {
        sideBar?.classList.replace("translate-x-0", "-translate-x-full");
        sideBar?.classList.replace("min-w-80", "min-w-16");

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
    });

    document.addEventListener("change", (event) => {
        // @ts-ignore
        if (event.target && event.target.id === "img") {
            // @ts-ignore
            let file = event.target.files[0];
            let preview = document.getElementById('preview');
    
            if (file) {
                let reader = new FileReader();
    
                reader.onload = (e) => {
                    // @ts-ignore
                    let result = e.target.result;
    
                    if (file.type.startsWith('image') && result) {
                        let img = document.createElement('img');
                        // @ts-ignore
                        img.src = result;
                        img.className = 'size-36 md:size-72 rounded-full object-cover';
                        // @ts-ignore
                        preview.innerHTML = '';
                        // @ts-ignore
                        preview.appendChild(img);
                    } else {
                        // @ts-ignore
                        preview.innerHTML = 'Image not available';
                    }
                };
    
                reader.readAsDataURL(file);
            } else {
                // @ts-ignore
                preview.innerHTML = '';
            }
        }
    });    
})
let filter = document.querySelector("[data-filter]");
let side_nav_btn = document.querySelector("[data-side-nav-toggler-btn]");
let sideNav = document.querySelector("[data-side-nav]");

// open
filter.onclick = () => {

    sideNav.classList.toggle("active");
    side_nav_btn.classList.toggle("active");
    menu.classList.toggle("bx-message-square-x");

}
//close

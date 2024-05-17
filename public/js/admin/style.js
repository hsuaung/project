let btn = document.querySelector(".side-menu-bar");
let sidebar = document.querySelector(".sidebar");
// let item = document.querySelector(".hidden");
// let right = document.querySelector(".right");
btn.onclick = function () {
    sidebar.classList.toggle("expand");
    // item.classList.toggle("active");
    // right.classList.toggle("active");
}


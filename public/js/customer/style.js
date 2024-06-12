// let btn = document.querySelector(".ham-menu");
// let nav = document.querySelector(".nav-menu");
// // let item = document.querySelector(".hidden");
// // let right = document.querySelector(".right");
// btn.onclick = function () {
//     ham-menu.classList.toggle("active");
    
// }


const hamburger=document.querySelector(".ham-menu");
const navMenu=document.querySelector(".nav-menu");
const closeMenu=document.querySelector(".close-menu");


hamburger.addEventListener("click",()=>
{
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})
closeMenu.addEventListener("click",()=>
    {
navMenu.classList.toggle("active");

})


document.querySelectorAll(".nav-link").forEach(n=>n.addEventListener("click",()=>{
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    
}))




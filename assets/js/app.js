
let navToggle = document.getElementById("navToggle");

let navBar = document.getElementById("navbar");


function showNav() {
    navBar.style.display = 'block';
    navBar.style.height = '70%';
    navBar.style.zIndex = 1;
}

function closeNav() {
    navBar.style.display = 'none';
}
const sideBar = document.getElementById("sideBar");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
sideBar.classList.add("active");
}

function closeNav() {
sideBar.classList.remove("active");
}


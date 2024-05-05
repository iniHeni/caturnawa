const menu = document.querySelector(".menu");
const x_menu = document.querySelector(".x-menu");
const nav_content = document.getElementById("nav-content");

if (menu || x_menu) {
  x_menu.classList.add("not-active");
  menu.addEventListener("click", function () {
    menu.classList.toggle("not-active");
    x_menu.classList.toggle("not-active");
    nav_content.classList.toggle("active");
  });

  x_menu.addEventListener("click", function () {
    menu.classList.toggle("not-active");
    x_menu.classList.toggle("not-active");
    nav_content.classList.toggle("active");
  });

  nav_content.addEventListener("click", function () {
    menu.classList.toggle("not-active");
    x_menu.classList.toggle("not-active");
    nav_content.classList.toggle("active");
  });
}

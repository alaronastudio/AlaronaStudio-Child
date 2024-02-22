document.querySelectorAll(".menu-item-lang").forEach((item) => {
  item.addEventListener("click", () => {
    item.querySelector(".submenu-lang").classList.toggle("submenu--active");         
  });
});


const menuLangLink = document.querySelector('.menu-item-lang > a');
const headerColC = document.querySelector('header .row .col-c');

menuLangLink.addEventListener('click', () => {
  headerColC.classList.toggle('lightBox');
});


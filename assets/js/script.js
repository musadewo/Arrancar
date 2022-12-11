let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menuBtn.onclick = () =>{
  navbar.classList.toggle('active');
  colorsPalette.classList.remove('active');
}

window.onscroll = () =>{
  navbar.classList.remove('active');
  colorsPalette.classList.remove('active');
}
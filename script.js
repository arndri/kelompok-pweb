let tmblSearch = document.querySelector('#search-btn');
let barSearch = document.querySelector('.search-container');
let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');
let tmblVid = document.querySelectorAll('.vid-btn');


window.onscroll = () =>{
    tmblSearch.classList.remove('fa-times');
    barSearch.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

menu.addEventListener('click',() =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
});

tmblSearch.addEventListener('click', () =>{
  tmblSearch.classList.toggle('fa-times');
  barSearch.classList.toggle('active');
});

tmblVid.forEach(tmbl =>{
  tmbl.addEventListener('click', ()=>{
    document.querySelector('.kontrol .active').classList.remove('active');
    tmbl.classList.add('active');
    let src = tmbl.getAttribute('data-src');
    document.querySelector('#slider').src = src;
  });
});

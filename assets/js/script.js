var stickySidebar = $('.sticky');

if (stickySidebar.length > 0) {
  var stickyHeight = stickySidebar.height(),
    sidebarTop = stickySidebar.offset().top;
}


$(window).resize(function () {
  if (stickySidebar.length > 0) {
    stickyHeight = stickySidebar.height();
  }
});

//le bouton découvrir de la page d'accueil qui amène a la partie découvrir 
document.getElementById('buttonDiscover').onclick = () => {
  if (window.innerWidth > 765) {
    window.scrollTo(0, 889);
  } else {
    window.scrollTo(0, 787);
  }
}

//le bouton découvrir de la navbar qui amène a la partie découvrir 
document.getElementById('discoverNavbar').onclick = () => {
  if (window.innerWidth > 765) {
    window.scrollTo(0, 889);
  } else {
    window.scrollTo(0, 787);
  }
}


//Partie navbar
let navbar = document.getElementById('navbar');

window.onscroll = () => {
  if (window.scrollY >= 10) {
    navbar.style.backgroundColor = 'rgba(40,45,50,0.8)';
    navbar.style.borderBottom = 'solid 2px white';
  } else {
    navbar.style.backgroundColor = 'rgba(0,0,0,0)';
    navbar.style.borderBottom = 'none';
  }
  // Partie flèche 
  if (window.scrollY <= 90) {
    btn.classList.add('d-none');
  } else {
    btn.classList.remove('d-none');
  }
}
let btn = document.getElementById('divArrow');

btn.onclick = () => {
  window.scrollTo(0, 0);
}
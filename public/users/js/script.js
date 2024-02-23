$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });


    
    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Baju", "Celana", "Sarung", "Badcover", "Selimut", "Kebaya", "Jas", "Mukena"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2", {
        strings: ["Cucian Karpet", "Cucian Badcover", "Cucian Kebaya", "Cucian Jas", "Cucian Mukena"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});

function showhidden()  {
  const list = document.getElementById("invoice").classList;
  list.remove("hidden");
}


function validateForm() {
 let x = document.forms["myForm"]["keyword"].value;
   const list = document.getElementById("invoice").classList;
  if (x ) {
      list.remove("hidden");
    return false;
  }
}

const menu = document.querySelector(".menu");
menu.addEventListener('click', function(e) {
    const targetMenu = e.target;
    if(targetMenu.classList.contains('menu-btn')) {
        const menuLinkActive = document.querySelector("ul li a.active");
        if(menuLinkActive !== null && targetMenu.getAttribute('href') !== menuLinkActive.getAttribute('href')) {
            menuLinkActive.classList.remove('active');
        }
        targetMenu.classList.add('active');
    }
});

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 200,
//     reset: true
});

sr.reveal('.home, .service, .about, .contact',{}); 


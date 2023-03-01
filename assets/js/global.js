$(document).ready(function () {
    var path = window.location.href;
    $('nav ul li a').each(function () {
        if (this.href === path) {
            $(this).css('color', '#ff6900');
        }
    });
});


window.onscroll = function(){
    navfixed()
}

let navbar = document.getElementById('sticky-navbar');
let sticky = navbar.offsetTop;

function navfixed(){
    if (window.pageYOffset > sticky) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
};


$('#menu-burger').on('click', function(){

    if($('.mobile').css('right')=='-500px'){
        $('.mobile').animate({right:0},600);
    }else{
        $('.mobile').animate({right:-500},600);
    }
    
});

$('#menu-fermer').on('click', function(){
    $('.mobile').animate({right:-500},500);
});

$('.mobile li').on('click',function(){
    $('.mobile').animate({right:-500},500);
});


$(document).ready(function(){
    $('.num').counterUp({
      time: 1200
    });
  });


function send_mail(event) {

    let nom = document.getElementById('nom').value;
    let email = document.getElementById('email').value;
    let telephone = document.getElementById('phone').value;
    let sujet = document.getElementById('subject').value;
    let message = document.getElementById('message').value;


    if (nom != "" && email != "" && telephone != "" && sujet != "" && message != "") {


    } else {
        event.preventDefault();
        document.getElementById('nom').style.borderColor = "red";
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('phone').style.borderColor = "red";
        document.getElementById('subject').style.borderColor = "red";
        document.getElementById('message').style.borderColor = "red";


        document.getElementById('empty').innerHTML = "Remplissez tous les champs obligatoires";
    }


    console.log(nom, email, telephone, sujet, message);
}

function onSubmit(token) {
    document.getElementById("recaptcha").submit();
}



//SLIDER
let i = 0 // current slide
let j = 4 // total slides

const dots = document.querySelectorAll(".dot-container button");
const views = document.querySelectorAll(".slide-client");
console.log(views);

function next() {
    document.getElementById("content" + (i + 1)).classList.remove("active");
    i = (j + i + 1) % j;
    document.getElementById("content" + (i + 1)).classList.add("active");
    indicator(i + 1);
}

function prev() {
    document.getElementById("content" + (i + 1)).classList.remove("active");
    i = (j + i - 1) % j;
    document.getElementById("content" + (i + 1)).classList.add("active");
    indicator(i + 1);
}

var idInterval = window.setInterval(function() {
    next();
}, 6000) //=6sec

function indicator(num) {
    dots.forEach(function(dot) {
        dot.style.backgroundColor = "white";
    });
    document.querySelector(".dot-container button:nth-child(" + num + ")").style.backgroundColor = "#ff6900";
}

function dot(index) {
    views.forEach(function(views) {
        views.classList.remove("active");
    });
    document.getElementById("content" + index).classList.add("active");
    i = index - 1;
    indicator(index);
}

$('.main-carousel').flickity({
    // options
    wrapAround: true,
    freeScroll: true,
});

const accordion = document.getElementsByClassName('accordion');

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
        this.classList.toggle('active')
    })
}
/*
* Hero slider js
* */
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        }
    }
});

// Hide topbar
function scrollUp() {
    const scrollUp = document.getElementById('topbar');
//    When the scroll is higher than 50 viewport, add the hide-topbar class to the topbar div.
    if(this.scrollY >= 50) scrollUp.classList.add('hide-topbar');
    else scrollUp.classList.remove('hide-topbar')
}
window.addEventListener('scroll', scrollUp)

// Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})


// toggle password
function togglePW(){
    var password = document.querySelector('[name=password]');

    if(password.getAttribute('type') === 'password') {
        password.setAttribute('type', 'text');
        document.getElementById('review').classList.remove('fa-eye')
        document.getElementById('review').classList.add('fa-eye-slash')
    }
    else {
        password.setAttribute('type', 'password');
        document.getElementById('review').classList.remove('fa-eye-slash')
        document.getElementById('review').classList.add('fa-eye')
    }
}

// toggle password
function togglePWD(){
    var confirmPassword = document.querySelector('[name=password_confirmation]');

    if(confirmPassword.getAttribute('type') === 'password') {
        confirmPassword.setAttribute('type', 'text');
        document.getElementById('reviewer').classList.remove('fa-eye')
        document.getElementById('reviewer').classList.add('fa-eye-slash')
    }
    else {
        confirmPassword.setAttribute('type', 'password');
        document.getElementById('reviewer').classList.remove('fa-eye-slash')
        document.getElementById('reviewer').classList.add('fa-eye')
    }
}


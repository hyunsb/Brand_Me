// nav connect
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close');

// 메뉴 show
if(navToggle) {
    navToggle.addEventListener('click', ()=>{
        navMenu.classList.add('show-menu');
    });
}

// 메뉴 hidden
if(navClose) {
    navClose.addEventListener('click', ()=>{
        navMenu.classList.remove('show-menu');
    })
}


// 메뉴 아이템 클릭 시 메뉴 hidden

const navLink = document.querySelectorAll('.nav__link');

function linkAction(){
    const navMenu = document.getElementById('nav-menu');
    // nav-menu의 각 요소를 클릭했을 시 메뉴 hidden
    navMenu.classList.remove('show-menu');
}
navLink.forEach(n => n.addEventListener('click', linkAction));


// =========================== SKILLS 클릭 이벤트 ====================================//
const skillsContent = document.getElementsByClassName('skills__content'),
        skillsHeader = document.querySelectorAll('.skills__header');

function toggleSkills() {
    let itemClass = this.parentNode.className;

    // for(i = 0; i < skillsContent.length; i++){
    //     skillsContent[i].className = 'skills__content skills__close';
    // }

    if(itemClass === 'skills__content skills__close') {
        this.parentNode.className = 'skills__content skills__open';
    } else {
        this.parentNode.className = 'skills__content skills__close';
    }
}

skillsHeader.forEach((el) => {
    el.addEventListener('click', toggleSkills);
})

// =========================== QUALIFICATION TABS ====================================//
const tabs = document.querySelectorAll('[data-target]');
const tabContents = document.querySelectorAll('[data-content]');

tabs.forEach(tab => {
    tab.addEventListener('click', ()=>{
        const target = document.querySelector(tab.dataset.target);

        tabContents.forEach(tabContents =>{
            tabContents.classList.remove('qualification__active');
        });
        target.classList.add('qualification__active');

        tabs.forEach(tab => {
            tab.classList.remove('qualification__active');
        });
        tab.classList.add('qualification__active')
    });
});


// =========================== SERVICE MODAL ====================================//
const modalViews = document.querySelectorAll('.services__modal');
const modalBtns = document.querySelectorAll('.services__button');
const modalCloses = document.querySelectorAll('.services__modal-close');

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active-modal');
}

modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener('click', ()=>{
        modal(i);
    });
});

modalCloses.forEach((modalClose) => {
    modalClose.addEventListener('click', () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove('active-modal');
        });
    });
});

// =========================== SCROLL SECTION ACTIVE LINK ====================================//
const sections = document.querySelectorAll('section[id]');

function scrollActive(){
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50;
        const sectionId = current.getAttribute('id');

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link');
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link');
        }
    });
}
window.addEventListener('scroll', scrollActive);


// =========================== CHANGE BACKGROUND HEADER ====================================//
function scrollHeader(){
    const nav = document.getElementById('header');
    if(this.scrollY >= 80) {
        nav.classList.add('scroll-header');
    }else{
        nav.classList.remove('scroll-header');
    }
}
window.addEventListener('scroll', scrollHeader);


// =========================== SHOW SCROLL UP ====================================//
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    if(this.scrollY >= 560){
        scrollUp.classList.add('show-scroll');
    }else{
        scrollUp.classList.remove('show-scroll');
    }
}
window.addEventListener('scroll',scrollUp);


// =========================== DARK LIGHT THEME ====================================//
const themeButton = document.getElementById('theme-button');
const darkTheme = 'dark-theme';
const iconTheme = 'uil-sun';

const selectedTheme = localStorage.getItem('selected-theme');
const selectedIcon = localStorage.getItem('selected-icon');

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light';
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'uil-moon' : 'uil-sun';

if (selectedTheme) {
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme);
    themeButton.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme);
}

themeButton.addEventListener('click', ()=>{
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);

    localStorage.setItem('selected-theme', getCurrentTheme());
    localStorage.setItem('selected-icon', getCurrentIcon());
});

// ============== PORTFOLIO SWIPER ERROR => HTML SCRIPT TAG  ======================//
// import Swiper from './swiper-bundle.min.js'

// var swiper = new Swiper('.portfolio__container', {
//     cssMode: true,
//     loop : true,

//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
//     pagination: {
//       el: '.swiper-pagination'
//     },
//   });
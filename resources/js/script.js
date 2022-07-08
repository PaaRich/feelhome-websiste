// this is for the menubutton

var toggleBar = document.querySelector('#toggle'),
    menuBtn = document.querySelector('#menu-btn'),
    toggleMenu = document.querySelector('nav');

function toggleState(btn, width, position, display) {
    btn.addEventListener('click', e => {
        toggleMenu.style.width = width;
        toggleMenu.style.left = position;
        document.querySelector('header div button').style.display = display;
    })
}
toggleState(menuBtn, '250px', '0%', 'none');
toggleState(toggleBar, '0px', '-100%', 'block');

// this is for the top button
var pageLength = document.querySelector('html'),
    topBtn = document.querySelector('.top'),
    displayHeight = Math.floor((Math.max(pageLength.offsetHeight, pageLength.clientHeight, pageLength.scrollHeight)) / 3);
window.addEventListener('scroll', e => {
    e.stopPropagation();
    if (pageLength.scrollTop >= displayHeight) {
        topBtn.style.display = 'block';
    } else {
        topBtn.style.display = 'none';
    }
})
topBtn.addEventListener('click', e => {
    // trynna use setinterval here to make the top going smooth attempts make the page irresponsive.
    pageLength.scrollTop = 0;
    // setInterval(() => {
    //     let i = pageLength.scrollTop;
    //     while (i > 0) {
    //         i = i - (pageLength.scrollTop) / 4;
    //     }
    //     return i;
    // }, 1000)
})

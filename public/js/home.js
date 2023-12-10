
/*function loading(){
    alert('این سایت فقط جنبه نمونه کار دارد');
    alert('یک نکته : این سایت هم فرانت هم بک از صفر کدنویسی شده و از هیچ قالبی استفاده نشده');
}*/

//navbar2 sidebar//
    const theBody = document.querySelector('body');
    const openNav = document.querySelector('.menu-bar button.menu-btn');
    const closeNav = document.querySelector('.close-nav button.exit');
    const Navbar = document.querySelector('.sidebar');
    openNav.onclick = showHide;
    closeNav.onclick = showHide;
    function bodyScroll() {
        if (Navbar.classList.contains('show')) {
            theBody.classList.add('hide-scroll');
        } else if (theBody.classList.contains('hide-scroll')) {
            theBody.classList.remove('hide-scroll');
        }
    }
    function showHide() {
        Navbar.classList.toggle('show');
        bodyScroll()
    }

//side menu dropdowns//
    function drop1() {
        const click = document.getElementById("list-items1");
        if (click.style.display === "none") {
            click.style.display = "block";
        } else {
            click.style.display = "none";
        }
    }
    function drop2() {
        const click = document.getElementById("list-items2");
        if (click.style.display === "none") {
            click.style.display = "block";
        } else {
            click.style.display = "none";
        }
    }
    function drop3() {
        const click = document.getElementById("list-items3");
        if (click.style.display === "none") {
            click.style.display = "block";
        } else {
            click.style.display = "none";
        }
    }
    function drop4() {
        const click = document.getElementById("list-items4");
        if (click.style.display === "none") {
            click.style.display = "block";
        } else {
            click.style.display = "none";
        }
    }

/* home slideshow */

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}

/*automatic slideshow*/

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2500);
}

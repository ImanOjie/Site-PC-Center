
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










document.addEventListener("DOMContentLoaded", function () {
    // Main Template Color
    var brandPrimary = "#33b35a";

    // ------------------------------------------------------- //
    // Side Navbar Functionality
    // ------------------------------------------------------ //
    const sidebarToggleBtn = document.getElementById("toggle-btn");
    const sidebar = document.querySelector(".side-navbar");
    const navHolder = document.querySelector("nav.navbar");
    const pageHolder = document.querySelector(".page");
    const sidebarHeading = document.querySelectorAll(".side-navbar .heading");

    if (sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (window.outerWidth > 1194) {
                sidebar.classList.toggle("shrink");
                navHolder.classList.toggle("active");
                pageHolder.classList.toggle("active");
                sidebarHeading.forEach((el) => {
                    el.classList.toggle("mx-lg-2");
                });
            } else {
                sidebar.classList.toggle("show-sm");
                navHolder.classList.toggle("active-sm");
                pageHolder.classList.toggle("active-sm");
            }
        });
    }

    // Wrap every letter in a span
    var textWrapper = document.querySelector('.greeting .second-greeting');
    textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='second-greeting'>$&</span>");

    anime.timeline({
            loop: false
        })
        .add({
            targets: '.greeting .line',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700
        })
        .add({
            targets: '.greeting .line',
            translateX: [0, document.querySelector('.greeting .second-greeting').getBoundingClientRect().width + 10],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
        }).add({
            targets: '.greeting .second-greeting',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i + 1)
        }).add({
            targets: '.greeting',
            opacity: 100,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });

});

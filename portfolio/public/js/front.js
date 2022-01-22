document.addEventListener("DOMContentLoaded", function () {
    // Main Template Color
    var brandPrimary = "#33b35a";

    // ------------------------------------------------------- //
    // Side Navbar Functionality
    // ------------------------------------------------------ //
    const sidebarToggleBtn = document.getElementById("toggle-btn");
    const sidebar = document.querySelector(".side-navbar");
    const pageHolder = document.querySelector(".page");
    const sidebarHeading = document.querySelectorAll(".side-navbar .heading");

    if (sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (window.outerWidth > 1194) {
                sidebar.classList.toggle("shrink");
                pageHolder.classList.toggle("active");
                sidebarHeading.forEach((el) => {
                    el.classList.toggle("mx-lg-2");
                });
            } else {
                sidebar.classList.toggle("show-sm");
                pageHolder.classList.toggle("active-sm");
            }
        });
    }


});

const toggle = document.getElementById("menuToggle");
const nav = document.getElementById("navMenu");
const submenuToggles = document.querySelectorAll(".submenu-toggle");
const submenuLinks = document.querySelectorAll(".has-submenu > span");

toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    nav.classList.toggle("active");
});

function closeOtherSubmenus(current) {
    submenuToggles.forEach((btn) => {
        const parent = btn.closest(".has-submenu");
        if (parent !== current) {
            parent.classList.remove("active");
        }
    });
}

submenuToggles.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        if (window.innerWidth <= 1024) {
            e.preventDefault();
            e.stopPropagation();
            const parent = btn.closest(".has-submenu");
            closeOtherSubmenus(parent);
            parent.classList.toggle("active");
        }
    });
});

submenuLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
        if (window.innerWidth <= 1024) {
            e.preventDefault();
            e.stopPropagation();
            const parent = link.closest(".has-submenu");
            closeOtherSubmenus(parent);
            parent.classList.toggle("active");
        }
    });
});

document.addEventListener("click", (e) => {
    const isClickInsideNav = nav.contains(e.target);
    const isClickOnToggle = toggle.contains(e.target);

    if (!isClickInsideNav && !isClickOnToggle) {
        nav.classList.remove("active");

        submenuToggles.forEach((btn) => {
            btn.closest(".has-submenu").classList.remove("active");
        });
    }
});

window.addEventListener("scroll", () => {
    nav.classList.remove("active");
    if (window.innerWidth <= 1024) {
        submenuToggles.forEach((btn) => {
            btn.closest(".has-submenu").classList.remove("active");
        });
    }
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 1024) {
        nav.classList.remove("active");
        submenuToggles.forEach((btn) => {
            btn.closest(".has-submenu").classList.remove("active");
        });
    }
});
function verMas() {
    const texto = document.getElementById("textoOculto");
    const puntos = document.getElementById("puntos");
    const btn = document.getElementById("btnVerMas");

    if (texto.style.display === "none") {
        texto.style.display = "inline";
        puntos.style.display = "none";
        btn.innerText = "Ver menos";
    } else {
        texto.style.display = "none";
        puntos.style.display = "inline";
        btn.innerText = "Ver más";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.swiper', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 3,
        spaceBetween: 30,
        effect: "coverflow",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});

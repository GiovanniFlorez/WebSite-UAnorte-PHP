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

// Esperar a que el DOM cargue completamente
document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
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

function verMas() {
    const texto = document.getElementById("textoOculto");
    const puntos = document.getElementById("puntos");
    const btn = document.getElementById("btnVerMas");

    texto.classList.toggle("oculto");
    puntos.classList.toggle("oculto");

    if (texto.classList.contains("oculto")) {
        btn.innerText = "Ver más";
    } else {
        btn.innerText = "Ver menos";
    }
}

function verMas2() {
    const texto = document.getElementById("textoOculto2");
    const puntos = document.getElementById("puntos2");
    const btn = document.getElementById("btnVerMas2");

    texto.classList.toggle("oculto2");
    puntos.classList.toggle("oculto2");

    if (texto.classList.contains("oculto2")) {
        btn.innerText = "Ver más";
    } else {
        btn.innerText = "Ver menos";
    }
}

function verMas3() {
    const texto = document.getElementById("textoOculto3");
    const puntos = document.getElementById("puntos3");
    const btn = document.getElementById("btnVerMas3");

    texto.classList.toggle("oculto3");
    puntos.classList.toggle("oculto3");

    if (texto.classList.contains("oculto3")) {
        btn.innerText = "Ver más";
    } else {
        btn.innerText = "Ver menos";
    }
}
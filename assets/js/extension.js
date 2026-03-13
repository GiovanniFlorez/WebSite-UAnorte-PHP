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
document.querySelectorAll('.formularioAjax').forEach(formulario => {

    formulario.addEventListener('submit', async function(e) {

        e.preventDefault();

        const datos = new FormData(formulario);

        try {

            const respuesta = await fetch(formulario.action, {
                method: 'POST',
                body: datos
            });

            const resultado = await respuesta.text();

            if(resultado.trim() === 'ok') {

                Swal.fire({
                    icon: 'success',
                    title: 'Mensaje enviado',
                    text: 'Tu mensaje fue enviado correctamente',
                    confirmButtonColor: '#3085d6'
                });

                formulario.reset();

                const boton = formulario.querySelector('#botonEnviar');

                if(boton){
                    boton.disabled = true;
                }

            } else {

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: resultado
                });

            }

        } catch(error) {

            Swal.fire({
                icon: 'error',
                title: 'Error de conexión',
                text: 'No se pudo enviar el formulario'
            });

        }

    });

});
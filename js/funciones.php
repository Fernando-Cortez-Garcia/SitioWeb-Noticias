<script>
    function verificarPasswords() {
        var pass1 = document.getElementById('f_password').value;
        var pass2 = document.getElementById('f_password2').value;
        // hide

        if (pass1 == pass2) {

            document.getElementById('msj_error').style.display = "none"; // hide
            document.getElementById('msj_ok').style.display = ''; // show
            document.getElementById('msj_ok').innerHTML = "Contraseñas iguales";
            document.getElementById('msj_error').style.display = "none"; // hide

        } else {
            document.getElementById('msj_ok').style.display = "none"; // 
            document.getElementById('msj_error').style.display = ''; // hide
            document.getElementById("msj_error").innerHTML = "Las contraseñas son diferentes";
        }
    }

    function abrirNuevoTab(url) {
            // Abrir nuevo tab
            var win = window.open(url);
            // Cambiar el foco al nuevo tab (punto opcional)
            win.focus();
        }
        $('#open').click(function(){
            abrirNuevoTab('inicionoticias.php');
    })

    function mensajeok(){
        var mensaje = document.getElementBy('mensaje');
        mensaje.innerHTML = `
        <div class="alert alert-danger fixed-top text-center" role="alert"><i class="fa-solid fa-circle-exclamation"></i> Datos Guardados  
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        `;
    }
    function mensajeError(){
        var mensaje = document.getElementBy('mensaje');
        mensaje.innerHTML = `
        <div class="alert alert-danger fixed-top text-center" role="alert"><i class="fa-solid fa-circle-exclamation"></i> Ocurrio un pmroblema, Intentelo de nuevo.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        `;
    }
    

</script>
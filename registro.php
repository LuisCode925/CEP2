<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!-- Estilos de CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Alertify CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <title>Registro</title>
</head>
<body>
    
    <?php require_once('./includes/header.php'); ?>

    <main class="contenedor sombra panel">

        <h2>Formulario de Registro</h2>

        <form id="registro" action="registro.php" method="POST" autocomplete="off">
            <div>
                <h3>Informacion Personal</h3>

                <div>
                    <label for="nombre">Nombre(s):</label>
                    <input type="text" name="nombre" id="nombre">
                </div>

                <div>
                    <label for="apellido">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos">
                </div>

                <div>
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" id="correo">
                </div>
                
                <div>
                    <label for="passwd">Contraseña:</label>
                    <input type="password" name="passwd" id="passwd">
                </div>

                <div>
                    <label for="repass">Confirmar Contraseña:</label>
                    <input type="password" name="repass" id="repass">
                </div>
                
                <div class="flex-just-cont">

                    <div class="terminos">
                        <input type="checkbox" name="terminos" id="terminos">
                        <label for="terminos">Aceptar Términos y Condiciones</label>
                    </div>

                    <input class="btn" type="submit" value="Crear cuenta" id="btn-registrar">
                
                </div>
                
            </div>
        </form>
    </main>

    <?php require_once('./includes/footer.php'); ?>

    <script>
        $(document).ready(function () {

            $( "#registro" ).submit( ( event ) => {
                if ($("#nombre").val().length == 0 || $("#apellidos").val().length == 0 || 
                    $("#correo").val().length == 0 || $("#passwd").val().length == 0 || 
                    $("#repass").val().length == 0) {
                    alertify.error('Todos los campos del formulario son necesarios.');
                } else {
                    if( $("#terminos").prop('checked') == false) {
	                    alertify.confirm("Es necesario aceptar los terminos y condiciones para utilizar el servicio.",
        	                () => alertify.success('Ok'),
        	                () => alertify.error('Cancel'));
                    } else {
                        alertify.success('Usuario creado satisfactoriamente');
                    }
                }
                event.preventDefault();
            });

        });     
    </script>
    
</body>
</html>
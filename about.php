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
    <title>Acerca</title>
</head>
<body>

    <?php include_once('./includes/header.php');?>

    <main class="contenedor panel sombra">
        <div class="nosotros-img"></div>
        <form class="form-recover" action="recover.php" method="POST">
                <h2>Restablecer Contraseña a treves del correo institucional</h2>             
                <?php if(!empty($mensaje)): ?>
                    <p><?php echo $mensaje; ?></p>
                <?php endif; ?>

                <label for="cuenta">Correo: </label>
                <input type="email" name="cuenta" id="cuenta" required placeholder="Escriba su Correo Institucional...">

                <input type="submit" value="Cambiar contraseña" class="btn recover-btn">
        </form>
    </main>


    <?php include_once('./includes/footer.php');?>
</body>
</html>
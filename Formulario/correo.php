<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial.scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/correo.css">
        <title>Correo </title>
    </head>
    <body>
        <header>
            <?php include("encabezado.php") ?>
        </header>

        <form action="enviar.php" method="POST">
            <div class="form">
                <h1>Enviar correo</h1>
                <div class="grupo">
                    <input type="text" class="text" name="nombre" id="" required><span class="barra"></span>
                    <label>Nombre</label>
                </div>
                <div class="grupo">
                    <input type="email" class="text" name="correo" id="" required><span class="barra"></span>
                    <label>Email</label>
                </div>
                <div class="grupo">
                    <input type="text" class="text" name="asunto" id="" required><span class="barra"></span>
                    <label>Asunto</label>
                </div>
                <div class="grupo">
                    <textarea name="mensaje" id="" rows="3" required></textarea><span class="barra"></span>
                    <label>Mensaje</label>
                </div>
                <button type="submit">Enviar</button>
            </div>
        </form>
        <footer>
            <?php include("piepagina.php") ?>
        </footer>








    </body>
</html>
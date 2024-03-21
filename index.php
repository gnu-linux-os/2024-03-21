<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación De Notas</title>
</head>
<body>
    <h1>Aplicación de Notas</h1>

    <h2>Formulario de notas</h2>
    <form id="formulario-notas" action="notas.php" method="post">
        <textarea name="nota" id="nota" rows="4" cols="50" ></textarea><br>
        <input type="submit" value="Guardar nota">
    </form>
    <input type="submit" value="Guardar nota AjAx" id="envio">


    <h2>Notas guardadas (HTML estándar)</h2>
    <div id="notas-html">
        <?php
            include 'notas.txt';
        ?>
    </div>

    <h2>Notas guardadas (Ajax)</h2>
    <div id="notas-ajax"></div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready()
        {
            function cargarNotasAjax()
            {
                $("#notas-ajax").load("notas.txt"); 
            }

            $('#envio').click(function(e){
                e.preventDefault();
                var nota=$('#nota').val();
                console.log(nota);
                $.post('notas.php', {nota: nota, ajax: "si"}, function(){
                    cargarNotasAjax();
                });
            });

            //cargarNotasAjax();
        }
    </script>
</body>
</html>
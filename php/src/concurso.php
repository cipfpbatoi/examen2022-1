<!DOCTYPE html>
<html xml:lang="es">
    <head>
        <title>Autorizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    </head>
    <body>
    <?php
    include_once ("header.php");
    ?>
        <h2>Pots triar tres discos favorits. Has triat fins ara: 0</h2>
        <form method="post" action="concurso.php">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Tria el teu disc favorit</option>
                <option value="1">One</option>
            </select>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button id="continuar" name="submit" value='continuar' type="submit" class="btn btn-primary">
                        Continuar
                    </button>
                    <button id="finalitzar" name="submit" value='finalitzar' type="submit" class="btn btn-primary">
                        Finalitzar enquesta
                    </button>
                </div>
            </div>
        </form>
    </body>
</html>

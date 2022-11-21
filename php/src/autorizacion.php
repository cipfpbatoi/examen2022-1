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
        <form method="post" action="autorizacion.php">
            <div class="form-group row">
                <label for="nombre" class="col-4 col-form-label">Nom</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="nombre"
                               name="nombre"
                               placeholder="Escriu el teu nom complet"
                               type="text"
                               class="form-control"
                        >
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="email"
                               name="email"
                               placeholder="Escriu el teu email"
                               type="text"
                               class="form-control"
                        >
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nacimiento" class="col-4 col-form-label">Any de naixement</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="nacimiento"
                               name="nacimiento"
                               placeholder="Escriu el teu any de naixement"
                               type="text"
                               class="form-control"
                        >
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="consentimiento" class="col-4 col-form-label">Consentiment</label>
                <div class="col-8">
                    <div class="input-group">
                        <input class="form-check-input" type="checkbox" value="consentimiento" id="flexCheckDefault">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </body>
</html>

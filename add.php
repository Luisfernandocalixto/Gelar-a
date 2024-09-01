<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/132792126?v=4" type="image/x-icon">

    <title>Añadir</title>
    <style>
        table {
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <form method="POST" class="form" action="action_add.php">
            <div class="field">
                <label class="label">Ingrese URL base64 de la Imagen</label>
                <div class="control">
                    <input type="text" class="input" name="imagen" required>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <input type="submit" class="button is-link" value="Guardar">
                </div>
                <div class="control">
                    <button class="button is-link is-light" id="cancelar">Cancelar</button>
                </div>
            </div>
        </form>
    </div>

    <script>
     let cancelar = document.getElementById('cancelar');
     cancelar.addEventListener('click', function(event) {
        event.preventDefault();
        history.back();
     })
    </script>
</body>

</html>
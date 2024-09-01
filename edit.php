<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/132792126?v=4" type="image/x-icon">

</head>

<body>
    <?php
    include("config.php");
    include("firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    $id = $_GET['id'];
    $retrieve = $db->retrieve("film/$id");
    $data = json_decode($retrieve, 1);

    ?>

    <div class="container">
        <br>
        <form method="POST" action="action_edit.php">
            <div class="field">
                <label class="label">Ingrese URL base64 de la Imagen</label>
                <div class="control">
                    <input type="text" class="input" name="imagen" value="<?php echo $data['imagen'] ?>" required>
                    <input type="hidden" name="id" value="<? echo $id ?>">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <input type="submit" value="Guardar" class="button is-link">
                </div>
                <div class="control">
                    <a href="index.php" class="button is-link is-light" id="cancelar">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    
    <table border="0" width="500">
        
        <tr>
            <td>Imagen</td>
            <td>:</td>
        </tr>
        <tr>
            <td>
                <!-- <input type="submit" class="button is-link" value="Guardar"> -->
                

            </td>
        </tr>

    </table>

    </form>


</body>

</html>
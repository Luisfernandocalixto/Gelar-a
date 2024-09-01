<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Realizado</title>
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/132792126?v=4" type="image/x-icon">

</head>

<body>
    <?php
    include("config.php");
    include("firebaseRDB.php");
    $db = new firebaseRDB($databaseURL);

    $insert = $db->insert("film", [
        "imagen" => $_POST['imagen']

    ]);

    echo "
    <div class='notification'>
        <button class='delete'></button>
        Dato agregado
    </div>
    ";

    echo " <a href='index.php' class='button is-link'>Regresar</a>    ";

    ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                const $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
</body>

</html>
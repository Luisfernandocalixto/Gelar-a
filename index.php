<?php

include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de imagen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/132792126?v=4" type="image/x-icon">
    <style>
        button.is-info {
            color: #fff !important;
        }

        /* .not {
            display: none;
        } */

        main {
            display: flex;
            justify-content: center;
            /* width: 100%; */
            /* display: flex; */
            /* flex-wrap: wrap; */

            & .item-c {
                /* flex-grow: 1; */
                /* flex-basis: 200; */
            }

            table {
                overflow-x: scroll;
                border: none;

                /* margin: 0 auto; */
                /* width: 100%; */
                /* aspect-ratio: 300/100; */
                img {
                    max-width: 150px;
                }
            }
        }

        .section-content {
            display: flex;
            flex-wrap: wrap;

            .item-content {
                flex-grow: 1;
                flex-basis: 200;
                margin: 8px;
            }
        }
    </style>
</head>

<body>
    <a href="add.php" class="button is-link">Añadir</a>
    <button class="button is-info">Administrar</button>
    <button class="button is-info not" style="display: none;">Ocultar</button>
    <br><br>

    <main class="container">

        <div class="item-c">

            <table class="table" border="" width="">

                <tr align="center">
                    <td>Imagen</td>
                    <td colspan="2">Action</td>
                </tr>

                <?php

                $data = $db->retrieve("film");
                $data = json_decode($data, 1);


                if (is_array($data)) {
                    foreach ($data as $id => $film) {
                        echo "<tr align='center'>
        <td><img src='{$film['imagen']}'></td>
        <td><a class='button' href='edit.php?id=$id'>Editar</a></td>
        <td><a class='button' href='delete.php?id=$id'>Eliminar</a></td>
        </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </main>
    <h4>Lista de imágenes</h4>
    <section class="section-content">


        <?php

        $data = $db->retrieve("film");
        $data = json_decode($data, 1);


        if (is_array($data)) {
            foreach ($data as $id => $film) {
                echo "
        <img class='item-content' src='{$film['imagen']}'>
                    ";
            }
        }
        ?>

    </section>
    <script>
        document.querySelector('main').style.display = 'none';
        let info = document.querySelector('.is-info');
        let hidden = document.querySelector('.is-info.not');
        info.addEventListener('click', function(event) {
            document.querySelector('main').style.display = 'flex';
            document.querySelector('section').style.display = 'none';
            info.style.display = 'none';
            hidden.removeAttribute('style');
        });

        hidden.addEventListener('click', function(event) {
            document.querySelector('section').style.display = 'flex';
            document.querySelector('main').style.display = 'none';
            info.style.display = 'inline';
            hidden.style.display = 'none';

        })
    </script>
</body>

</html>
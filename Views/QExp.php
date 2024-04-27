<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Query Users</title>
</head>
<body>
    <h2>This view show all users</h2>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Expediente</th>
                    <th>Denunciante</th>
                    <th>Denunciado</th>
                    <th>Ofendido</th>
                    <th>Descripcion de los Hechos</th>
                    <th>Fecha Denuncia</th>
                    <th>Fecha del Suceso</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($data as $us) : ?>
                    <tr>
                        <td><?= $us->idExp ?></td>
                        <td><?= $us->dnte ?></td>
                        <td><?= $us->dndo ?></td>
                        <td><?= $us->ofen ?></td>
                        <td><?= $us->desc ?></td>
                        <td><?= $us->fden ?></td>
                        <td><?= $us->fsuc ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>

        </table>
    </div>

</body>
</html>
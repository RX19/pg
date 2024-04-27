<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Create Expediente</title>
</head>
<body>

    <div class="text-center">
        <h1>Create Expediente</h1>
        <img src="" alt="" srcset="">
    </div>

    <div class="row justify-content-center align-items-center">
        <form class="text-center" action="../Controller/UsCon.php" method="post">

            <div class="row justify-md-center">

                <p>
                    <label for="dnte">Denunciante</label> <br>
                    <input type="text" id="dnte" name="dnte" placeholder="Denunciante" required="true">
                </p>

                <p>
                    <label for="dntec">Denunciado</label> <br>
                    <input type="text" id="dndo" name="dndo" placeholder="Denunciado" required="true">
                </p>

                <p>
                    <label for="ofen">Ofendido</label> <br>
                    <input type="text" id="ofen" name="ofen" placeholder="Ofendido" required="true">
                </div>

            <div class="row justify-md-center">
                <p>
                    <label for="desc">Descripción de los hechos</label> <br>
                    <input type="text" id="desc" name="desc" placeholder="Descripción" required="true">
                </p>

                <p>
                    <label for="fden">Fecha de Denuncia</label> <br>
                    <input type="date" id="fden" name="fden" placeholder="Fecha de Denuncia" required="true">
                </p>

                <p>
                    <label for="fsuce">Fecha del Suceso</label> <br>
                    <input type="date" id="fsuc" name="fsuc" placeholder="Fecha del Suceso" required="true">
                </p>
            </div>
            <input class="btn btn-primary" type="submit" name="btnSnd" value="Send">
    </div>
    
</body>
</html>
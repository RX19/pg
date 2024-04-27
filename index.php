<?php
    require_once 'Controller/UsCon.php';
    $usCon = new UsCon();
    $uc = $usCon->upData();
?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>

    <script>
    alert("Hello World in JS when page is loaded");
    </script>
</head>
<body>

<?php
    echo "<h1>Hello World in PHP </h1>";
?>

<form action="ctrl.php" method="post">
    <p>
    <label for="fNm">Primer Nombre:</label> <br>
    <input type="text" id="fNm" name="fname" placeholder="First Name" required="true">
    </p>

    <p>
    <label for="sNm">Segundo Nombre:</label> <br>
    <input type="text" id="sNm" name="lname" placeholder="Second Name" >

    </p>

    <p>
    <label for="msg">Mensaje:</label> <br>
    <input type ="text" id="msg" name="msj" placeholder="Escribe tu mensaje" >

    </p>
   
    <input type="submit" value="snd" name="btnSnd">

    
</form>

<script>
    alert("Hello World in JS");
</script>

</body>
</html>
 -->

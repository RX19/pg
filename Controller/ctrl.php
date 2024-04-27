<?php
    if (isset($_POST['btnSnd'])) {
        $fname = $_REQUEST['fname'];
        echo "El nombre es: " . $fname . "<br>";
        $lname = $_REQUEST['lname'];
        echo "El segundo nombre es: " . $lname . "<br>";
        $msj = $_REQUEST['msj'];
        echo "El mensaje es: " . $msj;
        shMsg();
        include "view.php";

    }

function shMsg() {
    echo "<br><br> This is a function";
}


?>
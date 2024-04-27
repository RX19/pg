<?php
    class Con{

        //Funcion para conectarse a la base de datos
        function Conn(){

        //Parametros de la base de datos
        $host = "localhost";
        $bd = "hw";
        $user = "postgres";
        $pass = "qwerqwer";

        $conn = pg_connect("host=$host dbname=$bd user=$user password=$pass");
        if ($conn) {
            echo "Connection successfully with PostgreSQL<br>";
        } else {
            echo "Connection failed with PostgreSQL<br>";
        }
        return $conn;
    }
}
    
?>
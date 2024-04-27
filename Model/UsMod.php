<?php
include dirname(__DIR__) . '\Conf\Conn.php';
    class UsMod extends Con{

        private $con;
        private $id = array();

        //Contructor of the class UsMod
        function __construct(){
            //$ocon = new Con();  
            $con = parent::Conn();
        }

        function getId(){

            $sql = "SELECT * FROM expediente";  
            $query_expediente = pg_query($sql);

            if ($query_expediente) {
                echo 'Numero de filas en la tabla es: ' . pg_num_rows($query_expediente).'<br>';
            }

            while ($row = pg_fetch_object($query_expediente)) {
                echo "ID: " . $row->idexp . "<br>";
                $idexp[] = $row;
            }

            return $idexp;
        }

        function sUs($dnte, $dndo, $ofen, $desch, $fden, $fsuc){

            $sql = "INSERT INTO expediente (idexp, dnte, dndo, ofen, desch, fden, fsuc) 
            VALUES (DEFAULT, '$dnte', '$dndo', '$ofen', '$desch', '$fden', '$fsuc')";
            $query = pg_query($sql);
            return $query;
        }
}
    
?>
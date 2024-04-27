<?php
include 'Conf/Conn.php';
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
                echo "ID: " . $row->idExp . "<br>";
                $idExp[] = $row;
            }

            return $idExp;
        }
}
    
?>
<?php
    class UsCon{


        //Contructor of the class UsCon
        function __construct(){
            require ('Model/UsMod.php');
            echo "Contructor of the class UsCon done <br>";
        }

        function upData(){
            echo "Uploading data calling UsMod <br>";
            $UsMod = new UsMod();
            $data = $UsMod->getID();

            include ('Views/RExp.php');

        }

}
    
?>
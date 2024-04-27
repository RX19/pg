<?php

if(isset($_POST['btnSnd'])){
    $dnte = $_REQUEST['dnte'];
    $dndo = $_REQUEST['dndo'];
    $ofen = $_REQUEST['ofen'];
    $desc = $_REQUEST['desc'];
    $fden = $_REQUEST['fden'];
    $fsuc = $_REQUEST['fsuc'];
    
    $UsCon = new UsCon();
    $UsCon->regUsForm($dnte, $dndo, $ofen, $desc, $fden, $fsuc);
}
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

        function regUsForm( $dnte, $dndo, $ofen, $desc, $fden, $fsuc){

            require ('Model/UsMod.php');
            $UsModReg = new UsMod();
            $UsModReg->sUs($dnte, $dndo, $ofen, $desc, $fden, $fsuc);

        }

}
    
?>
<?php

if(isset($_POST['btnSnd'])){
    $dnte = $_REQUEST['dnte'];
    $dndo = $_REQUEST['dndo'];
    $ofen = $_REQUEST['ofen'];
    $desc = $_REQUEST['desch'];
    $fden = $_REQUEST['fden'];
    $fsuc = $_REQUEST['fsuc'];
    
    $UsCon = new UsCon();
    $UsCon->regUsForm($dnte, $dndo, $ofen, $desc, $fden, $fsuc);
}
    class UsCon{


        //Contructor of the class UsCon
        function __construct(){
            require ( dirname(__DIR__) .'\Model\UsMod.php');
            echo "Contructor of the class UsCon done <br>";
        }

        function upData(){
            echo "Uploading data calling UsMod <br>";
            $UsMod = new UsMod();
            $data = $UsMod->getID();

            include ('Views/RExp.php');

        }

        function regUsForm( $dnte, $dndo, $ofen, $desc, $fden, $fsuc){

            $UsModReg = new UsMod();
            $res = $UsModReg->sUs($dnte, $dndo, $ofen, $desc, $fden, $fsuc);

            if ($res) {
                echo "
                <script>
                alert('Expediente resgistered successfully')
                </script>";

            } else {
                echo "
                <script>
                alert('Error registering expediente')
                </script>";
            }

        }

}
    
?>
<?php
    session_start();
    if(isset($_SESSION['x'])){
        $x = $_SESSION['x'];
        echo "vrednost promenljive sesije x je: ".$x;
    }
    else{
        echo "Sesija ne postoji!!";
    }

?>
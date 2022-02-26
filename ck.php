<?php
    if(isset($_COOKIE['korime']) and  isset($_COOKIE['status'])){
        echo "Prijavljeni ste kao: ".$_COOKIE['korime']."(".$_COOKIE['status'].")";
    }
    else
        echo "Niste prijavljeni!!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload datoteka</h1>
    
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Unesite ime:" name="imeSlike" id="imeSlike"/><br><br>
        <input type="file" name="dat" id="dat"/><br><br> 
        <button name="dugme">Snimi podatke</button>
    </form>
    <hr>
    <?php
        //Metoda kojom saljemo podatke mora da bude POST
        /*Provera da li je nesto zapravo poslato*/
        /*Za UPLOAD metoda kojom se dsalje mora da bude POST*/
        if(isset($_POST['dugme'])){         
            $folder = "uploads/";
            if(isset($_POST['imeSlike'])) $ime = $_POST['imeSlike'];
            //$imeDat = $folder.$ime;
            $imeDat = $folder.date("ymd_His", time())."_".$_FILES['dat']['name'];
            //var_dump($_FILES);
            if($_FILES['dat']["size"]<500000){
                $tmpNiz = explode(".", $_FILES['dat']['name']);
                if($tmpNiz[count($tmpNiz) - 1] == "jpg" or $tmpNiz[count($tmpNiz) - 1] == "jpeg" or $tmpNiz[count($tmpNiz) - 1] == "png"){
                    if(!move_uploaded_file($_FILES['dat']['tmp_name'], $imeDat))
                        echo "Nesupelo prebacivanje datoteke na server!!!";
                    else
                        echo "Uspesno prebacivanje datoteke na server!!!"; 
                }
                else{
                    echo "Pogresan tip datoteke!!!";
                }
                
            }
            else{
                echo "Datoteka je prevelika!!!";
            }
           
            //Ovo je funkcija koja ce iz privremenog direktorijuma  i imena prebaciti dat tamo gde se nalazi 
            //moja stranica index.php i dati joj isto ime kao kod klijenta na racunaru
        }
        else{
            echo "<br>dobro dosli na stranicu za UPLOAD<br>";
        }
    ?>

</body>
</html>
<?php
    require_once("funkcije.php");
    session_start();
    if(isset($_GET['odjava'])){
        logout();
    }
    if(login()) header("Location: stranica1.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logovanje</h1>
    <form action="login.php" method="POST">
        <input type="text" name="korime" placeholder="Unesite korisnicko ime"> <br><br>
        <input type="password" name="lozinka" placeholder="Unesite lozinku:"><br><br>
        <input type="checkbox" value="1" name="pamti"> Zapamti me na ovom racunaru <br><br>
        <button name="subbmit">Prijavi se</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['subbmit'])){
            $korime = $_POST['korime'];
            $lozinka = $_POST['lozinka'];

            if(strlen($korime)!=0 and strlen($lozinka)!=0){
                if($korime == "bbosko" and $lozinka == "bbosko"){
                    $_SESSION['user'] = "Bosko Bogojevic";
                    $_SESSION['status'] = "Administrator";
                    if(isset($_POST['pamti'])){
                        setcookie("user", $korime, time() + 86400, "/");
                        setcookie("status", "Administrator" , time() + 86400, "/");
                    }
                    header("Location: stranica1.php");
                }
                else {
                    echo "Korisnicko ime i loznika su neispravni!!";
                }
            }
            else{
                echo "Morate uneti sve podatke!!";
            }
        }
        else{
            echo "Dobro dosli na stranicu za logovanje!!!"; 
        }
    ?>
</body>
</html>
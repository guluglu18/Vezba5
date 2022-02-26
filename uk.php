<?php
     setcookie("x", "5", time() - 1, "/"); /*Unitavanje kolacica - Za unistavanje samo za vreme navodimo
     time() - 1 */
     setcookie("korime", "bbosko", time() - 1, "/");
     setcookie("status", "administrator", time() - 1, "/");
     echo "Unisten kolacic!!";
?>
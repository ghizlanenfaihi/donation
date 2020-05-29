<?php
    $mysqli= new mysqli('localhost', 'root', '', 'pfe1') or die(mysqli_error($mysqli));
if (isset($_POST['update'])) {
    $pic=$_POST['pic'];
    $mysqli->query("UPDATE admin SET pic='$pic' WHERE idA=1")or die($mysqli->error);
    header("location: profile.php");
}
     if (isset($_POST['modifier1'])) {
         $NomA=$_POST['NomA'];
         $mysqli->query("UPDATE admin SET NomA='$NomA' WHERE idA=1")or die($mysqli->error);
         header("location: profile.php");
     }
    if (isset($_POST['modifier2'])) {
        $newpasswd=sha1($_POST['newpasswd']);
        $cnfg=sha1($_POST['cnfg']);
        if ($newpasswd==$cnfg) {
            $mysqli->query("UPDATE admin SET password='$cnfg' WHERE idA=1")or die($mysqli->error);
            header("location: profile.php");
        } else {
            echo "mot de passe incorrect";
        }
    }

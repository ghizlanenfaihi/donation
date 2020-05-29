<?php
session_start();

    $mysqli= new mysqli('localhost', 'root', '', 'pfe1') or die(mysqli_error($mysqli));
    $idC=0;
    $update=false;
    $NomC='';
    $description='';

    if (isset($_POST['save'])) {
        $NomC=$_POST['NomC'];
        $description=$_POST['description'];
        $image=$_POST['image'];
        $mysqli->query("INSERT INTO annance (NomC,description,image) VALUES ('$NomC','$description','$image')")or die($mysqli->error);
        $_SESSION['message']="L'enregistrement a été sauvegardé!";
        $_SESSION['msg_type']="success";
        header("location: dashboard.php");
    }
    if (isset($_GET['delete'])) {
        $idC=$_GET['delete'];
        $mysqli->query("DELETE FROM annance WHERE idC=$idC") or die($mysqli->error) ;
        $_SESSION['message']="L'enregistrement a été supprimé!";
        $_SESSION['msg_type']="danger";
        header("location: dashboard.php ");
    }
    if (isset($_GET['edit'])) {
        $idC=$_GET['edit'];
        $update=true;
        $result=$mysqli->query("SELECT * FROM annance WHERE idC=$idC") or die($mysqli->error) ;
        $row=$result->fetch_array();
        $NomC=$row['NomC'];
        $description=$row['description'];
        $image=$row['image'];
    }
    if (isset($_POST['update'])) {
        $idC=$_POST['idC'];
        $NomC=$_POST['NomC'];
        $description=$_POST['description'];
        $image=$_POST['image'];
        $mysqli->query("UPDATE annance SET NomC='$NomC' , description='$description' , image =' $image' WHERE idC=$idC")or die($mysqli->error);
        $_SESSION['message']="L'enregistrement a été mis à jour!";
        $_SESSION['msg_type']="warning";
        header("location: dashboard.php");
    }

 <?php
session_start();
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) and !empty($_POST['email'])) {
        if (isset($_POST['password']) and !empty($_POST['password'])) {
            include "db.php";
            $password=sha1($_POST['password']);
            $getdata=$pdo->prepare("SELECT email FROM admin WHERE email=? AND password=?");
            $getdata->execute(array($_POST['email'], $password));

            $rows=$getdata->rowCount();
            if ($rows==true) {
                $_SESSION['admin']=$_POST['email'];
                header("Location: dashboard.php");
            } else {
                $erreur= " L'email ou le mot de passe est invalide. Veuillez ressayer";
            }
        } else {
            $erreur="veuillez saisir votre mot de passe";
        }
    } else {
        $erreur="veuillez saisir un email";
    }
}

?>
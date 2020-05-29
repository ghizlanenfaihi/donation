<!DOCTYPE html>
<html>
<head>
  <title> Administrateur</title>
  <link rel="stylesheet"  href="admin.css">
</head>
<body>
  
<div class="container">
<div class="left"></div>
<div class="right">
  <div class="formbox">
    <?php include_once "Inscrip.php";?> 
    <?php if (isset($erreur)) {
    echo $erreur;
}?>
     <form action="" method="post" >
       <p>Email</p>
              <input class="user" type="email" placeholder="email" name="email">
              <p>Mot de passe</p>
              <input class="user" type="password" placeholder="mot de passe" name="password">
              <input class="connexion" type="submit" value="Connexion" name="submit"></input>
 </form>
</div>
 

</div>
   
</div>
</body>
</html>


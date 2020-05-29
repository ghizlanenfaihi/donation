<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Profile</title>
  </head>
  <body>
<div class="box">

<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pfe1');
$query ="SELECT pic,NomA FROM admin";
$query_run = mysqli_query($connection, $query);
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#picture" style="  background: rgba(0, 0, 0, 0);  border:rgba(0, 0, 0, 0.4);">
<?php
   while ($row=mysqli_fetch_array($query_run)) {
       ?>
    <img src="<?php echo $row['pic']; ?>" class="box-img">
    </button>


 <h1><?php echo $row['NomA']; ?>
</h1>
<?php
   }
            ?> 
                                
<!-- Modal of pic-->
<div class="modal fade" id="picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Changer votre profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="base.php"  method="POST">

      <input type="file" name="pic" class="form-control" > 
   

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-info" name="update">Mettre à jour</button>
           </div>
</form>
      </div>
    </div>
  </div>
</div>

<button class="btn1" data-toggle="modal" data-target="#Nom">Nom</button>
<!-- Modal of name-->
<div class="modal fade" id="Nom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Changer votre nom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="base.php"  method="POST">
      <input  type="text" name="NomA" class="form-control" placeholder="Entrer le nom">
   

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-info" name="modifier1">Mettre à jour</button>
           </div>
</form>
      </div>
    </div>
  </div>
</div>

<button class="btn1" data-toggle="modal" data-target="#passwd">Mot de passe</button>
<!-- Modal of password-->
<div class="modal fade" id="passwd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Changer votre mot de passe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="base.php"  method="POST">
      <input  type="password" name="newpasswd" class="form-control" placeholder="Entrer un nouvau mot de passe"></br>
      <input  type="password" name="cnfg" class="form-control" placeholder="configurer votre mot de passe">


      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-info" name="modifier2">Mettre à jour</button>
           </div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
<style>
body{
  margin: 0;
  padding: 0;
  background-color:#2E2E2E;
  background-size: cover;

}
.box{
  width: 450px;
  border-radius: 5%;
  background: rgba(0, 0, 0, 0.4);
  text-align: center;
  margin: auto;
  margin-top: 15%;
  color: white;
  padding-bottom:20px;
  font-family: 'Century Gothic',sans-serif;
}
.box-img{
  border-radius: 50%;
  width: 200px;
  height: 200px;
  cursor:pointer;
}
.box h1{
  font-size: 40px;
  letter-spacing: 4px;
  font-weight: 100px;
}

.box .btn1{
  display: inline-block;
  padding:5px 20px;
  margin: 5px 20px;
  list-style: none;
  color:black;
  border-radius:10px;
  background-color:grey;
  transition: all ease-in-out 400ms;
}

.box button:hover{
  color: #b9b9b9;
}

</style>


</body>
</html>


<?php
    session_start();
    $database_name = "pfe1";
    $con = mysqli_connect("localhost", "root", "", $database_name);
    ?>
    <!doctype html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="headerU.css">
<link rel="stylesheet" type="text/css" href="cases.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Berkshire+Swash&display=swap" rel="stylesheet">
<link rel  ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

<title>Cas</title>
</head>
<body>
<header>
    <div class="mainheader">
      <div class="logo">
        <img src="logo.png">
      </div>

      <nav>
        <a href="home.html">accueil</a>
        <a href="case.php">cas</a>
        <a href="#">contact</a>
      </nav>

      <div class="menubtn">
        <a href="learn.html">
          <button>PLUS</button>
        </a>
      </div>
    </div>
    </header>

    <img src="bgg.png" id="bg">
   <p class="text"> Oubliez ce que vous pouvez obtenir et </p></br>
        <p class="pg">  voyez ce que vous pouvez donner </p>
        <?php
            $query = "SELECT * FROM annance ORDER BY idC DESC ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-4" style="margin-top:20px;margin-bottom:12px;padding-left:30px;">  
                     <form method="post" action="">
    <div class="cases" style="border:2px solid #ccc;border-radius: 10px;padding: 20px;height:400px; background:white;";align="center">  
      <img src="<?php echo $row["image"]; ?>" class="img"><br /> 
    <h2 class="text-i" ><?php echo $row["NomC"]; ?></h2>
    <p  class="text-d"><?php echo $row["description"]; ?></p>
</div>

</form>
    </div>                         
                <?php
                }
            }
            ?>
   </body>     
   </html>
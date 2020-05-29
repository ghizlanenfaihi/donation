<?php
 //action.php
 include 'crud.php';
 $object = new Crud();
 if (isset($_POST["action"])) {
     if ($_POST["action"] == "Load") {
         echo $object->get_data_in_table("SELECT * FROM cases ORDER BY id ASC");
     }
     if ($_POST["action"] == "Insert") {
         $titre = mysqli_real_escape_string($object->connect, $_POST["titre"]);
         $text = mysqli_real_escape_string($object->connect, $_POST["text"]);
         $image = $object->upload_file($_FILES["user_image"]);
         $query = "INSERT INTO cases (titre, text,user_image) VALUES ('".$titre."', '".$text."', '".$image."') ";
            
            
         $object->execute_query($query);
         echo 'Data Inserted';
     }
 }
 ?>  
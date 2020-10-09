<?php
  
// Email from subscribe to newsletter====================

   
    if(isset($_POST["submitButton1"])){

    $news = $_POST['email'];
        if (!empty($news)) {

        $con = new PDO("mysql:dbname=eShop;host=localhost", "root", "");
        $insert = $con->prepare('INSERT INTO newsletter (email) VALUES (?)');
        $insert->execute(array($news));
        $insert->fetch(PDO::FETCH_ASSOC);
        header("Location: ../../../view/index.php");   
     
    }
   
}
    



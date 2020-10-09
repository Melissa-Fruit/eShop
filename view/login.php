<?php

ob_start();

require_once("../App/model/includes/config-local.php");
require_once("../App/controller/classes/Account.php");
require_once("../App/controller/classes/Constants.php");
require_once("../App/controller/classes/login1.php");
// require_once("register.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
   <link rel="stylesheet" href="../App/public/css/styleR.css">
    <title>EshopMvc</title>
</head>

<body>
    <header class="showcase">
       

        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img src="../App/public/images/logo.png" title="logo" alt="logo freshshop"> 
                    
                    <h3>Sign in to continue</h3>

                </div>

                <form method="POST" class="form">
                    <?php echo $account->getError(Constants::$notCorrect); ?>
                    <input class="username" type="text" name="username" placeholder="Username" required>

                    <input class="password" type="password" name="password" placeholder="Password" required>

                    <input type="submit" name="submitButton" value="Submit"> 

                     <!--<button type="submit" name="submitButton" value="Submit">Login</button>-->

                </form>
                <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
                <div id="space"></div>
              <!--  <a href="requestReset.php">Forgot password?</a> -->

            </div>

        </div>
    </header>

  

</body>

</html>
<?php
//  connect to the database
require_once("../App/model/includes/config-local.php");

//For accesing the classes php call the folder classes/.php with require_once
//recuperation with (via) isset of the form data with (via) the submit of the boutton and 
//use la fonction créated to sanitize, that is in de file includes/classes/FormSanitizer.php
require_once("../App/controller/classes/FormSanitizer.php");


//accessing to Account.php
require_once("../App/controller/classes/Account.php");

require_once("../App/controller/classes/Registration.php");
//accessing to Constants.php
require_once("../App/controller/classes/Constants.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../App/public/css/styleR.css">
   
    <title>EshopMvc</title>
</head>
<body>
   <div class = "signInContainer">

        <div class = "column">

            <div class= "header">
            <img src="../App/public/images/logo.png" title="logo" alt="logo freshshop"> 
                    <h3>Sign UP</h3>
                    <span>to freshshop</span>  
            </div>

            <form method="POST">

            <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" placeholder="First name"  value="<?php getInputvalue("firstName");?>" required>
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <input type="text" name="lastName" placeholder="Last name"  value="<?php getInputvalue("lastName");?>" required>
            <?php echo $account->getError(Constants::$userNameCharacters); ?>
            <?php echo $account->getError(Constants::$usernameTaken); ?>
                <input type="text" name="username" placeholder="Username"  value="<?php getInputvalue("username");?>" required>
            <?php echo $account->getError(Constants::$emailsDontMatch); ?> 
            <?php echo $account->getError(Constants::$emailInvalid); ?>   
            <?php echo $account->getError(Constants::$emailTaken); ?>  
                <input type="email" name="email" placeholder="Email"  value="<?php getInputvalue("email");?>" required>
                <input type="email" name="email2" placeholder="Confirm email"  value="<?php getInputvalue("email2");?>" required>
            <?php echo $account->getError(Constants::$passwordsDontMatch); ?> 
            <?php echo $account->getError(Constants::$passwordLength); ?> 
                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="password2" placeholder="Confirm password" required>

                <input type="submit" name="submitButton" value="SUBMIT">


            </form>
            <a href="login.php" class= "signInMessage">Already have an account? Sign in here!</a>
 
        </div>

   </div>
<!--  http://localhost/eShopMvc/view/register.php   -->
</body>
</html>




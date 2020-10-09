<?php
// conecting to the database
require_once("../App/model/includes/config-local.php");
// accessing to requestReset.php
require_once("../App/controller/classes/Reset.php");


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../App/public/css/styleR.css">
        <title>Document</title>
    </head>
    <body>
    <form method="POST">

<input type="password" name="password" placeholder="New password">
<br />
<input type="submit" name="submit" value="Update password">


</form>
</body>
</html>
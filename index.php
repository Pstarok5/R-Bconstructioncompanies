<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title> R&B Construction Company  </title>
</head>
<body>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

                <h1 class="first"> R&B Construction Company! </h1>

                <label id="user"> username: </label><br><br>

                <input type="text" name="username" value="" placeholder="username..." class="inputs" required_once><br><br>
            
                <label id="pass"> password: </label> <br><br>

                <input type="password" name="password" value="" placeholder="password..." class="inputs" required_once><br><br>

                <input type="submit" name="login" value="Login✔" id="submit"><br><br>

            </form>

</body>
</html>

<?php

        if (isset($_POST["login"])) {
           
            if (!empty($_POST["username"]) &&
                !empty($_POST["password"])) {
                
                    $_SESSION["username"] = $_POST["username"];

                    $_SESSION["password"] = $_POST["password"];

                    header("Location: home.php");
            }

            else {
                echo"Missing username/password❌";
            }
        
        }

        
?>
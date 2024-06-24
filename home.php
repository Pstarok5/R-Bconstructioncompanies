<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> R&B Construction Company </title>
</head>
<body>

    <div class="overall">

            <div> 
                <h1> R&B Construction Company! </h1>
            </div>

            <div class="semi">
                <p> R&B Construction Company is available<br> 
                        acquisition. We are accepting serious, <br>
                        bonafide offers only. Please email <br>
                        Hello@R&BConstructionCompany <br>
                        if you are interested.<br><br>
                </p>

                <p>
                    Author:R&B Construction Company <br><br>
                    <a href="mailto:R&B Construction Company.com"> &copy; 2024 R&B Construction Company. </a>
                </p>

            </div>

           <form action="home.php" method="post">
                <input type="submit" name="logout" value="Logout❌" require_once class="logout"><br><br>
           </form>
            
    </div>

</body>
</html>


<?php

    // echo $_SESSION["username"] . '<br>';
    // echo $_SESSION["password"] . '<br>';

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: index.php");
    }

?>

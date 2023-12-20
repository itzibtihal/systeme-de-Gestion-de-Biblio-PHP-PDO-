<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Register Authentification">
    <meta name="keywords" content="Library books">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../public/css/styles.css">


</head>
<body>
<h2>Register</h2>
<div id="particles-js"></div>




    <form action="../../App/controllers/authentification/RegisterController.php" method="post">

        <div class="form-group">
            <label for="fullname">name :</label>
            <input type="text" name="fullname" class="form-control"  id="fullname" required>
        </div>

        <div class="form-group">
            <label for="last_name">lastname:</label>
            <input name="last_name" type="text" class="form-control"  id="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input name="email" type="text" class="form-control" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" type="password" class="form-control"  id="password" required>
        </div>
        <button name="submit" type="submit" class="btn btn-success">Register</button>
    </form>


</body>
</html>
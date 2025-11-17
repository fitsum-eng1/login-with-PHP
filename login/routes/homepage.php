<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <div id="loginsection">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <hr>
        <h1 style="color: green;">congratulations you are logged in successfully</h1>
        <form action="../api/api.php" method="post">
            <button type="submit" id="logout_btn" name="logoutbtn">logout</button>
        </form>
    </div>
</body>

</html>
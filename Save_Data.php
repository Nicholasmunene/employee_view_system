<?php
session_start();
if (!isset($_SESSION['Username'])){
    header("location:Login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>

<h1>
    <?php
    echo "Welcome " .$_SESSION['Username'];
    ?>
</h1>
<div class="d-flex ">
    <div class="justify-content-center container input-group">
        <form action="Save_Data_Handler.php" method="POST" >
            <input type="text" placeholder="Enter name" name="a" required><br><br>
            <input type="text" placeholder="Enter Position" name="b" required><br><br>
            <select name="c" >
                <option value="full time">Full Time</option>
                <option value="part time">Part Time</option>
                <option value="casual">Casual</option>

            </select><br><br>
            <input type="text" placeholder="Enter Id" name="d" value="<?php require 'Random_numbers.php'?>" required><br><br>
            <input type="text" placeholder="Enter Salary" name="e" required><br><br>
            <input type="submit" value="Save" name="btn_save" class=" btn btn-outline-success btn-block"><br>
            <a href="View_Data.php" class=" btn btn-outline-success btn-block">View data</a>
            <a href="Logout.php" class="btn btn-outline-danger btn-block">Logout</a>

        </form>
    </div>
</div>

</body>
</html>


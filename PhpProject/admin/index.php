<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
    <div class="container">
        <div class="page-header text-center">Admin page</div>
        <p class="text-center">Dentists from another Universe Database Administration</p>
    </div>
<div class="container">
    <?php include "Admin.php"; ?>
</div>
</body>
</html>
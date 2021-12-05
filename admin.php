
    <?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_SESSION['user'])) {
    header("location:dashboard.php");
//  echo "<a href='logout.php'> logout </a>";
    
  }
   else {
   include 'login.php';
  }
 ?>
</body>
</html>
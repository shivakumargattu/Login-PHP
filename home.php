<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="bg-container">

     <h1>Hello, well come back to you<?php echo $_SESSION['name']; ?></h1>

     <a href="logout.php">Logout</a>

     </div>
</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>


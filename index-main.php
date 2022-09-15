 <?php
session_start();
if (isset($_SESSION['email'])) {
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Restaurantly</title>

  <!-- Main Css File -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- BootStrap Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">



</head>

<body>


  
  <!-- navbar -->
  <div> </div>


  <!-- Home -->
  <div> </div>


  <!-- About -->
  <div> </div>


  <!-- Menu -->
  <div> </div>


  <!-- Specials -->
  <div> </div>


  <!-- Events -->
  <div> </div>


  <!-- Gallery -->
  <div> </div>


  <!-- Chefs -->
  <div> </div>


  <!-- Contact us -->
  <div> </div>



  <!-- Footer -->
  <div> </div>


</body>

</html>

 <?php
} else {
    header("Location: index.php");
    exit();
}
?> 
<?php
session_start();
include_once 'includes/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="#" type="image/x-icon">
  <title>Tech PCMart</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font/bootstrap-icons.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="js/cdn.jquery.min.js"></script>

  <!-- <style type="text/css">
    
  </style> -->
</head>

<body id="page1">



  <div class="expand_button"> <a href="#" class="btn e-button btn-sm"> <span class="e-button-text"><i class="fa fa-trash red " style="padding-right:3px;"></i> Remove Selected</span> </a> </div>


</body>

<?php mysqli_close($conn); ?>

</html>

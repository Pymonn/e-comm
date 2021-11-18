<?php
session_start();
include_once '../includes/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="#" type="image/x-icon">
  <title>Tech PCMart</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../font/bootstrap-icons.css">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <script src="../js/cdn.jquery.min.js"></script>

  <!-- <style type="text/css">
    
  </style> -->
</head>

<body id="page1">

  <?php
  // include_once 'completing-tags/header.php';
  ?>


  <div class="container">
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="container-fluid position-relative text-end" id="regTitle">
      <h1>
        <big>
          Register Account
        </big>
      </h1>
    </div>
  </div>



  <div class=" container mb-3">
    <div class="row justify-content-center">
      

      <div class="col-lg-5 col-md-6 col-sm-4 position-relative my-auto signupForm " id="InputArea">
        <div class="card bg-dark align-middle px-4 border-0">
          <h3 class="display-5 text-light mt-2">
            Sign in
          </h3>
          <div class="card-body overflow-hidden bg-light mt-2">
            <form action="#" method="POST">
              <div class="row">
                <div class="input-group">
                  <div class="col-10 mx-auto">
                    <label for="username">
                      <p class="display-7">Account Name:</p>
                    </label>
                    <input class="text-center form-control form-control-xl border border-dark border-1 rounded" type="text" name="username" required>
                  </div>
                </div>
              </div>
              <div class="row mt-1">
                <div class="input-group">
                  <div class="col-10 mx-auto">
                    <label for="password">
                      <p class="display-7">Password:</p>

                    </label>
                    <input class="text-center  form-control border border-dark border-1 rounded" type="password" name="password" required>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer bg-transparent text-end">
            <a href="users/signup.php" class="text-light">Create Account</a>
            <button type="submit" class="btn btn-warning" name="loginBTN">Log In</button>
          </div>
        </div>
      </div>
          
    </div>
  </div>


  <?php
  //include_once 'completing-tags/footer.php';
  ?>




</body>

<?php mysqli_close($conn); ?>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>
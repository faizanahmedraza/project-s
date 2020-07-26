<?php
$login =  false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include("./database/dbconnect.php");
  $useremail = $_POST["email"];
  $password = $_POST["passcode"];

  $sql = "SELECT email, passcode FROM login WHERE email = '$useremail' AND passcode = '$password' ";
  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['useremail'] = $useremail;
    header("location:home.php");
  } else {
    $showError = true;
  }
} 



// if (isset($_SESSION['useremail'])) {
//   header("location:index.php");
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- custom css -->
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <style>
    @import url("./css/styles.css");

    .bgcolor {
      background: url("images/PWADesign.png") !important;
      background-size: cover !important;
      width: 100%;
      height: 700px;
    }
  </style>
  <title>Document</title>
</head>

<body class="bgcolor">
  <?php
  if ($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  } else if ($showError) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $showError . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-2 col-sm-0"></div>
      <div class="col-lg-6 col-md-8 col-sm-12 col-12 h-100">
        <div class="login">
          <img src=".\images\SINEL Logo.png" class="rounded mx-auto d-block mt-4" style="height: 100px; width:100px" alt="">
          <h1 class="text-center text-white mt-5" style="font-size:28px; font-stretch: ultra-expanded!important; letter-spacing: 7px; white-space: nowrap;">LET'S GET STARTED</h1>
          <form class="form-group" action="" method="POST">

            <input type="email" name="email" class="form-control border-0 mt-4" placeholder="Email">
            <br>
            <div class="input-group">
              <input type="password" name="passcode" class="form-control border-0 mt-1" id="password-id" placeholder="Passcode">
              <div class="input-group-append">
                <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0"><i id="pass-status" class="material-icons-outlined text-white" onclick="showHidePwd()">visibility_off</i></span>
              </div>
            </div>
            <br>
            <input type="submit" class="form-row mx-auto border-0 mt-4" value="LOGIN">
          </form>
        </div>
      </div>
      <div class="col-lg-3 col-md-2 col-sm-0"></div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    function showHidePwd() {
      var pass = document.getElementById("password-id");
      if (pass.type === "password") {
        pass.type = "text";
        document.getElementById("pass-status").innerHTML = "visibility";
        document.getElementById("password-id").style.background = "#E8F0FE";
        document.getElementById("password-id").style.borderRadius = "0px";
      } else {
        pass.type = "password";
        document.getElementById("pass-status").innerHTML = "visibility_off";
        document.getElementById("pass-status").style.fontSize = "26px";
      }
    }
  </script>
</body>

</html>
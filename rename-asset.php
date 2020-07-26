<?php
session_start();
error_reporting(0);
$update  = false;
$showError = false;
if (isset($_POST['submit'])) {
    include_once('database/dbconnect.php');
    $m1 = $_POST['meter1'];
    $m2 = $_POST['meter2'];
    $c1 = $_POST['capbank1'];
    $c2 = $_POST['capbank2'];
    $sql = "SELECT meter, meter2, capbank1, capbank2 FROM rename-assets WHERE asset-id='1'";
    if ($result = mysqli_query($conn, $sql)) {
        if ($row = mysqli_fetch_array($result)) {
                $sql = "UPDATE rename-assets SET meter='$m1', meter2='$m2', capbank1='$c1', capbank2='$c2' WHERE asset-id='1'";
                $con = mysqli_query($conn, $sql);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <style>
        @import url("css/styles.css");

        .bgcolor {
            background: url("images/PWADesign.png") !important;
            background-size: cover !important;
            height: 700px !important;
            padding: 10px !important;
        }

        button {
            background-color: transparent !important;
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            cursor: pointer !important;
        }

        span {
            background: transparent !important;
            font-size: 32px !important;
            cursor: pointer;
            color: #fff;
        }

        input[type=text] {
            background: transparent !important;
            color: #fff !important;
            border: none !important;
            border-radius: 0% !important;
            border-bottom: 1px solid #fff !important;
            outline: none !important;
            padding: 2px !important;
            font-size: 18px !important;
        }


        .input:focus {
            box-shadow: none !important;
        }

        label {
            font-size: 18px !important;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12 bgcolor">
                <nav class="navbar p-0 m-0">
                    <a href="settings.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
                    <span style="font-weight:bold!important; text-align:center;" class="d-flex justify-content-center">Rename <br> Assets</span>
                    <button class="d-flex justify-content-end" type="button">
                        <img id="icon-image" src="images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('settings.php')">
                    </button>
                </nav>
                <br>
                <?php
                if ($update) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> change Successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
                } else if ($showError) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Changes not Success
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                }
                ?>
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="" class="col-6 mb-0 col-form-label text-white">Meter</label>
                        <div class="col-6">
                            <input type="text" class="form-control" id="meter1" name="meter1" placeholder="Meter 1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-6 col-form-label text-white">Meter2</label>
                        <div class="col-6">
                            <input type="text" class="form-control" id="meter2" name="meter2" placeholder="Meter 2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-6 col-form-label text-white">Cap. Bank 1</label>
                        <!-- <div class="col-xs-2"></div -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="capbank1" name="capbank1" placeholder="Cap. Bank 1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-6 col-form-label text-white">Cap. Bank 2</label>

                        <div class="col-6">
                            <input type="text" class="form-control" id="capbank2" name="capbank2" placeholder="Cap. Bank 2">
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="form-row mx-auto border-0 mt-4" style="letter-spacing: 2px;" name="submit" value="SAVE">
                </form>

            </div>
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function diffImage() {
            clicked = true;
            var image = document.getElementById('icon-image')
            if (clicked) {
                image.src = "images/12.png";
                clicked = false;
            } else {
                image.src = "images/13.png";
                clicked = true;
            }
        }
    </script>
</body>

</html>
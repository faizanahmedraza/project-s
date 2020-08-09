<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <style>
        @import url("../css/styles.css");

        .bkground {
            background-image: none !important;
            background-size: cover !important;
        }

        button {
            background-color: transparent !important;
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            cursor: pointer !important;
        }
    </style>
    <title>bank1</title>
</head>

<body>
    <nav class="navbar p-0 m-0">
        <div class="container">
            <a href="allcaps.php"><i style="font-size: 54px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
            <span style="font-size: 30px; font-weight:bold!important;" class="d-flex justify-content-center">Bank4</span>
            <button class="navbar-toggler d-flex justify-content-end" type="button">
                <img id="icon-image" src="../images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('../settings.php')"> </button>
            </button>
        </div>
    </nav>

    <div class="container">
        <div class="text-center mt-3 mb-4">
            <h5 class="font-weight-bold">Capacitors</h5>
        </div>
        <div class="row">
            <div class="col-3 col-md-4 p-0">
                <span class="float-right"> Step 1</span>
            </div>
            <div class="col-6 col-md-4">
                <div class="progress mt-1" style="background-color: #221e20;">
                    <div class="progress-bar progress-bar-striped progress1" style="background-color: #3b9e43!important;"></div>
                </div>
            </div>
            <div class="col-3 col-md-4 d-inline-flex">
                <div id="cpStep1"></div><span class="ml-1">%</span>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md-4 p-0">
                <span class="float-right"> Step 2</span>
            </div>
            <div class="col-6 col-md-4">
                <div class="progress mt-1" style="background-color: #221e20;">
                    <div class="progress-bar progress-bar-striped progress2" style="background-color: #3b9e43!important;"></div>
                </div>
            </div>
            <div class="col-3 col-md-4 d-inline-flex">
                <div id="cpStep2"></div><span class="ml-1">%</span>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md-4 p-0">
                <span class="float-right"> Step 3</span>
            </div>
            <div class="col-6 col-md-4">
                <div class="progress mt-1" style="background-color: #221e20;">
                    <div class="progress-bar progress-bar-striped progress3" style="background-color: #3b9e43!important;"></div>
                </div>
            </div>
            <div class="col-3 col-md-4 d-inline-flex">
                <div id="cpStep3"></div><span class="ml-1">%</span>
            </div>
        </div>

        <div class="text-center mt-4 mb-4">
            <h5 class="font-weight-bold">Contactors</h5>
        </div>

        <div class="row">
            <div class="col-3 col-md-4 p-0">
                <span class="float-right"> Step 1</span>
            </div>
            <div class="col-6 col-md-4">
                <div class="progress mt-1" style="background-color: #221e20;">
                    <div class="progress-bar progress-bar-striped progress-1" style="background-color: #3b9e43!important;"></div>
                </div>
            </div>
            <div class="col-3 col-md-4 d-inline-flex">
                <div id="cnStep1"></div><span class="ml-1">%</span>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md-4 p-0">
                <span class="float-right"> Step 2</span>
            </div>
            <div class="col-6 col-md-4">
                <div class="progress mt-1" style="background-color: #221e20;">
                    <div class="progress-bar progress-bar-striped progress-2" style="background-color: #3b9e43!important;"></div>
                </div>
            </div>
            <div class="col-3 col-md-4 d-inline-flex">
                <div id="cnStep2"></div><span class="ml-1">%</span>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md-4 p-0">
                <span class="float-right"> Step 3</span>
            </div>
            <div class="col-6 col-md-4">
                <div class="progress mt-1" style="background-color: #221e20;">
                    <div class="progress-bar progress-bar-striped progress-3" style="background-color: #3b9e43!important;"></div>
                </div>
            </div>
            <div class="col-3 col-md-4 d-inline-flex">
                <div id="cnStep3"></div><span class="ml-1">%</span>
            </div>
        </div>
    </div>
    <footer class="fixed-bottom" style="background-color: black;">
        <div class="container">
            <nav class="navbar d-flex justify-content-center">
                <a href="../home.php" class="pl-0 icon-image1"><img src="../images/5.png" height="48px" width="48px" alt=""></a>
                <!--access_time -->
                <a href="../search/finddata.php" class="icon-image2" style="padding-left: 40px;"><img src="../images/6.png" height="48px" width="48px" alt=""></a>
                <a href="../graphBuilder/meter2.php" class="icon-image3" style="padding-left: 40px;"><img src="../images/9.png" height="48px" width="48px" alt=""></a>
                <a href="../notifications.php" class="icon-image4" style="padding-left: 40px;"><img src="../images/11.png" height="48px" width="48px" alt=""></a>
            </nav>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/swiper.min.js"></script>
    <script type="text/javascript">
        var cp1 = 0,
            cp2 = 0,
            cp3 = 0,
            cn1 = 0,
            cn2 = 0,
            cn3 = 0;

        function cpStep1() {
            if (cp1 < 75) {
                cp1 = cp1 + 1;
            }
            $(".progress1").css("width", 50 + cp1);
            // Wait for sometime before running this script again
            setTimeout("cpStep1()", 5);
            $("#cpStep1").text(cp1);
        }

        function cpStep2() {
            if (cp2 < 100) {
                cp2 = cp2 + 1;
            }
            $(".progress2").css("width", 50 + cp2);
            // Wait for sometime before running this script again
            setTimeout("cpStep2()", 5);
            $("#cpStep2").text(cp2);
        }

        function cpStep3() {
            if (cp3 < 0) {
                cp3 = cp3 + 1;
            }
            $(".progress3").css("width", 50 + cp3);
            // Wait for sometime before running this script again
            setTimeout("cpStep3()", 5);
            $("#cpStep3").text(cp3);
        }

        function cnStep1() {
            if (cn1 < 75) {
                cn1 = cn1 + 1;
            }
            $(".progress-1").css("width", 50 + cn1);
            // Wait for sometime before running this script again
            setTimeout("cnStep1()", 5);
            $("#cnStep1").text(cn1);
        }

        function cnStep2() {
            if (cn2 < 100) {
                cn2 = cn2 + 1;
            }
            $(".progress-2").css("width", 50 + cn2);
            // Wait for sometime before running this script again
            setTimeout("cnStep2()", 5);
            $("#cnStep2").text(cn2);
        }

        function cnStep3() {
            if (cn3 < 0) {
                cn3 = cn3 + 1;
            }
            $(".progress-3").css("width", 50 + cn3);
            // Wait for sometime before running this script again
            setTimeout("cnStep3()", 5);
            $("#cnStep3").text(cn3);
        }
        cpStep1();
        cpStep2();
        cpStep3();
        cnStep1();
        cnStep2();
        cnStep3();
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <style>
        @import url("css/styles.css");

        .navbar {
            padding: 12px 12px;
        }

        .container {
            padding: 0px;
        }

        .bgcolor {
            background: url("images/PWADesign.png") !important;
            background-size: cover !important;
            width: 100%;
            height: 700px;
        }

        button#image {
            background: transparent !important;
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

        .nav-link {
            color: white !important;
            font-size: 30px;
            font-weight: bold;
        }

        .material-icons-outlined {
            font-size: 40px !important;
        }
    </style>
    <title>Settings</title>
</head>

<body class="bgcolor">
    <div class="navbar">
        <div class="container">
            <a href="home.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
            <button id="image" class="d-flex justify-content-end" type="button">
                <img id="icon-image" src="images/12.png" class="newimage" height="48px" width="48px" alt="">
            </button>
        </div>
    </div>
    <div class="container">
        <div class="ml-3 ml-md-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="rename-asset.php">Rename Assets <span class="sr-only">(current)</span><i class="material-icons-outlined coloricon float-right mr-5" onclick="">keyboard_arrow_right</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="set-alarms.php">Set Alarms <span class="sr-only">(current)</span><i class="material-icons-outlined coloricon float-right mr-5" onclick="">keyboard_arrow_right</i></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="change-passcode.php">Change Passcode <span class="sr-only">(current)</span><i class="material-icons-outlined coloricon float-right mr-5" onclick="">keyboard_arrow_right</i></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wifi-settings.php">Wifi Settings <span class="sr-only">(current)</span> <i class="material-icons-outlined coloricon float-right mr-5" onclick="">keyboard_arrow_right</i></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=923315991265">Contact Us <span class="sr-only">(current)</span><i class="material-icons-outlined coloricon float-right mr-5" onclick="">keyboard_arrow_right</i></a>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</body>

</html>
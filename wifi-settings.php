<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <style>
        @import url("css/styles.css");

        body,
        html {
            height: 100% !important;
        }

        .bgcolor {
            background: url("images/PWADesign.png") no-repeat center fixed !important;
            background-size: cover !important;
        }


        button {
            background-color: transparent !important;
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            cursor: pointer !important;
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

        span {
            background: transparent !important;
            font-size: 32px !important;
            cursor: pointer;
            color: #fff;
        }
    </style>


    <title>Document</title>
</head>

<body class="bgcolor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                <nav class="navbar d-flex p-0 m-0">
                    <a href="settings.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
                    <span style="font-weight:bold!important; text-align:center" class="d-flex justify-content-center">WIFI <br> SETTINGS</span>
                    <button class="d-flex justify-content-end" type="button">
                        <img id="icon-image" src="images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('settings.php')">
                    </button>
                </nav>
                <br>
                <div class="container">
                    <form action="">
                        <input type="SSID" class="form-control" name="SSID" placeholder="SSID" style="background:transparent;
    border-radius: 0px;
    border: 0px;
    border-bottom: 1px solid white;
    font-size: 18px;"><br>
                        <input type="Password" class="form-control" name="Password" placeholder="Password" style="background:transparent;
    border-radius: 0px;
    border: 0px;
    border-bottom: 1px solid white;
    font-size: 18px;">
                        <div class="row" style="margin-top:100px;">
                            <a href="" class="mx-auto" style="text-decoration:none; color:white">
                                <h4>SAVE</h4>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
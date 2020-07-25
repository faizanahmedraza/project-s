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
            height: 700px;
            width: 100%;
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

        .col-form-label {
            padding-top: 0px!important;
            padding-bottom: 0px!important;
            white-space: nowrap;
            font-size: 24px!important;
        }


        .input:focus {
            box-shadow: none !important;
        }

        label {
            font-size: 18px !important;
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
                <nav class="navbar p-0 m-0">
                    <a href="settings.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
                    <span class="d-flex justify-content-center" style="font-weight:bold!important; text-align: center;">Set <br> Alarms</span>
                    <button class="d-flex justify-content-end" type="button">
                        <img id="icon-image" src="images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('settings.php')">
                    </button>
                </nav>
                <br>
                <form action="" class="mt-0">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="" class="col-6 mb-0 col-form-label text-white pt-0 pb-0 font-weight-bold">Overvoltage</label>
                        </div>
                        <div class="col-6 pt-0 pb-0 mb-0">
                            <div class="input-group mb-0">
                                <input type="text" name="passcode" class="form-control border-0" id="password-id" style="height: 30px;" placeholder="418">
                                <div class="input-group-append">
                                    <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0 p-0 text-white" style="height: 30px; border-bottom: 1px solid #fff;">V</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-6">
                            <label for="" class="col-6 mb-0 col-form-label text-white pt-0 pb-0 font-weight-bold">Undervoltage</label>
                        </div>
                        <div class="col-6 pt-0 pb-0 mb-0">
                            <div class="input-group mb-0">
                                <input type="text" name="passcode" class="form-control border-0" id="password-id" style="height: 30px;" placeholder="342">
                                <div class="input-group-append">
                                    <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0 p-0 text-white" style="height: 30px; border-bottom: 1px solid #fff;">V</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-6">
                            <label for="" class="col-6 mb-0 col-form-label text-white font-weight-bold" >Voltage Unb.</label>
                        </div>
                        <div class="col-6 pt-0 pb-0 mb-0">
                            <div class="input-group mb-0">
                                <input type="text" name="passcode" class="form-control border-0 font-weight-bold" id="password-id" style="height: 30px;" placeholder="2">
                                <div class="input-group-append">
                                    <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0 p-0 text-white" style="height: 30px; border-bottom: 1px solid #fff;">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-6">
                            <label for="" class="col-6 mb-0 col-form-label text-white font-weight-bold">Current Unb.</label>
                        </div>
                        <div class="col-6 pt-0 pb-0 mb-0">
                            <div class="input-group mb-0">
                                <input type="text" name="passcode" class="form-control border-0 pt-0 pb-0 font-weight-bold" id="password-id" style="height: 30px;" placeholder="10">
                                <div class="input-group-append">
                                    <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0 p-0 text-white" style="height: 30px; border-bottom: 1px solid #fff;">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-6">
                            <label for="" class="col-6 mb-0 col-form-label text-white font-weight-bold">THDV</label>
                        </div>
                        <div class="col-6 pt-0 pb-0 mb-0">
                            <div class="input-group mb-0">
                                <input type="text" name="passcode" class="form-control border-0 pt-0 pb-0 font-weight-bold" id="password-id" style="height: 30px;" placeholder="5">
                                <div class="input-group-append">
                                    <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0 p-0 text-white" style="height: 30px; border-bottom: 1px solid #fff;">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-6">
                            <label for="" class="col-6 mb-0 col-form-label text-white font-weight-bold">THDI</label>
                        </div>
                        <div class="col-6 pt-0 pb-0 mb-0">
                            <div class="input-group mb-0 pb-0">
                                <input type="text" name="passcode" class="form-control border-0 pt-0 pb-0" id="password-id" style="height: 30px;" placeholder="20">
                                <div class="input-group-append">
                                    <span id="span" class="input-group-text border-left-0 border-right-0 border-top-0 rounded-0 p-0 pb-0 text-white" style="height: 30px; border-bottom: 1px solid #fff;">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-6 col-form-label text-white pl-3 pt-0 pb-0 font-weight-bold">Max. PF</label>

                        <div class="col-6">
                            <input type="text" class="form-control" id="capbank2" style="height: 30px;" placeholder="1.00">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-6 col-form-label text-white pl-3 pt-0 pb-0 font-weight-bold">Min. PF</label>

                        <div class="col-6 ">
                            <input type="text" class="form-control" id="capbank2" style="height: 35px;" placeholder="0.85">
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="form-row mx-auto border-0 mt-1 font-weight-bold" value="SAVE" style="letter-spacing: 2px;">
                </form>

            </div>
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
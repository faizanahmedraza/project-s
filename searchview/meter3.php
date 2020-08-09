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
            padding: 10px !important;
        }

        button>#icon-image {
            background-color: transparent !important;
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            cursor: pointer !important;
        }

        .swiper-container {
            width: 100%;
            height: 50px;
        }

        .swiper-wrapper {
            margin: 0px;
        }

        .swiper-slide {
            background-position: center;
            width: 170px;
            height: 100px;
            border: none;
            margin-left: 20px;
            margin-bottom: 0px;
        }

        button {
            background: transparent;
            border: none;
            outline: none;
        }

        .dot {
            height: 16px;
            width: 16px;
            background-color: cyan;
            border-radius: 50%;
            filter: blur(4px);
        }

        .dot.blink {
            -webkit-animation: blink-animation 1.5s infinite;
            animation: blink-animation 1.5s infinite;
        }

        @-webkit-keyframes blink-animation {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes blink-animation {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }


        div.card-body {
            padding-bottom: 20px !important;
            padding-top: 5px !important;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12 bkground">
                <nav class="navbar p-0 m-0">
                    <a href="../search/finddata.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
                    <div class="d-flex justify-content-center font-weight-bold" style="text-align:center"> Meter 3 <br> <?php
                                                                                                                        $time = time();
                                                                                                                        $day = date("w", $time);
                                                                                                                        $month = date("m", $time);
                                                                                                                        $hour = date("h", $time);
                                                                                                                        $min = date("i", $time);
                                                                                                                        echo $day, "/", $month, " ", $hour, ":", $min;
                                                                                                                        ?> </div>
                    <button class="d-flex justify-content-end" type="button">
                        <img id="icon-image" src="../images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('../settings.php')">
                    </button>
                </nav>
                <br>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Voltage</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Current</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">THDI</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">THDV</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">VHarm.</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">IHarm.</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Power</h4>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mt-1" style="background: black;">
                    <div class="car-body mx-auto">
                        <div id="light" class="dot blink"></div>
                    </div>
                </div>

                <div class="container mt-4 ml-md-3">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-6 col-md-4">
                            <div class="card" style="width: 175px; height: 160px; background-color: #041a24;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="font-weight-bold" style="font-size: 42px; padding-top:0px;">R</div>
                                    </div>
                                    <div class="row">
                                        <div class="ml-0"><a href="" style="font-size: 64px; font-weight:bold; margin-right:10px; text-decoration:none;">220</a><small style="color:  #007BFF; font-weight:bold;">V</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card" style="width: 175px; height: 160px; background-color: #041a24;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="font-weight-bold" style="font-size: 42px; padding-top:0px;">S</div>
                                    </div>
                                    <div class="row">
                                        <div class="ml-0"><a href="" style="font-size: 64px; font-weight:bold; margin-right:10px; text-decoration:none;">220</a><small style="color:  #007BFF; font-weight:bold;">V</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-2"></div>
                        <div class="col-6 col-md-4">
                            <div class="card" style="width: 175px; height: 160px; background-color: #041a24;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="font-weight-bold" style="font-size: 42px; padding-top:0px;">T</div>
                                    </div>
                                    <div class="row">
                                        <div class="ml-0"><a href="" style="font-size: 64px; font-weight:bold; margin-right:10px; text-decoration:none;">220</a><small style="color:  #007BFF; font-weight:bold;">V</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card" style="width: 175px; height: 160px; background-color: #041a24;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="font-weight-bold" style="font-size: 26px; padding-top:15px;">Unbalance</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="ml-0"><a href="" style="font-size: 64px; font-weight:bold; margin-right:80px; text-decoration:none;">2</a><small style="color:  #007BFF; font-weight:bold;">%</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>
            </div>
        </div>
        <footer class="fixed-bottom mb-1">
            <div class="container">
                <nav class="navbar d-flex justify-content-center">
                    <a href="../home.php" class="pl-0 icon-image1"><img src="../images/5.png" height="48px" width="48px" alt=""></a>
                    <!--access_time -->
                    <a href="../search/finddata.php" class="icon-image2" style="padding-left: 40px;"><img src="../images/6.png" height="48px" width="48px" alt=""></a>
                    <a href="../graphBuilder/meter3.php" class="icon-image3" style="padding-left: 40px;"><img src="../images/9.png" height="48px" width="48px" alt=""></a>
                    <a href="../notifications.php" class="icon-image4" style="padding-left: 40px;"><img src="../images/11.png" height="48px" width="48px" alt=""></a>
                </nav>
            </div>
        </footer>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Swiper JS -->
        <script src="../js/swiper.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                initialSlide: 0,
                loop: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 0,
                    modifier: 1,
                    slideShadows: true,
                }
            });
        </script>
</body>

</html>
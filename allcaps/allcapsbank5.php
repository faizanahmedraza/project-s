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

        .navbar-toggler,
        .navbar-toggler:active,
        .navbar-toggler:focus {
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            cursor: pointer !important;
        }

        span.material-icons-outlined {
            background: transparent !important;
            font-size: 32px !important;
            cursor: pointer;
            color: #fff;
        }

        .nav-link {
            color: white !important;
        }

        .material-icons-outlined {
            font-size: 40px !important;
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
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12 bkground">
                <nav class="navbar p-0 m-0">
                    <a href="../home.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
                    <span style="font-weight:bold!important;" class="d-flex justify-content-center">ALL Cap. Banks</span>
                    <button class="navbar-toggler d-flex justify-content-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img id="icon-image" src="../images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="diffImage()"> </button>
                </nav>
                <br>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Bank5</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Bank1</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Bank2</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Bank3</h4>
                            </button>
                        </div>
                        <div class="swiper-slide active">
                            <button type="button">
                                <h4 class="meters text-white">Bank4</h4>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mt-1" style="background: transparent;">
                    <div class="car-body mx-auto">
                        <div id="light" class="dot"></div>
                    </div>
                </div>

                <div class="card text-center mt-4 mx-auto" style="width: 80%; height: 200px; background-color:#101E4B">
                    <div class="card-body m-0 p-0">
                        <a href="bank5.php" style="font-size: 64px; text-decoration:none; padding-bottom:0%"><strong>122</strong><sub>kvarh</sub></a>
                        <p class="text mb-0" style="font-size: 36px; font-weight:bold">LAST 1-MONTH </p>
                        <p><span class="text pt-0" style="font-size: 18px; font-weight:lighter">click for details</span></p>

                    </div>
                </div>

                <div class="card mt-4" style="background: transparent;">
                    <div class="car-body mx-auto">
                        <div class="text">Rp. 12k</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-2 col-sm-0 col-0"></div>
        </div>
    </div>
    <footer class="fixed-bottom mb-1">
        <div class="container">
            <nav class="navbar d-flex justify-content-center">
                <a href="../home.php" class="pl-0 icon-image1"><img src="../images/4.png" height="48px" width="48px" alt=""></a>
                <!--access_time -->
                <a href="" class="icon-image2" style="padding-left: 40px;"><img src="../images/7.png" height="48px" width="48px" alt=""></a>
                <a href="../graphBuilder/meter2.php" class="icon-image3" style="padding-left: 40px;"><img src="../images/9.png" height="48px" width="48px" alt=""></a>
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
            },
            on: {
                slideChange() {
                    const swiper = this;
                    console.log(swiper);
                    if (swiper.activeIndex === 4) {
                        var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
                        console.log(url);
                        window.location = "allcapsbank4.php";
                    } else if (swiper.activeIndex === 6) {
                        var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
                        console.log(url);
                        window.location = "allcaps.php";
                    }
                }
            }
        });
    </script>
</body>

</html>
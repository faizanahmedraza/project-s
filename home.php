<?php
session_start();
error_reporting(0);
$userProfile = $_SESSION['useremail'];
if ($userProfile = true) {
} else {
    header("location:index.php");
}
$sql = "select * from login where email = '$userProfile'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <style>
        @import url('css/styles.css');

        .container {
            padding: 0px !important;
        }

        .swiper-container {
            width: 100%;
            padding-top: 5px;
        }

        .swiper-slide {
            width: 300px;
            height: 180px;
            margin-left: 10px;
        }

        .card {
            height: 160px !important;
            width: 260px;
            border: none !important;
            border-radius: 10px !important;
            cursor: pointer !important;
        }

        .card-body {
            margin: 1px !important;
            padding: 1px !important;
        }

        #graph1 {
            background-color: black !important;
            width: 100%;
        }

        .card-header {
            padding: 0px 0px 0px 20px;
        }

        .card-header {
            height: 160px;
        }
    </style>
    <title>Home-Dashboard</title>
</head>

<body>
    <?php require 'common/header.php'; ?>
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card" style="background-color: #020c12;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7 col-7">
                                    <div class="pl-2 ml-2" style="color: #125a70; font-size:26px;">kVARh</div>
                                    <div class="pl-2 ml-2" style="color:#7e7e7e;">Rp.10k</div>
                                </div>
                                <div class="col-lg-5 col-5">
                                    <a href="" style="color:#125a70!important;"><img src="images/1.png" height="76px" width="76px" class="mr-3 pt-2" alt=""></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container text-center">
                                    <div class="d-flex flex-column">
                                        <div id="10" class="justify-content-center" style="color:#7e7e7e;"><b>HARM. FILTERS</b></div>
                                        <div class="justify-content-center" style=" font-size:18px; color: #383a3c;">no filters connected</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" id="100" style="background-color: #041a24 !important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7 col-7">
                                    <div class="pl-2 ml-2 font-weight-bold" style="color: #26b5e3; font-size:26px; letter-spacing: 3px;">kWh</div>
                                    <div id="homeStep" class="pl-2 ml-2"></div>
                                </div>
                                <div class="col-lg-5 col-5">
                                    <a href="allmeters/allmeter1.php" style="color:white!important;"><img src="images/2.png" height="76px" width="76px" class="mr-3 pt-2" alt=""></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container text-center">
                                    <div class="d-flex flex-column">
                                        <div class="justify-content-center"><b>METERS</b></div>
                                        <div class="justify-content-center" style=" font-size:18px; color:#70747a;">5 meters connected</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card" style="background-color: #020c12;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7 col-7">
                                    <div class="pl-2 ml-2" style="color: #125a70; font-size:26px;">kVARh</div>
                                    <div class="pl-2 ml-2" style="color:#7e7e7e;">Rp.13k</div>
                                </div>
                                <div class="col-lg-5 col-5">
                                    <a href="allcaps/allcaps.php" style="color:#125a70!important;"><img src="images/3.png" height="76px" width="76px" class="mr-3 pt-2" alt=""></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container text-center">
                                    <div class="d-flex flex-column">
                                        <div id="30" class="justify-content-center" style="color:#7e7e7e;"><b>CAP. BANKS</b></div>
                                        <div class="justify-content-center" style=" font-size:18px; color: #383a3c;">5 banks connected</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-3 ml-md-0 mb-2 font-weight-bold" style="font-size: 30px;">Energy Cost</div>
        <canvas id="myChart" class="w-100" style="height:270px!important; font-size:18px!important"></canvas>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        var i = 0;
        function Step() {
            if (i < 231) {
                i = i + 1;
            }
            setTimeout("Step()", 5);
           document.getElementById("homeStep").innerHTML = "Rp. " + i + "k";
        }
        Step();
        // Swiper js
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            initialSlide: 1,
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
                    if (swiper.activeIndex === 0) {
                        var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
                        console.log(url);
                        window.location = "filtershome.php";
                    } else if (swiper.activeIndex === 2) {
                        var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
                        console.log(url);
                        window.location = "capshome.php";
                    }
                }
            }
        });
        <?php

        $dataPoints = array(
            array("y" => 0, "label" => "Feb"),
            array("y" => 115, "label" => "Mar"),
            array("y" => 231, "label" => "Apr"),
        );
        ?>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: "Energy Cost",
                    data: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>,
                    backgroundColor: ['rgb(0,0,0)',
                        'rgb(0,0,0)',
                        'rgb(0,0,0)'
                    ],
                    lineTension: 0,
                    pointBackgroundColor: "#26b5e3",
                    borderColor: "#26b5e3",
                    radius: 1,
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                bezierCurve: false,
                layout: {
                    padding: {
                        left: 20,
                        right: 30,
                        top: 0,
                        bottom: 0
                    }
                },
                legend: {
                    display: false,
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            autoSkip: true,
                            beginAtZero: true,
                            stepSize: 100,
                            min: 0,
                            max: 300,
                            fontSize: 18,
                            fontFamily: "'Montserrat', sans-serif",
                            fontColor: 'rgb(255,255,255)'
                        }
                    }],
                    xAxes: [{
                        offset: true,
                        ticks: {
                            autoSkip: true,
                            minRotation: 0,
                            maxRotation: 50,
                            padding: 0,
                            fontSize: 18,
                            fontFamily: "'Montserrat', sans-serif",
                            fontColor: 'rgb(255,255,255)'
                        }
                    }]
                }
            }
        });
    </script>

    <?php require 'common/footer.php' ?>
</body>

</html>
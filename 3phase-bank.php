<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <style>
        @import url("css/styles.css");

        .navbar {
            padding: 12px 12px;
        }

        .navbar>.container {
            padding: 0px !important;
        }

        button {
            background-color: transparent !important;
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            cursor: pointer !important;
        }


        canvas {
            /* width: 100%; */
            height: 300px !important;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <nav class="navbar mb-0" style="background-color: black;">
        <div class="container">
            <a href="allmeters.php"><i style="font-size: 40px!important; color:white" class="material-icons-outlined coloricon float-left">keyboard_arrow_left</i> </a>
            <div class="d-flex justify-content-center font-weight-bold" style="text-align:center"> Bank <br> Voltage</div>
            <button class="d-flex justify-content-end" type="button">
                <img id="icon-image" src="images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('settings.php')">
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="pr-4"><?php
                    $time = time();
                    $day = date("w", $time);
                    $month = date("m", $time);
                    $hour = date("h", $time);
                    $min = date("i", $time);
                    echo $day, "/", $month, " ", $hour, ":", $min;
                    ?></div><div class="pr-3"> - </div>
            <div><?php
                    $time = time();
                    $day = date("w", $time);
                    $month = date("m", $time);
                    $hour = date("h", $time);
                    $min = date("i", $time);
                    echo $day, "/", $month, " ", $hour, ":", $min;
                    ?></div>
        </div>
        <canvas id="myChart" class="mt-4" style="height:290px; width:500px"></canvas>
    </div>


    <footer class="fixed-bottom mb-1">
        <div class="container">
            <nav class="navbar d-flex justify-content-center">
                <a href="./searchview/cap.bank1.php" class="pl-0 icon-image1"><img src="images/5.png" height="48px" width="48px" alt=""></a>
                <!--access_time -->
                <a href="/search/finddata.php" class="icon-image2" style="padding-left: 40px;"><img src="images/7.png" height="48px" width="48px" alt=""></a>
                <a href="#" class="icon-image3" style="padding-left: 40px;"><img src="images/8.png" height="48px" width="48px" alt=""></a>
                <a href="./notifications.php" class="icon-image4" style="padding-left: 40px;"><img src="images/11.png" height="48px" width="48px" alt=""></a>
            </nav>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        <?php
        $dataPoints = array(0, 400, 0, -400, 0, 400, 0, -400, 0, 400);
        $dataPoints1 = array(300, 0, -400, 0, 400, 0, -400, 0, 400, -400);
        $dataPoints2 = array(-300, 0, 400, 0, -400, 0, 400, 0, -400, 0);
        ?>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["", "", "", "", "", "", "", "", ""],
                datasets: [{
                    label: "R",
                    data: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>,
                    borderColor: '#2a4a84',
                    borderWidth: 2,
                    radius: 0,
                    fill: false
                }, {
                    label: "S",
                    data: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>,
                    borderColor: "#d77a3c",
                    borderWidth: 2,
                    radius: 0,
                    fill: false
                }, {
                    label: "T",
                    data: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>,
                    borderColor: "#8d8d8d",
                    borderWidth: 2,
                    radius: 0,
                    fill: false
                }]
            },
            options: {
                layout: {
                    padding: {
                        left: 20,
                        right: 30,
                        top: 0,
                        bottom: 0
                    }
                },
                legend: {
                    display: true,
                    fillStyle: Color,
                    fontSize: 24,
                },
                scales: {
                    yAxes: [{
                        offset: false,
                        gridLines: {
                            Color: "#434343",
                            gridLineWidth: 1
                        },
                        ticks: {
                            autoSkip: true,
                            beginAtZero: false,
                            stepSize: 200,
                            min: -400,
                            max: 400,
                            fontSize: 18,
                            fontFamily: "'Montserrat', sans-serif",
                            fontColor: 'rgb(255,255,255)'
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            Color: "#434343",
                            gridLineWidth: 1
                        },
                        ticks: {
                            beginAtZero: false,
                            fontFamily: "'Montserrat', sans-serif",
                            fontColor: 'rgb(255,255,255)'
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>
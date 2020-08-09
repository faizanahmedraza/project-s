<!DOCTYPE html>
<html>

<head>
  <title>Find data</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@5.0.2/keen-slider.min.css" />
  <link rel="stylesheet" href="../css/swiper.min.css">

  <style>
    @import url("../css/styles.css");

    .swiper-container1,
    .swiper-container2 {
      width: 100%;
      height: 50px;
    }

    .swiper-wrapper {
      margin: 0px;
    }

    .swiper-slide {
      background-position: center;
      width: 200px;
      height: 100px;
      border: none;
      margin-left: 10px;
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


    input[type=text] {
      background: transparent;
      border: none;
      border-bottom: 1px solid white;
      border-radius: 0px;
      text-decoration: none;
      text-shadow: none;
      outline: none;
    }
    input[type=text]:focus,
    input[type=text]:active,
    input[type=text]:invalid,
    input[type=text]:valid,
    input[type=text]:visited{
      background: transparent;
      border: none;
      border-bottom: 1px solid white;
      border-radius: 0px;
      text-decoration: none;
      text-shadow: none;
      outline: none;
    }
  </style>
</head>

<body>
  <nav class="navbar p-0 m-0">
    <div class="container">
      <span style="font-size:36px; font-weight:bold!important;" class="d-flex justify-content-center">Graph Builder</span>
      <button class="navbar-toggler d-flex justify-content-end" type="button">
        <img id="icon-image" src="../images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('../settings.php')"> </button>
      </button>
    </div>
  </nav>
  <div class="container">
    <div class="swiper-container1 mt-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Meter2</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Meter4</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Meter5</h4>
          </button>
        </div>
      </div>
    </div>

    <div class="card mt-2" style="background: transparent;">
      <div class="car-body mx-auto">
        <div id="light" class="dot blink"></div>
      </div>
    </div>
    <div class="container">
    <div class="swiper-container2 mt-3">
      <div class="swiper-wrapper">
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Current</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Voltage</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">THDI</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">THDV</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">VHarm.</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">IHarm.</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Power</h4>
          </button>
        </div>
      </div>
    </div>
    </div>
    <div class="card mt-2" style="background: transparent;">
      <div class="car-body mx-auto">
        <div id="light" class="dot blink"></div>
      </div>
    </div>

    <form class="mt-2">
      <div class="form-group row">
        <div class="col-6 mt-3">
          <label for="" class="col-6 mb-0 col-form-label text-white pt-0 pb-0 font-weight-bold text-center">From</label>
        </div>
        <div class="col-6 pt-0 pb-0 mb-0">
          <input class="form-control" type="text" value="2011-08-19" name="from" id="origin" placeholder="Apr 1, 13:23">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-6 mb-0 pb-0">
          <label for="" class="col-6 mb-0 col-form-label text-white font-weight-bold text-center pb-0">To</label>
        </div>
        <div class="col-6 pt-0 pb-0 mb-0">
          <input class="form-control" type="text" value="2011-08-19" id="dest" placeholder="Apr 17, 14:23">
        </div>
      </div>
    </form>

    <div class="mt-5 text-center">
      <button type="button" class="text-white font-weight-bold" style="font-size:34px; text-align: center; outline: none; text-shadow:none; cursor: pointer;" onclick="window.open('../3phase.php')">VIEW <br> GRAPH</button>
      <!-- <span class="d-flex justify-content-center" style="font-weight:bold!important; text-align: center;">Set <br> Alarms</span> -->
    </div>
  </div>
  <footer class="fixed-bottom mb-1">
    <div class="container">
      <nav class="navbar d-flex justify-content-center">
        <a href="../home.php" class="pl-0 icon-image1"><img src="../images/5.png" height="48px" width="48px" alt=""></a>
        <!--access_time -->
        <a href="../search/finddata.php" class="icon-image2" style="padding-left: 40px;"><img src="../images/7.png" height="48px" width="48px" alt=""></a>
        <a href="#" class="icon-image3" style="padding-left: 40px;"><img src="../images/8.png" height="48px" width="48px" alt=""></a>
        <a href="../notifications.php" class="icon-image4" style="padding-left: 40px;"><img src="../images/11.png" height="48px" width="48px" alt=""></a>
      </nav>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/min/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/keen-slider@5.0.2/keen-slider.min.js"></script>
  <!-- Swiper JS -->
  <script src="../js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container1', {
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
          console.log(swiper);
          if (swiper.activeIndex === 0) {
            var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
            console.log(url);
            window.location = "meter2.php";
          } else if (swiper.activeIndex === 2) {
            var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
            console.log(url);
            window.location = "meter5.php";
          }
        }
      }
    });
    var swiper1 = new Swiper('.swiper-container2', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      initialSlide: 4,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
      }
    });
    console.log(swiper1);
  </script>
</body>

</html>
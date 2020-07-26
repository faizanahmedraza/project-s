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

    .wrapper {
      padding: 50px;
      display: flex;
      justify-content: center;
      background: #000;
    }

    .wheel {
      color: #fff;
      display: block;
      height: 200px;
      overflow: visible;
      width: 100%;
    }

    .wheel--perspective-right .wheel__inner {
      perspective-origin: calc(50% + 100px) 50%;
      transform: translateX(10px);
      -webkit-transform: translateX(10px);
    }

    .wheel--perspective-left .wheel__inner {
      perspective-origin: calc(50% - 100px) 50%;
      transform: translateX(-10px);
      -webkit-transform: translateX(-10px);
    }

    .wheel__inner {
      display: flex;
      align-items: center;
      justify-content: center;
      perspective: 1000px;
      transform-style: preserve-3d;
      height: 16%;
      width: 100%;
    }

    .wheel__slides {
      height: 100%;
      position: relative;
      width: 100%;
    }

    .wheel__shadow-top,
    .wheel__shadow-bottom {
      background: linear-gradient(to bottom,
          rgba(0, 0, 0, 0.9) 0%,
          rgba(0, 0, 0, 0.5) 100%);
      left: 0;
      height: calc(42% + 2px);
      width: 100%;
      border-bottom: 0.5px solid rgba(255, 255, 255, 0.3);
      position: relative;
      margin-top: 20px;
      z-index: 5;
      transform: translateZ(100px);
      -webkit-transform: translateZ(100px);
    }

    .wheel__shadow-bottom {
      background: linear-gradient(to bottom,
          rgba(0, 0, 0, 0.5) 0%,
          rgba(0, 0, 0, 0.9) 100%);
      margin-top: 2px;
      border-bottom: none;
      border-top: 0.5px solid rgba(255, 255, 255, 0.3);
    }

    .wheel__label {
      font-weight: 500;
      font-size: 15px;
      line-height: 1;
      margin-top: 1px;
      margin-left: 5px;
      transform: translateZ(100px);
      -webkit-transform: translateZ(100px);
    }

    .wheel__slide {
      align-items: center;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      display: flex;
      font-size: 20px;
      font-weight: 400;
      height: 100%;
      width: 100%;
      position: absolute;
      justify-content: flex-end;
    }
  </style>
</head>

<body>
  <nav class="navbar p-0 m-0">
    <div class="container">
      <span style="font-size:36px; font-weight:bold!important;" class="d-flex justify-content-center">Find Data</span>
      <button class="navbar-toggler d-flex justify-content-end" type="button">
        <img id="icon-image" src="../images/13.png" class="newimage" height="48px" width="48px" alt="" onclick="window.open('settings.php')"> </button>
      </button>
    </div>
  </nav>
  <div class="container">
    <div class="swiper-container mt-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Meter3</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Meter4</h4>
          </button>
        </div>
        <div class="swiper-slide text-center">
          <button type="button">
            <h4 class="meters text-white">Mete5</h4>
          </button>
        </div>
      </div>
    </div>

    <div class="card mt-1" style="background: transparent;">
      <div class="car-body mx-auto">
        <div id="light" class="dot"></div>
      </div>
    </div>


    <div class="wrapper">
      <div id="date-wheel" style="width: 150px;"></div>
      <div id="hour-wheel" style="width: 70px;"></div>
      <div id="minute-wheel" style="width: 70px;"></div>
    </div>
  

  <div class="mt-2">
    <button type="button" class="form-row mx-auto border-0 text-white font-weight-bold" style="font-size:34px; outline: none; text-shadow:none; cursor: pointer;">SEARCH</button>
  </div>

  </div>
  <footer class="fixed-bottom mb-1">
        <div class="container">
            <nav class="navbar d-flex justify-content-center">
                <a href="../home.php" class="pl-0 icon-image1"><img src="../images/5.png" height="48px" width="48px" alt=""></a>
                <!--access_time -->
                <a href="" class="icon-image2" style="padding-left: 40px;"><img src="../images/6.png" height="48px" width="48px" alt=""></a>
                <a href="../graphBuilder/meter2.php" class="icon-image3" style="padding-left: 40px;"><img src="../images/9.png" height="48px" width="48px" alt=""></a>
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
            window.location = "meter3.php";
          } else if (swiper.activeIndex === 2) {
            var url = swiper.$wrapperEl.children('.swiper-slide').eq(swiper.activeIndex);
            console.log(url);
            window.location = "meter5.php";
          }
        }
      }
    });
    // wheel -- date picker
    function Wheel(wrapper, options) {
      var defaultOptions = {
        initIdx: 0,
        loop: false,
        perspective: "center",
        width: 100,
        label: ""
      };

      options = {
        ...defaultOptions,
        ...options
      };

      var wheel;
      var slides = [];

      function createMarkup() {
        for (var i = 0; i < options.length; i++) {
          var div = document.createElement("div");
          div.setAttribute("class", "wheel__slide");
          slides.push(div);
        }

        wheel = createDiv(
          "wheel keen-slider wheel--perspective-" + options.perspective,
          [
            createDiv("wheel__shadow-top"),
            createDiv("wheel__inner", [
              createDiv(
                "wheel__slides",
                slides,
                "width:" + options.width + "px"
              ),
              createDiv(
                "wheel__label",
                document.createTextNode(options.label)
              )
            ]),
            createDiv("wheel__shadow-bottom")
          ]
        );
        wrapper.appendChild(wheel);
      }

      var slidesPerView = options.loop ? 9 : 1;
      var slideDegree = 360 / 20;
      var wheelSize = 20;
      var radius = 200 / 2;

      function createDiv(className, append, style) {
        var div = document.createElement("div");
        if (className) div.setAttribute("class", className);
        if (style) div.setAttribute("style", style);
        if (!append) return div;
        if (!Array.isArray(append)) append = [append];
        append.forEach(element => {
          div.appendChild(element);
        });
        return div;
      }

      function init() {
        createMarkup();
        var sliderOptions = {
          centered: options.loop,
          vertical: true,
          friction: 0.0025,
          initial: options.initIdx || 0,
          loop: options.loop,
          dragSpeed: (val, instance) => {
            var height = instance.details().widthOrHeight;
            return (
              val *
              (height /
                ((height / 2) * Math.tan(slideDegree * (Math.PI / 180))) /
                slidesPerView)
            );
          },
          move: s => {
            updateSlides(s.details());
          },
          rubberband: !options.loop,
          mode: "free-snap",
          slides: options.length,
          slidesPerView: slidesPerView
        };
        var slider = new KeenSlider(wheel, sliderOptions);
        return slider;
      }

      function updateSlides(details) {
        var offset = options.loop ? 1 / 2 - 1 / slidesPerView / 2 : 0;
        var values = [];
        for (let i = 0; i < options.length; i++) {
          var distance =
            (details.positions[i].distance - offset) * slidesPerView;

          var rotate =
            Math.abs(distance) > wheelSize / 2 ?
            180 :
            distance * (360 / wheelSize) * -1;
          var style = {
            transform: `rotateX(${rotate}deg) translateZ(${radius}px)`,
            WebkitTransform: `rotateX(${rotate}deg) translateZ(${radius}px)`
          };
          var value = options.setValue ?
            options.setValue(
              i,
              details.absoluteSlide + Math.round(distance)
            ) :
            i;
          values.push({
            style,
            value
          });
          slides[i].style.transform = style.transform;
          slides[i].innerHTML = value;
        }
      }

      return init();
    }

    function formatDate(idx) {
      return moment()
        .subtract(idx, "days")
        .format("ddd D MMM");
    }

    new Wheel(document.getElementById("date-wheel"), {
      loop: true,
      length: 24,
      setValue: formatDate,
      width: 140,
      perspective: "right"
    });

    new Wheel(document.getElementById("hour-wheel"), {
      loop: true,
      length: 24,
      width: 23
    });

    new Wheel(document.getElementById("minute-wheel"), {
      loop: true,
      length: 60,
      width: 23,
      perspective: "left"
    });
  </script>
</body>

</html>
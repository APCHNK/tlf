<?php // этот php-код компилирует less/style.less в css/style.css	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

    <body>
        <style>
            .wrapper{
                justify-content: center;
    align-items: center;
            }
            @media (min-width: 1023px) and (max-width: 1700px) {
  body {
    display: flex;
  }
  .wrapper {
    zoom: 80%;
  }
}
        </style>
        <div class="wrapper" style="position: relative;">
        <section class="sec8">
            <div class="bg1" data-aos="fade-down">
                <img src="./assets/img/bg6.svg" alt="">
            </div>
            <div class="bg2" data-aos="fade-up">
                <img src="./assets/img/bg7.svg" alt="">
            </div>
            <div class="container">
                <div class="left" data-aos="fade-left">
                    <div class="text">
                        <div class="title">Welcome!</div>
                        <div class="subtitle">Register your profile</div>
                    </div>
                    <div class="image">
                        <img src="./assets/img/sign.svg" alt="">
                    </div>
                </div>
                <div class="right" data-aos="fade-right">
                    <form action="">
                        <div class="title">
                            Sign in
                        </div>
                        <div class="subtitle">
                            Enter your username and password to log in.
                        </div>
                        <div class="inputs">
                            <div class="input">
                                <span>Name</span>
                                <input type="text">
                            </div>
                            <div class="input">
                                <span>Surname</span>
                                <input type="text">
                            </div>
                            <div class="input">
                                <span>Email</span>
                                <input type="text">
                            </div>
                            <div class="input">
                                <span>Password</span>
                                <input type="text">
                            </div>
                        </div>
                        <div class="other">
                            <div class="text">our continues with</div>
                            <div class="gf">
                                <a href="">
                                    <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect x="0.94043" y="0.583008" width="38.2915" height="38.2915" fill="url(#pattern0)"/>
                                        <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_6_176" transform="scale(0.015625)"/>
                                        </pattern>
                                        <image id="image0_6_176" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD2klEQVR4nO2az49URRDHe3SNCezOq5oVCHDA4EzVMDFe9g8Y8KCgIVHiRpapmlUkeyFeSYhRSVTAi7+C8geYkAgHDZDwIySYCIk3XQXlhyb8SBAjkMgK60qMpmeyetiF12/mvZneoT9JHad76tvVVdXdz5hAIBAIBAKBQCAzFlSG+5Hqa5BlB5IcAJYfkfQGkvzVNL0BpGeQ9SCSbseSPmN/Y+Y4Oes0sO4Flklk/SeJAettINmHJKvtWGYuUWAdRpbxpE7fVQySU1Gp/rzxnYEVIyVkPZaW4zOM9HhU2rDc+Aiw1IB0IjPn/4sGnQCqi/GIXCNxZez4zGiQLcYDckCyu9POA+mVQa5xt503jbLWeeevFoq1ihd7Hlt2RP5E0gtAehJYTiDpOVv2nFaeRsteZHtImPCA5BdkeT/i2kpjhh+cMejQ2ENQ1iqwvosk17x13pKk1AHJTSB9fdETMt8k6hxlC5D+4Z3zBa6/kGC/ft9O3bZOA+shb5w3zZL3naPzRwd544DpJbBxoHEK+1OFYi1veg1g3euy571tV9thkDcONMpXfOi/YXoRdAh/26T0wjl+VoB1Z+z+J/3A9CpIciBOgIjrq5KPq+eR9efUjHR/JgIAydmY1Z8y1WpfYgFY/m69pZ49CWdyg4Qk12MEuNDSuCkLYC2TPISkU/dUnvVrXwQolOpL72sBBnn9kgwEkGv33gJy0RcB+mnkkdQFgOa9vfdJEEnvzHrcbhck3R83eUTyZLcFANbLqTvvfP1F+qFpYVzbZLkYsnwcKwDJkaT/wQn7QuOwAr9m2Qoj1TY5RMDOTCZfUBnud3zi2pbJHzBvPoAs38TOX6o9m+V54LP4ENSJfEWKac8dsbwUv/oyuXhobJ7JCnTbBjYMT6d5IRLx6KOxZbhpn5uMySHrt44Z+VgaIuQrrxRc5wSWtSZrorKuS1CSTrezHWDFhmV2DLf55KdW+pCWsBeeziI03w+2JaoO1WofkGwG1t9d57E5wnSKfEWK9tjp+uemS6TtExrN0mwrVa32ReXRIfuGYJuZZGPLeMdWfxos10YSCvC/kU4ByyX7NIYsXwHLDy0IOj3WHSuc6QZI8nbLIqRkUJatpovkkPWT7gkgn/rw/VAOSd/q+MqT7DPFVx82voCkLybJ2m3arkyOvO2SL9YfA5LDGTr+m+1DjO9EJM85HVzcw/0WsL43f7ksNHOIHLI+DaR7XL7+uEuSGwfW1xY+vn6RmcssHhqbVyjXn0LSd5DlC1v3G9fszX5g0j6pNd4dSL5Eko8ilpe9+AgqEAgEAoFAIGB6l38Bd60+8WuLDYIAAAAASUVORK5CYII="/>
                                        </defs>
                                    </svg>
                                    <span>Sign in with Google</span>
                                </a>
                                <a href="">
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect x="0.386719" y="0.583008" width="38.2915" height="38.2915" fill="url(#pattern0)"/>
                                        <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_6_183" transform="scale(0.01)"/>
                                        </pattern>
                                        <image id="image0_6_183" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAA95JREFUeAHtnb1rFEEYh89gIWLYmU3iVxVCbmYSjBYRsRFS2dgIEsXcvJuoKJJYaCFiIwERrCwsBDshfkD8BwQLLWxsLMTGxkawF7XQRtmQlRCcy+b2ZzGTX2C53Nzdc/M+T4rcHpe0WvyiARqgARqgARqgARqgARqgARqAGRgentuRj3WO5kYu5lZuayMPM1M81VaWtZUn5fXV4762xV1l5JY2xXxu/Wnl/JR2nYl+VwzANrQVQdnEjNZGFpTrvNTG/9JWfjc5cuMfbUWPjWceHPP7tC0eKOt/NAmw/rEMsuk0i33KylVl5Pt6mYjrDLKJIHpkOtPtzguE+BCDQWoG2TV6bkgbeR8SiVpnkBpBBu35fu38O5T0bhwGqRFEW7/UTSLyNgbZIEhuijNI4RuxGKRLkP2Tl3YqK583koi8nUG6BNHOX0HKrsNikC5BlPEf60hE3odBAkEyK4eRouuyGCQQZOXkYMPzUnUjrL0fgwSC6La8Wiuq1++Vla/lOS/tihlt/DFl/KGsPTMSOsoXoIEtbenlbcrIt14jVI9T1r/h6XTAz9HQ+NzeSmqvl+XJx90Hzu4BbIeI8k2mXkNUj8ucPKNJkIHczR6vxPZ86eQmaDvEKONP9hyi+s3MFPM0CTKQW5luGkQZEdB2iEEEKRk0CTLAICCRKAyDoEyCOAwCEonCMAjKJIjDICCRKAyDoEyCOAwCEhnC5FYuaOtv1D7a8rjpC0O9wtjEc/7dX3E9NEcy68p0PjQWXJ0S+c+XysiXZMSHBokqiJW3oTmSWY8qSNs/T0Z8aJCogji5F5ojmfWYguRGriUjPjRIVEGcPxWaI5n1mIIMmOJIMuJDg8QUpPyoXGiOZNajCWLkZ6u12JeM+NAg0QSx8ik0Q1Lr8QTxr5MSHxomoiBLoRmSWo8miCnuJCU+NEw0QaxcDs2Q1Ho0Qdr+RFLiQ8NEE8QWB0MzJLWej3bGMzc7WR0DZs6FPp9Rrpd/TKbx+ydGFro9x79ua01NbU9KPGoYvoWLMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMAyCMgniMAhIJArDICiTIA6DgESiMKv/YWdZW+n5KBmo/ZBDAzRAAzRAAzRAAzRAAzRAAykZ+AO792YTza3yEwAAAABJRU5ErkJggg=="/>
                                        </defs>
                                    </svg>

                                    <span>Sign in with Facebook</span>
                                </a>
                            </div>
                            <div class="create">
                                <a href="">Create an Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        </div>
            <link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />
            <!-- FOR MODAL -->
            <script src="./assets/js/classie.js"></script>
            <script src="./assets/js/modalEffects.js"></script>
            <script src="./assets/js/cssParser.js"></script>
            <!-- FOR MODAL -->

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="./assets/js/jquery.validate.min.js"></script>
            <script src="./assets/js/jquery.maskedinput.js"></script>
            <script src="./assets/js/wow.min.js"></script>

            <!-- https://github.com/verlok/vanilla-lazyload#-getting-started---html -->
            <script src="./assets/js/lazyload.js"></script>

            <!-- Counter -->
            <script src="./assets/js/counter/jquery.cookie.js"></script>
            <script src="./assets/js/counter/jquery.plugin.js"></script>
            <script src="./assets/js/counter/jquery.countdown.js"></script>
            <script src="./assets/js/counter/jquery.countdown-ru.js"></script>
            <script>
                var endDateTime = new Date();
                var nowDateTime = new Date(3600 * 24 * 1000);
            </script>
            <!-- End Counter -->
            <script src="https://www.youtube.com/iframe_api"></script>
            <script src="./assets/js/script.js"></script>

            <link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css">
            <script src="./assets/js/swiper/swiper-bundle.min.js"></script>

            <script>
                var lazyLoadInstance = new LazyLoad({});
                /*
                var swiper = new Swiper('.slider', {
                    observer: true,
                    observeParents: true,
                    navigation: {
                        nextEl: '.btn-next',
                        prevEl: '.btn-prev',
                    },
                });
                
                */
            </script>
            <script>
                AOS.init();
            </script>
        
    </body>
</html>
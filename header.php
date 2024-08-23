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
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="closeMenu">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </div>
            <div class="block df">
                <div class="left">
                    <a class="logo" href="">
                        <img src="./assets/img/logo.svg" alt="">
                    </a>
                    <nav>
                        <ul>
                            <li><a class="mhome" href="index.php">Home</a></li>
                            <li><a class="mser" href="services.php">Services</a></li>
                            <li><a class="mfaq" href="faq.php">FAQ</a></li>
                            <li><a class="mcontacts" href="contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right">
                    <a href="sign.php">Sign in</a>
                 </div>
            </div>
        </div>
        <header>
            <div class="container" data-aos="fade-down">
                <div class="block df jb">
                    <div class="left">
                        <a class="logo" href="">
                            <img src="./assets/img/logo.svg" alt="">
                        </a>
                        <nav>
                            <ul>
                                <li><a class="mhome" href="index.php">Home</a></li>
                                <li><a class="mser" href="services.php">Services</a></li>
                                <li><a class="mfaq" href="faq.php">FAQ</a></li>
                                <li><a class="mcontacts" href="contact.php">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="right">
                        <a href="sign.php">Sign in</a>
                    </div>
                    <div class="menu">
                        <!-- Кнопка Мобильного Меню -->
                        <button id="burger-menu">
                            <div class="box box_item1"></div>
                            <div class="box box_item2"></div>
                            <div class="box box_item3"></div>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <script>
  AOS.init();
</script>
        
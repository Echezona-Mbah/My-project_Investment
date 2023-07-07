<!-- TradingView Widget END -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from expertminersworld.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2022 22:03:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <base />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024">
    <title>EVERLEDGERMINERS</title>
    <link rel="shortcut icon" href="images/pa.png">
    <link href="css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/input.css" rel="stylesheet" type="text/css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css" />
    <link href="css/calc.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.easing.compatibility.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="//code.jivosite.com/widget/QhVJ3izoxN" async></script>




    <!-- Bootstrap core -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="imagess/js/ie-emulation-modes-warning.js"></script>
</head>


<script type="text/javascript">
(function() {
    var options = {
        whatsapp: "+447868812600", // WhatsApp number
        call_to_action: "Message us", // Call to action
        position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol,
        host = "getbutton.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();
</script>

<body>
    <div class="none">
        <div id="calc">
            <div class="modal-title">
                <h2>Calculate <span>profit</span></h2>
            </div>
            <div>
                <ul class="calc-list ">
                    <li>
                        <label>Amount:</label>

                        <input type="text" class='amount' style='width:150px; text-align:center;' value='10' />

                        <div class="clearfix"></div>
                        <div>
                            <div class="selector">
                                <div class="p_line"></div>
                                <div id="drag" class="resize drag ui-widget-content ui-draggable" style="left: 0;">

                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <label>Reinvest (%):</label>
                        <input type="text" class='compound' readonly="" style='width:100px; text-align:center;'
                            value='0' />
                        <div class="clearfix"></div>
                        <div>
                            <div class="selector">
                                <div class="p_line"></div>
                                <div id="comp" class="resize comp ui-widget-content ui-draggable" style="left: 0;">

                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <label>Days count:</label>
                        <input type="text" class='days_input' readeonly="" style='width:100px; text-align:center;'
                            value='1' />
                        <div class="clearfix"></div>
                        <div>
                            <div class="selector">
                                <div class="p_line"></div>
                                <div id="days" class="resize days ui-widget-content ui-draggable" style="left: 0;">

                                </div>
                            </div>
                        </div>
                    </li>

                    <input type="hidden" class='plans_select' value='1'>

                    <li class='right profit-block-1'>
                        <label>Profit per day:</label>
                        <input class="readonly profit" type="text" value='$0.288'
                            style='width:100px; text-align:center;' readonly />
                    </li>
                    <li class='right profit-block'>
                        <label>Total:</label>
                        <input class="readonly total" type="text" value='$10.288'
                            style='width:150px; text-align:center;' readonly />
                    </li>
                </ul>
            </div>
        </div>
        <div id="login">
            <div class="modal-title">
                <h2>Login<span> to account</span></h2>
            </div>
            <div>

                <script language=javascript>
                function checklogin() {
                    if (document.loginform.username.value == '') {
                        alert("Please enter your username!");
                        document.loginform.username.focus();
                        return false;
                    }
                    if (document.loginform.password.value == '') {
                        alert("Please enter your password!");
                        document.loginform.password.focus();
                        return false;
                    }
                    return true;
                }
                </script>


                <div class="clearfix"></div>
                <br />
                <?php if(isset($_SESSION['formError'])){?>
                <?php foreach($_SESSION['formError'] as $k => $eachErrorArray){?>
                <?php foreach($eachErrorArray as $k => $eachError){?>
                <p class="alert alert-danger"><?php echo $eachError ?></p>
                <?php } ?>
                <?php } ?>
                <?php unset($_SESSION['formError']); ?>
                <?php } ?>
                <?php if(isset($_GET['success'])){?>
                <p class="alert alert-success"><?php echo trim($_GET['success']); ?></p>
                <?php } ?>
                <form action="action/main_work.php?option=login" class='form-modal' method=post name=loginform
                    onsubmit="return checklogin()"><input type="hidden" name="form_id" value="16543802264937"><input
                        type="hidden" name="form_token" value="27bbbc708ca6f959a492ad71869285b3">

                    <input type=hidden name=a value='do_login'>
                    <input type=hidden name=follow value=''>
                    <div class="field">
                        <label>
                            <span>Username</span>
                            <input type=text name=username
                                value="<?php if (isset($_SESSION{'username'})) {echo $_SESSION['username'];}?>"
                                class=inpts size=15>
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <span>Password</span>
                            <input type=password name=password
                                value="<?php if (isset($_SESSION{'password'})) {echo $_SESSION['password'];}?>"
                                class=inpts size=15>
                            <div class="clearfix"></div>
                            <a href="reset.php?a=forgot_password" class='recovery-link'>Forgot password?</a>
                        </label>
                    </div>
                    <center>
                        <div class="submit">
                            <input type=submit value="Login"> <i></i>
                        </div>
                    </center>
                </form>



            </div>
        </div>
        <div id="cert">
            <div class="modal-title">
                <h2>Certificate <span>image</span></h2>
            </div>
            <img src="images/certificate.png" style='width:450px;' alt="">
        </div>
    </div>


    <div class="wrapper">

        <section class="header">

            <div class="header-top">

                <div class="container">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo"><a href="index.php"></a></div>
                        </div>

                        <div class="col-md-9">



                            <div class="menu">

                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li class=""><a href="about.php">About us</a></li>
                                    <li class=""><a href="plan.php">Investment</a></li>
                                    <li class=""><a href="partners.php">For partners</a></li>
                                    <li class=""><a href="faq.php">Faq</a></li>
                                    <li class=""><a href="contact.php">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="social">

                                <li>
                                    <a class='mail'>
                                        <small>email adress:</small>
                                        <span style='font-size:17px;'><span>support@EVERLEDGERMINERS1.com</span>
                                <li>
                                    <div id="google_translate_element"></div>

                                    <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        }, 'google_translate_element');
                                    }
                                    </script>

                                    <script type="text/javascript"
                                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                    </script>

                                </li>
                                </span>
                                </a>
                                </li>

                            </ul>
                            <div class="plan-block">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li>
                                    <!-- TradingView Widget BEGIN -->
                                    <!-- TradingView Widget END -->
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br />
                            <h1>
                                <small>world's best</small>
                                cloud Bitcoin <br />
                                mining platform!
                                <br><br>
                                <small>Get Paid Daily<br />More Than CEO<br />at Everledgerminers</small>
                            </h1>
                            <div class="clearfix"></div>

                            <div style='padding-left:50px;'>
                                <a href="register.php" class="btn">Sign up <i class="icon-reg"></i>
                                    <span class='green'></span></a>

                                <a href="login.php?a=login" class="btn btn-1">Login <i class="icon-sign"></i></a>



                                <div class="calc-block">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle1 " style='display:none; '>
                    <div class="container">
                        <div class="row">
                            <ul class="social social-right">
                                <li>
                                    <a class='mail'>
                                        <small>email adress:</small>
                                        <span style='font-size:17px;'> <span></span>

                                        </span>
                                    </a>
                                </li>
                                <li>

                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div style='padding-right:80px; float:right;'>
                                <a href="register.php" class="btn">Sign up <i class="icon-reg"></i>
                                    <span class='green'></span>
                                </a>
                                <a class="btn btn-1 box-modal" data-width='550' rel="login"><span></span>Login <i
                                        class="icon-sign"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








            <div class="listDep">
                <div class="container">
                    <div class="section-head section-head-s2 text-center" style="margin-bottom:-5em;">
                        <h2 class="title title-xl" title="Investment Packages"
                            style="color:#132582; margin-top:2em; margin-bottom:2em;">INVESTMENT PLANS</h2>
                    </div>
                    <!-- Copy from here -->

                    <div class="row justify-content-center gutter-vr-30px">
                        <div class="col-md-3" style=" padding:1em; ">
                            <div class="token-stage text-center bg-theme-dark-alt animated" data-animate="fadeInUp"
                                data-delay=".4" style="background-color:white;color:white">
                                <button class="feature-slider-dot owl-dots"><em class="ikon ikon-paricle"></em></button>
                                <div class="token-stage-title token-stage-pre">BEGINNERS PLAN</div>
                                <div class="token-stage-date" style="color:black">
                                    <h3> 4% </h3>
                                    <span class="token-stage-bonus" style="font-weight:bold;">AFTER 24 HOURS</span>
                                </div>
                                <div class="token-stage-info" style="color:black">
                                    <span class="token-stage-bonus">Minimum: $50 </span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Maximum: $999</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Instant Withdraw<br>5% Referral Commission </span>
                                    <!--	 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <span class="token-stage-bonus">Principal Returned</span>
                                 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <a href="register.php" class="btn btn-outline btn-grad btn-auto btn-md">INVEST NOW</a> -->
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-3" style=" padding:1em; ">
                            <div class="token-stage text-center bg-theme-dark-alt animated" data-animate="fadeInUp"
                                data-delay=".4" style="background-color:white; color:white">
                                <button class="feature-slider-dot owl-dots" style=" background: #FCE6D2;"><em
                                        class="ikon ikon-user-bubble" style=" color: #F2801C;"></em></button>
                                <div class="token-stage-title token-stage-pre">ADVANCED PLAN</div>
                                <div class="token-stage-date " style="color:black">
                                    <h3>8% </h3>
                                    <span class="token-stage-bonus" style="font-weight:bold;">AFTER 24 HOURS</span>
                                </div>
                                <div class="token-stage-info" style="color:black">


                                    <span class="token-stage-bonus">Minimum: $1,000</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Maximum: $9,999</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Instant Withdraw<br>5% Referral Commission </span>
                                    <!--	 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <span class="token-stage-bonus">Principal Returned</span>
                                 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <a href="register.php" class="btn btn-outline btn-grad btn-auto btn-md">INVEST NOW</a>
                      -->
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-3" style=" padding:1em;">
                            <div class="token-stage text-center bg-theme-dark-alt animated" data-animate="fadeInUp"
                                data-delay=".4" style="background-color:white ;color:white">
                                <button class="feature-slider-dot owl-dots" style=" background: #DBEFFD;"><em
                                        class="ikon ikon-clip-board" style=" color: #49ADF3;"></em></button>
                                <div class="token-stage-title token-stage-pre">PROMOTION PLAN</div>
                                <div class="token-stage-date" style="color:black">
                                    <h3>15%</h3>
                                    <span class="token-stage-bonus" style="font-weight:bold;">AFTER 24 HOURS</span>
                                </div>
                                <div class="token-stage-info" style="color:black">


                                    <span class="token-stage-bonus">Minimum: $3,000</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Maximum: $6,000</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Instant Withdraw<br>5% Referral Commission </span>
                                    <!--	<span class="token-stage-bonus">Principal Returned</span>
                                 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <a href="register.php" class="btn btn-outline btn-grad btn-auto btn-md">INVEST NOW</a>
                     -->
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-3" style=" padding:1em;">
                            <div class="token-stage text-center bg-theme-dark-alt animated" data-animate="fadeInUp"
                                data-delay=".4" style="background-color:white;color:white">
                                <button class="feature-slider-dot owl-dots" style=" background: #FDDE4E;"><em
                                        class="ikon ikon-user-setting" style=" color: #49ADF3;"></em></button>
                                <div class="token-stage-title token-stage-pre">PROFESSIONAL PLAN</div>
                                <div class="token-stage-date" style="color:black">
                                    <h3>12% </h3>
                                    <span class="token-stage-bonus" style="font-weight:bold;">AFTER 24 HOURS</span>
                                </div>
                                <div class="token-stage-info" style="color:black">


                                    <span class="token-stage-bonus">Minimum: $10,000</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Maximum: unlimited</span>
                                    <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);" />
                                    <span class="token-stage-bonus">Instant Withdraw<br>5% Referral Commission </span>
                                    <!--	<span class="token-stage-bonus">Reinvesting Available</span>
                                 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <span class="token-stage-bonus">Principal Returned</span>
                                 <hr style="border: 0.5px solid rgba(209, 224, 246, 0.7);"/>
                                <a href="register.php" class="btn btn-outline btn-grad btn-auto btn-md">INVEST NOW</a>
                      -->
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="text-center pt-3 animated" data-animate="fadeInUp" data-delay="0.5">
                            <a href="register.php" class="btn btn-lg btn-secondary btn-grad">INVEST NOW</a>
                        </div>

                    </div>
                </div>

        </section>


        <br><br>
        <br><br>
        <br><br>



        <style type="text/css">
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            filter: alpha(opacity=70);
            -moz-opacity: 0.7;
            -khtml-opacity: 0.7;
            opacity: 0.7;
            z-index: 100;
            display: none;
        }

        .cnt223 a {
            text-decoration: none;
        }

        .popup {
            width: 100%;
            margin: 0 auto;
            display: none;
            position: fixed;
            z-index: 103;
        }

        .cnt223 {
            min-width: 600px;
            width: 100%;
            min-height: 150px;
            margin: 100px auto;
            background: #f3f3f3;
            position: relative;
            z-index: 103;
            padding: 15px 35px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #000;
        }

        .cnt223 p {
            clear: both;
            color: #555555;
            /* text-align: justify; */
            font-size: 20px;
            font-family: sans-serif;
        }

        .cnt223 p a {
            color: #d91900;
            font-weight: bold;
        }

        .cnt223 .x {
            float: right;
            height: 35px;
            left: 22px;
            position: relative;
            top: -25px;
            width: 34px;
        }

        .cnt223 .x:hover {
            cursor: pointer;
        }
        </style>
        <!-- <script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});




$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script> -->


        <div class='popup'>
            <div class='cnt223'>
                <h1 style="color:green">Important Notice</h1>
                <h4>
                    GET EVEN MORE UPDATES, INTERACT<br> WITH Mr.FRIEDLEY "CHAIRMAN" ON<br> TELEGRAM<br>
                    <br /><a href="https://t.me/Investorfriedley">
                        <font style="color:#0892d0">CHAT CHAIRMAN</font>
                    </a>
                    <br>
                    <a href='#' style='color:green' class='close'>DISMISS</a>
                </h4>
            </div>
        </div>













        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="main">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h2>About <span>us</span></h2>
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <br />
                    <div class="col-md-4">
                        <img src="images/main-bg.png" style='margin-left:-30px' alt="">
                    </div>
                    <div class="col-md-8">
                        <h3>
                            Bold online investment in crypto currency
                        </h3>

                        <b>
                            <p>
                                The modern sphere of investments in cryptocurrency is rapidly gaining popularity over
                                the last few years. Thousands of people are wondering how to earn Bitcoin, learn the
                                principles and intricacies of mining processes and follow price trends in the digital
                                currency's market. And you should know that this is quite difficult to receive a
                                guaranteed income over the long term without having enough knowledge or availability of
                                experience and skills of online earnings. However, there's a way out up here! <span
                                    style="text-transform: uppercase;"> Everledgerminers ltd </span> has an unique
                                proposal and offers to join novice cryptocurrency users as well as professional
                                investors to establish a large financial pool. In the area of our interests are
                                primarily safe investments with high levels of income: financial participation in
                                startups, cooperation with traders on exchanges, investment in various types of
                                cryptocurrency.
                            </p>
                            <br />
                            <p>
                                If you are in search of a reliable financial project with high quality of asset
                                management service become a customer of <span style="text-transform: uppercase;">
                                    Everledgerminers ltd </span> and earn 0.12% every hour on an ongoing basis, - any of
                                your deposits will be any work and bring you profits for life.
                            </p>
                        </b>
                        <div class="clearfix"></div>
                        <br />

                        <div style='padding-left:5px;'>
                            <a class="btn " href="register.php"><span class='green'></span> Sign up <i
                                    class="icon-reg"></i></a>
                            <a class="btn btn-1 box-modal" data-width='550' rel="login"><span></span>Login <i
                                    class="icon-sign"></i></a>


                        </div>
                    </div>
                </div>


        </section>


        <section>
            <div class="container">
                <center>
                    <h2>BITCOIN VIDEOS EXPLAINED<br></h2>
                </center>
                <div class="col-md-12">
                    <span class="txt"><iframe width="300" height="400" src="https://www.youtube.com/embed/2X9eJF1nLiY"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></span>


                    <span class="txt"><iframe width="300" height="400" src="https://www.youtube.com/embed/XWPifXIWPwE"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></span>

                    <span class="txt"><iframe width="300" height="400" src="https://www.youtube.com/embed/BODyqM-V71E"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></span>

                </div>
            </div>
    </div>
    </div>
    </div>
    </section>
    <br>
    <br>
    <br>
    <br>


    <section class="main2">
        <div class="container">
            <div class="row">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a
                            href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                            target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView
                    </div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    {
                        "width": 1000,
                        "height": 490,
                        "defaultColumn": "overview",
                        "screener_type": "crypto_mkt",
                        "displayCurrency": "USD",
                        "colorTheme": "light",
                        "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->

            </div>
        </div>
    </section>
    <section class="main3">
        <div class="container">
            <div class="row">
                <div>
                    <div class="col-md-6">
                        <div class="licen">
                            <div class="box-form">
                                <div>
                                    <div style='cursor:pointer;' data-width='550'>
                                        <img src="images/IMG-20220605-WA0010.jpg">
                                    </div>
                                    <h4>ISO27001-certified</h4>
                                    <i>We are ISO27001-certified, evidencing the highest level of trust on information
                                        security and data protection..</i>
                                    <br />
                                    <br><br><a href="certificates.php">Find out more...</a>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br />

                    </div>
                </div>
                <div class="clearfix"></div>
                <br />
            </div>
        </div>
    </section>

    <section class="main3">
        <div class="container">
            <div class="row">
                <div>
                    <div class="col-md-6">
                        <div class="licen">
                            <div class="box-form">
                                <div>
                                    <a class="box-modal" style='cursor:pointer;' data-width='550' rel="cert">
                                        <img src="images/certificate1.png">
                                    </a>
                                    <i>Our company is officially registered and legally responsible. You can entrust
                                        your capital in our management and be certain that we can only use it in
                                        accordance with the legislation.</i>
                                    <br />
                                    <h3>#01234567</h3>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <ul class="faq-ul">
                            <li>
                                <a style='desplay:block; text-transform:uppercase;'>Affiliate commission</a>
                                <p style='float:left; padding-top:25px;'>
                                    We offer a referral fee 1 level:

                                </p>
                                <div class='aff-p'>
                                    5<small>%</small>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-6" style='text-align:right; '>

                        <h2 class='right'>Affiliate <span>programm</span></h2>

                        <div class="clearfix"></div>
                        <br />

                        <h4>
                            We offer the best opportunity to increase your income using partnership tools
                        </h4>
                        <p>
                            For sure you want to earn more! We offer the best opportunity to increase your income using
                            partnership tools. You can promote <span style="text-transform: uppercase;">
                                Everledgerminers ltd </span> and its investment program applying your personal affiliate
                            link or placing advertisement banners on forums, websites or your personal blog. Set your
                            referral link on favorite forum or use as email signature; share this link with your
                            friends, relatives and colleagues – no restrictions for the spread of this.
                        </p>
                        <div class="clearfix"></div>
                        <br />

                    </div>
                    <div class="clearfix"></div>
                    <br />
                </div>
                <div class="clearfix"></div>
                <div class="block-accept">
                    <small>we accept</small>
                </div>
                <div class="clearfix"></div>
                <br />
            </div>
        </div>
    </section>








    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-footer">
                        <a href="index.php"></a>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="footer-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About us</a></li>

                            <li><a href="faq.php">Faq</a></li>
                            <li><a href="contact.php">Contacts</a></li>
                            <li><a href="terms.php"> Terms and Conditions </a></li>
                            <li><a href="partners.php"> For partners </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="copyright">
                        © 2021 Everledgerminers - All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</body>

<!-- Mirrored from expertminersworld.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2022 22:03:50 GMT -->

</html>

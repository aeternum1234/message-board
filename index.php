<?php session_start() ?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>message-board</title>

    <!--this is google arvo fonts and font awesome-->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php include "statusColumn.php";?>
        <div class="jumbotron">
            <div class="container">
                <h1>Our goal is to inspire <br>Tallahassee to write 1,000,000<br> lines of code_</h1>
                <p>All over the country people are taking the <strong>HOUR OF CODE</strong> challenge issued by <strong>CODE.org</strong>. Millions of lines of code are being written. In the capital of Florida, Tallahassee, the community is taking the challenge and our goal is to write 1,000,000 lines of code_</p>
                <br><br><br><br><br><br><br>
            </div>
        </div>

        <div id="who-we-are">
            <div class="container homepage">
                <img src="images/academy_brand_med.png" alt="Massive Academy" title="Massive Academy">
                <h2>Who We Are</h2>
                <hr>
                <p>We are <a href="https://google.com" target="_blank">MASSIVE Academy</a>. We aim to improve education through both method - effective project-based learning - and material - by teaching skills that are applicable to improving your life today.</p>
            </div>
        </div>

        <div id="board">
            <div class="container homepage">
                <h2>看板</h2>
                <hr>
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3><span class="head_emphasis">Students</span></h3>
                        <p>Want to learn how to code? Want to help us get to <span class="emphasis">1,000,000 lines</span>? Click the button below and we'll let you know how to get involved.</p>
                        <p><a class="btn btn-default" href="https://docs.google.com/forms/d/e/1FAIpQLSfonSuFwVa_mQ_KDQugr1FSiDwl55wluUXpyBMde8_fIbW8bQ/viewform" target="_blank" role="button" style="color: #e74c3c">Start Learning &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3><span class="head_emphasis">Educators</span></h3>
                        <p>Want to bring this initiative to your school or institution? <span class="emphasis">Awesome!</span> Click the button below and we'll make it happen.</p>
                        <p><a class="btn btn-default" href="#" target="_blank" role="button" style="color: #e74c3c">Join the Initiative &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3><span style="color: red;">Sponsors</span></h3>
                        <p>We love all the support we get to help host more events, and empower more lives with the knowledge of coding. Click to get involved.</p>
                        <p><a class="btn btn-default" href="#" target="_blank" role="button" style="color: #e74c3c">Give Support &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>

    <footer>
        <div class="container">
            <p style="font-size: 30px; font-family: serif;">Copyright 2018 message-board.Inc. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

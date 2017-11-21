<?php $plate=$_POST['plate']; $platestate=$_POST['state']; $submitUrl="http://freebackgroundcheck.org/plate/results.php?topPlate=" . $plate . "&topPlateState=" . $platestate . "&topPlateSearch=Search"; $content=file_get_contents($submitUrl); $first_step=explode( '<div class="pf-rs-info-text">' , $content ); $second_step=explode( "</div>" , $first_step[1] ); ?>
<html>
<head>
    <style>
        #parent {
            padding: 5% 0;
        }
        #container {
            padding: 10% 0;
        }
        #scroll {
            position: fixed;
            left: 15px;
            bottom: 15px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            background-color: #3498db;
            text-indent: -9999px;
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            border-radius: 60px
        }
        #scroll span {
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -18px;
            margin-top: -11px;
            height: 0;
            width: 0;
            border: 11px solid transparent;
            border-bottom-color: #ffffff;
        }
        #scroll:hover {
            background-color: #e74c3c;
            opacity: 1;
            filter: "alpha(opacity=100)";
            -ms-filter: "alpha(opacity=100)";
        }
    </style>
    <title>Plate Checker</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet prefetch" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <a href="index.php" id="scroll"><span></span></a>
    <div id="parent">
        <div class="container">
            <form class="well form-horizontal">
                <fieldset>
                    <legend>License Plate Checker:
                        <?php echo $_POST['plate'] . ' ('; echo strtoupper($_POST['state']); echo ') '; ?>
                    </legend>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-4 control-label">License Plate Data:</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div id="contents">
                                <br>
                                <?php echo $second_step[0]; ?>
                            </div>
                        </div>
                    </div>
                    <br>
                </fieldset>
                <br>
                <br>
                <center>&copy; 2017 Complex Design Groups, Co. All Rights Reserved. Powered By: FreeBackgroundCheck.org</center>
            </form>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <script>
        $('ul li:last-child').remove();
        var h1 = document.getElementsByTagName("h1")[0];
        var ul = document.getElementsByTagName("ul")[0];
        if (document.getElementById("contents").contains(h1)) {
            window.location.replace("error.php");
        }
        if (!document.getElementById("contents").contains(ul)) {
            window.location.replace("error.php");
        }
    </script>
    </div>
</body>
</html>

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
            /* Firefox */
            
            -moz-transform: rotate(-90deg);
            /* IE */
            
            -ms-transform: rotate(-90deg);
            /* Opera */
            
            -o-transform: rotate(-90deg);
            /* Internet Explorer */
            
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
    <title>Plate Checker - Error</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet prefetch" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <a href="index.php" id="scroll"><span></span></a>
    <div id="parent">
        <div class="container">
            <form class="well form-horizontal">
                <fieldset>
                    <legend>License Plate Checker</legend>
                    <br><br>
                    <div class="form-group">
                        <center>
                            <br>
                            <h2> Error: Incorrect format or plate not found.</h2>
                        </center>
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
    </div>
</body>
</html>

<html>
<head>
    <style>
        #parent {
            padding: 5% 0;
        }
        #container {
            padding: 10% 0;
        }
    </style>
    <title>Plate Checker</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet prefetch" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div id="parent">
        <div class="container">
            <form class="well form-horizontal" action="plate.php" method="post" id="plate_form">
                <fieldset>
                    <legend>License Plate Checker</legend>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-4 control-label">License Plate</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                                <input name="plate" placeholder="123ABC" required class="form-control" type="text" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">State</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="state" required class="form-control selectpicker">
                                    <option value="">State</option>
                                    <option value="al">Alabama</option>
                                    <option value="ak">Alaska</option>
                                    <option value="az">Arizona</option>
                                    <option value="ar">Arkansas</option>
                                    <option value="ca">California</option>
                                    <option value="co">Colorado</option>
                                    <option value="ct">Connecticut</option>
                                    <option value="de">Delaware</option>
                                    <option value="dc">District of Columbia</option>
                                    <option value="fl">Florida</option>
                                    <option value="ga">Georgia</option>
                                    <option value="hi">Hawaii</option>
                                    <option value="id">Idaho</option>
                                    <option value="il">Illinois</option>
                                    <option value="in">Indiana</option>
                                    <option value="ia">Iowa</option>
                                    <option value="ks">Kansas</option>
                                    <option value="ky">Kentucky</option>
                                    <option value="la">Louisiana</option>
                                    <option value="me">Maine</option>
                                    <option value="md">Maryland</option>
                                    <option value="ma">Massachusetts</option>
                                    <option value="mi">Michigan</option>
                                    <option value="mn">Minnesota</option>
                                    <option value="ms">Mississippi</option>
                                    <option value="mo">Missouri</option>
                                    <option value="mt">Montana</option>
                                    <option value="ne">Nebraska</option>
                                    <option value="nv">Nevada</option>
                                    <option value="nh">New Hampshire</option>
                                    <option value="nj">New Jersey</option>
                                    <option value="nm">New Mexico</option>
                                    <option value="ny">New York</option>
                                    <option value="nc">North Carolina</option>
                                    <option value="nd">North Dakota</option>
                                    <option value="oh">Ohio</option>
                                    <option value="ok">Oklahoma</option>
                                    <option selected value="or">Oregon</option>
                                    <option value="pa">Pennsylvania</option>
                                    <option value="ri">Rhode Island</option>
                                    <option value="sc">South Carolina</option>
                                    <option value="sd">South Dakota</option>
                                    <option value="tn">Tennessee</option>
                                    <option value="tx">Texas</option>
                                    <option value="ut">Utah</option>
                                    <option value="vt">Vermont</option>
                                    <option value="va">Virginia</option>
                                    <option value="wa">Washington</option>
                                    <option value="wv">West Virginia</option>
                                    <option value="wi">Wisconsin</option>
                                    <option value="wy">Wyoming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
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
        $('#plate_form').keydown(function() {
            var key = e.which;
            if (key == 13) {
                $('#plate_form').submit(); // Submit form code
            }
        });
    </script>
    </div>
</body>
</html>

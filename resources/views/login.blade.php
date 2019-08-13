<html>

<head>
    <title>POS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body style="background-color: #e1e0de;">

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading" style="height: 175px;">
                    Account Access
                    <br>
                    <img src="img/logo.jpg" height="100px">
                </div>
                <div class="panel-body">
                    <form action="http://localhost/Version4.0/Project/auth/login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" autofocus="" autocomplete="off"
                                    required="" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required="" autocomplete="off">
                            </div>
                            <br>
                            <center>
                                <button class="btn btn-primary text-center"
                                    name="sp_login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </center>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    <div class="login_footer">
        <div class="copy">© 2019 - POS - Multi Outlets - All Rights Reserved.</div>
    </div>
</body>

</html>
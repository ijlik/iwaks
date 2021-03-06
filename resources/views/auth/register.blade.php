<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iwaks | The Simulation of Fishery Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="shortcut icon" href="/vendor/tcg/voyager/assets/images/logo-icon.png" type="image/x-icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body class="sing-up-page">
<!--======= log_in_page =======-->
<div id="log-in" class="site-form log-in-form">

    <div id="log-in-head">
        <h1>Sing Up</h1>
        <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
    </div>

    <div class="form-output">
        <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating">
                <label class="control-label">Your Name</label>
                <input class="form-control" placeholder="" type="text" name="name" required>
                @if( $errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} label-floating">
                <label class="control-label">Your Email</label>
                <input class="form-control" placeholder="" type="email" name="email" required>
                @if( $errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} label-floating">
                <label class="control-label">Your Password</label>
                <input class="form-control" placeholder="" type="password" name="password" required>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} label-floating">
                <label class="control-label">Confirm Your Password</label>
                <input class="form-control" placeholder="" type="password" name="password_confirmation" required>
                @if( $errors->has('password'))
                    <span class="help-block">
                        <strong> {{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="remember">
                <div class="checkbox">
                    <label>
                        <input name="optionsCheckboxes" type="checkbox" required>
                        I accept the <a href="#">Terms and Conditions</a> of the website
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-lg btn-primary full-width">Complete sign up</button>

            <p><br>you have an account? <a href="{{ url('login') }}"> Sing in !</a> </p>
        </form>
    </div>
</div>
<!--======= // log_in_page =======-->
</body>


</html>


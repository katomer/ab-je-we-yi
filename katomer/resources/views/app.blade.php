<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../public/images/favicon.ico">

    <title>Katomer</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for main blade -->
    <link href="../../public/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <div class="masthead">
        <a href="/" style="text-decoration:none;"><h3 class="text-muted">Katomer</h3></a>
        <nav>
            <ul class="nav nav-justified">
                <li class="active"><a href="/car">Car</a></li>
                <li><a href="/computer">Computer</a></li>
                <li><a href="/electronics">Electronics</a></li>
                <li><a href="/house"">House</a></li>
                <li><a href="/household">Household</a></li>
                <li><a href="/phone">Phone</a></li>
                <li><a href="/other">Other</a></li>
            </ul>
        </nav>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Popular Items</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Upload</a></p>
    </div>

    <!-- We can do such row of columns -->
    <div class="row">
        <div class="col-lg-2">
            <h2>Ad Column1</h2>
            <p class="text-danger">We will use this as an ad colomn or as a moderator control panel</p>
            <p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-8" style="text-align:center">
            @yield('content')
        </div>
        <div class="col-lg-2">
            <h2>Ad Column2</h2>
            <p class="text-danger">We will use this as an ad colomn</p>
            <p class="text-justify">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <!-- Site footer -->
    <footer class="footer">
        <div class="row">
            <div class="col-lg-3">
                <h4>Contact us</h4>
                <p>E-mail: admin@katomer.com</p>
                <p>Twitter:</p>
                <p>Facebook:</p>
            </div>
            <div class="col-lg-6">
                <p class="col-centered">&copy; katomer.com 2015</p>
            </div>
            <div class="col-lg-3">
                <h4>Help</h4>
                <p class="text-danger">Amharic</p>
                <p class="text-danger">English</p>
            </div>
        </div>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../public/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Esteh Creative, Innovating Technology to Deliver Happiness.">
	<meta name='og:image' content='images/home/ogg.png'>
    <title>Esteh Creative - Innovating Technology to Deliver Happiness</title>
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/favicon-esteh.ico">
    <!-- Main style sheet -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- responsive style sheet -->
    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/esteh.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/esteh.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">FORM REGISTER USER</h3>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-address-book"></i> Role</label>
                    <input type="text" name="role" class="form-control" placeholder="Role" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
                <hr>
            </form>
        </div>
    </div>
</body>
</html>
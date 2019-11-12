<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>OB Employee Hub</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h1>Lorem ipsum dolor</h1>
                <h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
            </div>

            <div class="col-md-6 col-xs-12">
                <h3>Login to Employee Hub</h3>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required >
                    </div><!--form-group-->

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password_1" class="form-control" required >
                    </div><!--form-group-->

                    <button type="submit" name="login_user" class="btn btn-primary form-control">Login</button>
                    <p>Not a user? <a href="registration.php"><strong>Sign up</strong></a></p>
                </form>
            </div>
        </div><!--row-->
    </div><!--container-->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
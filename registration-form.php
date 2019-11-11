<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="landing-page.css" />
    <title>Office Beacon | Regitration</title>
</head>
<body>
    <div class="container">
        <div class="registration-form col-md-5 col-xs-12 form-centered">
            <div class="ob-logo"><img src="img/office-beacon.png" alt=""></div>
            <h3 class="center">Register Staff</h3>
            <br/>
            <form action="registration-form.php" method="post">

                <?php include('errors.php') ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div><!--form-group-->

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                </div><!--form-group-->

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password_1" class="form-control" required>
                </div><!--form-group-->

                <div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password" name="password_2" class="form-control" required>
                </div><!--form-group-->

                <div class="button-group">
                    <button type="submit" class="btn btn-lg btn-primary">Register</button>
                </div><!--button-group-->
            </form>
        </div><!--registration-form-->
    </div><!--container-->
</body>
</html>

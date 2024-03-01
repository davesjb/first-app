<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>



    <div class="container">
        <a href="/">home</a>
        <div class="row">
            <div class="col"></div>
            <div class="col-4 mt-4">

                <div class="card">
                    <div class="card-body">
                        <h1>Login</h1>

                        <div class="alert alert-danger alert-dismissible fade hide" role="alert">
                            <strong>Error: <span id="errormessage"></span></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <form action="login-process.php" method="post">

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">

                                <a href="reset.php">Forgotten password</a>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                            <br><br>
                            <a href="register.php">Register</a>

                        </form>
                    </div>
                </div>


            </div>
            <div class="col"></div>
        </div>
    </div>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
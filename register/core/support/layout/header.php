<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 p-3 bg-dark text-white">
                    <h1>Bootstrap</h1>
                </div>
                <div class="col-sm-6 p-3 bg-success text-white">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                        <div class="container-fluid">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-sm-3 p-3 bg-dark text-white text-end">
                    <form action="signin.php" method="post">
                        <button type="submit" class="btn btn-success btn-lg">
                            Sign up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
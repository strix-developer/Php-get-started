<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: white;
        }

        a.dropdown-item {
            color: white;
            background-color: none;
        }

        a.dropdown-item:hover {
            color: #51abcb;
            background-color: black;
        }

        .col-sm-1.text-white.d-flex.align-items-start.bg-dark {
            width: 10%;
        }

        ul.dropdown-menu.dropdown-menu-dark:hover {
            background-color: black;
        }

        button.btn.btn-dark:hover {
            background-color: #51abcb;
        }

        .container {
            background-image: url('images/palm.webp');
            background-size: cover;
        }
    </style>
</head>

<body>
    <!--Header start-->
    <header>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="d-flex flex-row">
                    <!--div for Wordpress-->
                    <div class="p-2 nav-item dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-brands fa-wordpress text-light"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">About WordPress</a></li>
                            <li><a class="dropdown-item" href="#">WordPress.org</a></li>
                            <li><a class="dropdown-item" href="#">Documentation</a></li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Feedback</a></li>
                        </ul>
                    </div>
                    <!--div for Site Name-->
                    <div class="p-2 text-light dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-house text-light">&nbsp;&nbsp;</i>SiteName
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Visit Site</a></li>
                        </ul>
                    </div>
                    <!--div for Comments-->
                    <div class="p-2 text-light">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-message text-light">&nbsp;&nbsp;</i>0
                            </a>
                        </button>
                    </div>
                    <!--div for Adding New Data-->
                    <div class="p-2 text-light dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-plus text-light">&nbsp;&nbsp;</i>New
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Post</a></li>
                            <li><a class="dropdown-item" href="#">Media</a></li>
                            <li><a class="dropdown-item" href="#">Page</a></li>
                            <li><a class="dropdown-item" href="#">User</a></li>
                        </ul>
                    </div>
                    <!--div for Log In Users-->
                    <div class="ms-auto p-2 text-white dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            Howdy,&nbsp; <?php echo $_SESSION['username']; ?>&nbsp;
                            <i class="fa fa-user-circle text-light"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li>
                                <a class="dropdown-item text-white" href="#">
                                    <?php echo $_SESSION['username']; ?>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    <!--Header end-->
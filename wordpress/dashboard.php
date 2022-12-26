<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class=" d-flex flex-row bd-highlight">

                    <div class="p-2 bd-highlight">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-brands fa-wordpress text-light"></i>
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item bg-dark text-white" href="#">About WordPress</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">WordPress.org</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Documentation</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Support</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Feedback</a></li>
                        </ul>
                    </div>

                    <div class="p-2 bd-highlight text-light">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-house text-light">&nbsp;&nbsp;</i>SiteName
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item bg-dark text-white" href="#">Visit Site</a></li>
                        </ul>
                    </div>

                    <div class="p-2 bd-highlight text-light">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-sharp fa-solid fa-message text-light">&nbsp;&nbsp;</i>0
                        </button>
                    </div>

                    <div class="p-2 bd-highlight text-light">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-plus text-light">&nbsp;&nbsp;</i>New
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item bg-dark text-white" href="#">Post</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Media</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Page</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">User</a></li>
                        </ul>
                    </div>

                    <div class="ms-auto p-2 bd-highlight text-white">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            Howdy,&nbsp;admin&nbsp;<i class="fa fa-user-circle text-light"></i>
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item bg-dark text-white" href="#">admin</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item bg-dark text-white" href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>

    <div class="col-sm-1 text-white d-flex align-items-start bg-dark" style="min-height:100vh">
        <nav class="navbar bg-dark">
            <ul class="nav navbar-nav">
                <li class="nav-item p-2">
                    <i class="fa fa-tachometer" aria-hidden="true">&nbsp;</i>Dashboard
                </li>
                <li class="nav-item p-2">
                    <i class="fa fa-thumb-tack" aria-hidden="true">&nbsp;</i>Posts
                </li>
                <li class="nav-item p-2">
                    <i class="fa fa-camera-retro" aria-hidden="true">&nbsp;</i>Media
                </li>
                <li class="nav-item p-2">
                    <i class="fa fa-file-o" aria-hidden="true">&nbsp;</i>Pages
                </li>
                <li class="nav-item p-2">
                    <i class="fa fa-commenting-o" aria-hidden="true">&nbsp;</i>Comments
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-brush">&nbsp;</i>Appearance
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-plug-circle-bolt">&nbsp;</i>Plugins
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-user-tie">&nbsp;</i>Users
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-screwdriver-wrench">&nbsp;</i>Tools
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-sliders">&nbsp;</i>Settings
                </li>
                <li class="nav-item p-2">
                    <i class="fa-solid fa-square-minus"></i>Collapse menu
                </li>
            </ul>
        </nav>
    </div>

    <div>

    </div>

    <script src="https://kit.fontawesome.com/9197b39465.js" crossorigin="anonymous"></script>
</body>

</html>
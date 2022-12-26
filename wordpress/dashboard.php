<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: blue;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <!--Header start-->
    <header>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="d-flex flex-row">

                    <div class="p-2 nav-item dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-brands fa-wordpress text-light"></i>
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-white" href="#">About WordPress</a></li>
                            <li><a class="dropdown-item text-white" href="#">WordPress.org</a></li>
                            <li><a class="dropdown-item text-white" href="#">Documentation</a></li>
                            <li><a class="dropdown-item text-white" href="#">Support</a></li>
                            <li><a class="dropdown-item text-white" href="#">Feedback</a></li>
                        </ul>
                    </div>

                    <div class="p-2 text-light dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-house text-light">&nbsp;&nbsp;</i>SiteName
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-white" href="#">Visit Site</a></li>
                        </ul>
                    </div>

                    <div class="p-2 text-light">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-message text-light">&nbsp;&nbsp;</i>0
                            </a>
                        </button>
                    </div>

                    <div class="p-2 text-light dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-plus text-light">&nbsp;&nbsp;</i>New
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-white" href="#">Post</a></li>
                            <li><a class="dropdown-item text-white" href="#">Media</a></li>
                            <li><a class="dropdown-item text-white" href="#">Page</a></li>
                            <li><a class="dropdown-item text-white" href="#">User</a></li>
                        </ul>
                    </div>

                    <div class="ms-auto p-2 text-white dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            Howdy,&nbsp;admin&nbsp;<i class="fa fa-user-circle text-light"></i>
                        </button>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-white" href="#">admin</a></li>
                            <li><a class="dropdown-item text-white" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item text-white" href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    <!--Header end-->
    <!--Sidebar start-->
    <div class="col-sm-1 text-white d-flex align-items-start bg-dark" style="min-height:100vh">
        <nav class="navbar bg-dark">

            <ul class="nav navbar-nav">

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa fa-tachometer" aria-hidden="true">&nbsp;</i>Dashboard
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform: 
                         translate3d(124px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">Home</a></li>
                            <li><a class="dropdown-item text-white" href="#">Updates</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa fa-thumb-tack" aria-hidden="true">&nbsp;</i>Posts
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(90px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">All Posts</a></li>
                            <li><a class="dropdown-item text-white" href="#">Add New</a></li>
                            <li><a class="dropdown-item text-white" href="#">Categories</a></li>
                            <li><a class="dropdown-item text-white" href="#">Tags</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa fa-camera-retro" aria-hidden="true">&nbsp;</i>Media
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(95px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">Library</a></li>
                            <li><a class="dropdown-item text-white" href="#">Add New</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa fa-file-o" aria-hidden="true">&nbsp;</i>Pages
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(95px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">All Pages</a></li>
                            <li><a class="dropdown-item text-white" href="#">Add New</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                        <a href="#"> <i class="fa fa-commenting-o" aria-hidden="true">&nbsp;</i>Comments</a>
                    </button>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-brush">&nbsp;</i>Appearance
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(127px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">Themes</a></li>
                            <li><a class="dropdown-item text-white" href="#">Editor</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-plug-circle-bolt">&nbsp;</i>Plugins
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(110px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">Installed Plugins</a></li>
                            <li><a class="dropdown-item text-white" href="#">Add New</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-user-tie">&nbsp;</i>Users
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(100px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">All Users</a></li>
                            <li><a class="dropdown-item text-white" href="#">Add New</a></li>
                            <li><a class="dropdown-item text-white" href="#">Profile</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-screwdriver-wrench">&nbsp;</i>Tools
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(97px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">Available Tools</a></li>
                            <li><a class="dropdown-item text-white" href="#">Import</a></li>
                            <li><a class="dropdown-item text-white" href="#">Export</a></li>
                            <li><a class="dropdown-item text-white" href="#">Site Health</a></li>
                            <li><a class="dropdown-item text-white" href="#">Export Personal Data</a></li>
                            <li><a class="dropdown-item text-white" href="#">Erase Personal Data</a></li>
                            <li><a class="dropdown-item text-white" href="#">Theme File Editor</a></li>
                            <li><a class="dropdown-item text-white" href="#">Plugin File Editor</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item p-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-sliders">&nbsp;</i>Settings
                        </button>
                        <ul class="dropdown-menu bg-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(110px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item text-white" href="#">General</a></li>
                            <li><a class="dropdown-item text-white" href="#">Writing</a></li>
                            <li><a class="dropdown-item text-white" href="#">reading</a></li>
                            <li><a class="dropdown-item text-white" href="#">Descussion</a></li>
                            <li><a class="dropdown-item text-white" href="#">Media</a></li>
                            <li><a class="dropdown-item text-white" href="#">Permalinks</a></li>
                            <li><a class="dropdown-item text-white" href="#">Privacy</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item p-1">
                    <a href="#"> <i class="fa-solid fa-square-minus"></i>Collapse menu</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--Sidebar end-->

    <script src="https://kit.fontawesome.com/9197b39465.js" crossorigin="anonymous"></script>
</body>

</html>
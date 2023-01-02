<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eighth page</title>
    <!--CSS Start -->
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin-top: 0;
        }

        button.btn.btn-outline-light.me-2:hover {
            color: #33f078;
            background-color: black;
        }

        button.btn.btn.btn-outline-light.me-2 {
            border: none;
        }

        ul.dropdown-menu.dropdown-menu-dark {
            color: #33f078;
            background-color: black;
        }

        a.dropdown-item:hover {
            color: #33f078;
        }

        li.nav-item:hover {
            color: white;

        }

        a.dropdown-item.text-light:hover {
            color: #33f078;
            background-color: black;
        }



        button.btn.btn-dark.text-light:hover {
            background-color: #3858e9;
        }

        a {
            color: #2271b1;
            transition-property: border, color;
            transition-duration: .05s;
            transition-timing-function: ease-in-out;
        }


        .col-sm-11 {
            background-image: url("Images/moon-light-ride-4k-e3-2048x1152.jpg");
            background-repeat: no-repeat;
        }

        a.btn.btn-light:hover {
            color: #33f078;
            background-color: transparent;
        }

        h2.col-sm-10 {
            color: #33f078;
        }

        .col-sm-10 {
            flex: 0 0 auto;
            width: 89% !important;
        }

        .col-sm-2 {
            flex: 0 0 auto;
            width: 12% !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--Header of wordpress -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 bg-dark ">
                <div class="d-flex flex-row">
                    <!-- Wordspress logo button-->
                    <div class="p-1 nav-item dropdown">
                        <button type="button" class="btn btn btn-outline-light me-2" data-bs-toggle="dropdown">
                            <i class="fa-brands fa-wordpress"></i>
                        </button>
                        <!--links for wordpress logo -->
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">About Wordpress</a></li>
                            <li><a class="dropdown-item" href="#">Wordpress.org</a></li>
                            <li><a class="dropdown-item" href="#">Documentaion</a></li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- Wordspress button-->
                    <div class="p-1 text-light dropdown">
                        <button type="button" class="btn btn btn-outline-light me-2" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-house" data-bs-toggle="dropdown">&nbsp;&nbsp;</i>Wordpress
                        </button>
                        <!-- ul link for visit sites-->
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Visit Site</a></li>
                        </ul>
                    </div>
                    <!--Notification button-->
                    <div class="p-1 text-light">
                        <button type="button" class="btn btn btn-outline-light me-2" data-bs-toggle="dropdown">
                            <i class="fa-sharp fa-solid fa-message">&nbsp;&nbsp;</i>0
                        </button>
                    </div>
                    <!-- New button for new data-->
                    <div class="p-1 text-light dropdown">
                        <button type="button" class="btn btn btn-outline-light me-2 " data-bs-toggle="dropdown">
                            <i class="fa-solid fa-plus nav-link ">&nbsp;&nbsp;</i>New
                        </button>
                        <!--Add new data in posts -->
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Posts</a></li>
                            <li><a class="dropdown-item" href="#">Media</a></li>
                            <li><a class="dropdown-item" href="#">Page</a></li>
                            <li><a class="dropdown-item" href="#">User</a></li>
                        </ul>
                    </div>
                    <!--User profile-->
                    <div class="p-1 ms-auto text-white  dropdown">
                        <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="dropdown">
                            Howdy,Himanshu <i class="fa fa-user-circle" aria-hidden="true">&nbsp;&nbsp;</i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Himanshu</a></li>
                            <li><a class="dropdown-item" href="#">Signin</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header ended-->
    <nav class="conatiner-fluid d-flex col-sm-12" style="min-height:100vh">
        <div class="col-sm-2 bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropend">
                    <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown"><i class="fa-solid fa-gauge text-start" aria-hidden='true'></i> Dashboard
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                        <li class="text-light"><a class="dropdown-item bg-dark" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="#">Updates</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-thumbtack" aria-hidden='true'></i> Posts
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="all_posts.php">All Posts</a></li>
                            <li><a class="dropdown-item" href="add_post.php">Add New</a></li>
                            <li><a class="dropdown-item" href="#">Categories</a></li>
                            <li><a class="dropdown-item" href="#">Tags</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-camera" aria-hidden='true'></i> Media
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="#">Library</a></li>
                            <li><a class="dropdown-item" href="#">Add New</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-file" aria-hidden='true'></i> Pages
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="#">All Pages</a></li>
                            <li><a class="dropdown-item" href="#">Add New</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-message" aria-hidden='true'></i> Comments
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-brush" aria-hidden='true'></i> Apperences
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="#">Themes</a></li>
                            <li><a class="dropdown-item" href="#">Editor</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-plug" aria-hidden='true'></i> Plugins
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="#">Install Plugins</a></li>
                            <li><a class="dropdown-item" href="#">Add New</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user" aria-hidden='true'></i> User
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="all_users.php">All Users</a></li>
                            <li><a class="dropdown-item" href="add_user.php">Add New</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-wrench" aria-hidden='true'></i> Tools
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="#">Available Tools</a></li>
                            <li><a class="dropdown-item" href="#">Import</a></li>
                            <li><a class="dropdown-item" href="#">Export</a></li>
                            <li><a class="dropdown-item" href="#">Site Health</a></li>
                            <li><a class="dropdown-item" href="#">Export Personal Data</a></li>
                            <li><a class="dropdown-item" href="#">Erase Personal Data</a></li>
                            <li><a class="dropdown-item" href="#">Theme File Editor</a></li>
                            <li><a class="dropdown-item" href="#">Plugin File Editor</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark text-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-sliders" aria-hidden='true'></i> Setting
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(123.28px, 0px, 0px);" data-popper-placement="right-start">
                            <li><a class="dropdown-item" href="#">General</a></li>
                            <li><a class="dropdown-item" href="#">Writing</a></li>
                            <li><a class="dropdown-item" href="#">Reading</a></li>
                            <li><a class="dropdown-item" href="#">Discussion</a></li>
                            <li><a class="dropdown-item" href="#">Media</a></li>
                            <li><a class="dropdown-item" href="#">Permalinks</a></li>
                            <li><a class="dropdown-item" href="#">Privacy</a></li>
                        </ul>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="p-1 text-light">
                        <button type="button" class="btn btn btn-outline-light me-2" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-arrow-right-arrow-left" aria-hidden='true'></i> Collapse menu
                        </button>
                    </div>
                </li>
                <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed">Collapse</span>
                    </div>
                </a>
            </ul>
        </div>
        <div class="col-sm-11">
            <table class="table  table-borderless">

            </table>
        </div>
    </nav>
</body>

</html>
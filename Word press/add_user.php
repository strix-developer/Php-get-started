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

        .col-sm-1.bg-dark.d-flex.align-item-start {
            width: 12%;
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

        input.btn.btn-light:hover {
            color: #33f078;
            background-color: black;
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
    <div class="col-lg-12">
        <br>
        <h2 class="d-flex">Add User</h2>
        <br>
        <h6 class="d-flex">Create a brand new user and add them to this site</h6>
        <!--form start-->
        <form action="insert_users.php" class="col-sm-12" method="POST">
            <br>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">User Name(Required)</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control" id="name" placeholder="" name="username">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email(Required)</label>
                <div class="col-sm-4">
                    <input type="email"  class="form-control" id="staticEmail" placeholder="" name="email">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control" id="fname" placeholder="" name="firstname">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control" id="lname" placeholder="" name="lastname">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword" placeholder="" name="password">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Roles:</label>
                <div class="col-sm-2">
                    <select id="role" name="role">
                        <option value="Subscriber">Subscriber</option>
                        <option value="Contributer">Contributer</option>
                        <option value="Author">Author</option>
                        <option value="Editor">Editor</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </div>
            </div>
            <br>
            <input type="submit" value="Add User" class="btn btn-light">
        </form>
    </div>
</body>

</html>
 <?php
    session_start();
    ?>
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

         a {
             text-decoration: none;
             color: white;
         }

         a:hover {
             color: green;
         }

         a.dropdown-item {
             color: white;
         }

         a.dropdown-item:hover {
             color: green;
             background-color: none;
         }

         .col-sm-1.text-white.d-flex.align-items-start.bg-dark {
             width: 10%;
         }

         ul.dropdown-menu.dropdown-menu-dark:hover {
             background-color: black;
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

     <!--Row for content start-->
     <div class="container-fluid row">

         <!--Sidebar div start-->
         <div class="col-sm-1 text-white d-flex align-items-start bg-dark" style="min-height:100vh">
             <nav class="navbar bg-dark">
                 <ul class="nav navbar-nav">
                     <!--list for Dashboard-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa fa-tachometer" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Dashboard
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform: 
                         translate3d(135px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">Home</a></li>
                                 <li><a class="dropdown-item" href="#">Updates</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Posts-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa fa-thumb-tack" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Posts
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(94px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">All Posts</a></li>
                                 <li><a class="dropdown-item" href="#">Add New</a></li>
                                 <li><a class="dropdown-item" href="#">Categories</a></li>
                                 <li><a class="dropdown-item" href="#">Tags</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Media-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa fa-camera-retro" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Media
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(104px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">Library</a></li>
                                 <li><a class="dropdown-item" href="#">Add New</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Pages-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa fa-file-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Pages
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(97px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">All Pages</a></li>
                                 <li><a class="dropdown-item" href="#">Add New</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Comments-->
                     <li class="nav-item p-1">
                         <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                             <a href="#">
                                 <i class="fa fa-commenting-o" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Comments
                             </a>
                         </button>
                     </li>
                     <!--list for Appearance-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa-solid fa-brush">&nbsp;&nbsp;&nbsp;</i>Appearance
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(140px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">Themes</a></li>
                                 <li><a class="dropdown-item" href="#">Editor</a></li>
                             </ul>
                         </div>
                     </li>
                     <!---list for Plugins-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa-solid fa-plug-circle-bolt">&nbsp;&nbsp;&nbsp;</i>Plugins
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(112px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">Installed Plugins</a></li>
                                 <li><a class="dropdown-item" href="#">Add New</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Users-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa-solid fa-user-tie">&nbsp;&nbsp;&nbsp;</i>Users
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(97px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">All Users</a></li>
                                 <li><a class="dropdown-item" href="#">Add New</a></li>
                                 <li><a class="dropdown-item" href="#">Profile</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Tools-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa-solid fa-screwdriver-wrench">&nbsp;&nbsp;&nbsp;</i>Tools
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(97px, 0px, 0px);" data-popper-placement="right-start">
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
                     <!--list for Settings-->
                     <li class="nav-item p-1">
                         <div class="dropdown">
                             <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                                 <i class="fa-solid fa-sliders">&nbsp;&nbsp;&nbsp;</i>Settings
                             </button>
                             <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute; inset:
                         0px auto auto 0px; margin: 0px; transform:
                         translate3d(117px, 0px, 0px);" data-popper-placement="right-start">
                                 <li><a class="dropdown-item" href="#">General</a></li>
                                 <li><a class="dropdown-item" href="#">Writing</a></li>
                                 <li><a class="dropdown-item" href="#">reading</a></li>
                                 <li><a class="dropdown-item" href="#">Descussion</a></li>
                                 <li><a class="dropdown-item" href="#">Media</a></li>
                                 <li><a class="dropdown-item" href="#">Permalinks</a></li>
                                 <li><a class="dropdown-item" href="#">Privacy</a></li>
                             </ul>
                         </div>
                     </li>
                     <!--list for Collapse Menu-->
                     <li class="nav-item p-1">
                         <button type="button" class="btn btn-dark" data-bs-toggle="dropdown">
                             <i class="fas fa-exchange-alt">&nbsp;&nbsp;</i>Collapse menu
                         </button>
                     </li>
                 </ul>
             </nav>
         </div>
         <!--Sidebar div end-->

         <!--Content div start-->
         <div class="col-sm-10 p-3">
             <h3>Dashboard</h3>
         </div>
         <!--Content div end-->

     </div>
     <!--Row end-->
     <script src="https://kit.fontawesome.com/9197b39465.js" crossorigin="anonymous"></script>
 </body>

 </html>
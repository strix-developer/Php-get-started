 <?php
    session_start();
    include("dasheader.php");
    ?>

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
                             <li><a class="dropdown-item" href="addpost.php">Add New</a></li>
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
                             <i class="fa-regular fa-file-lines">&nbsp;&nbsp;&nbsp;</i>Pages
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
                         <i class="fa-solid fa-message">&nbsp;&nbsp;&nbsp;</i>Comments
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
                             <li><a class="dropdown-item" href="allusers.php">All Users</a></li>
                             <li><a class="dropdown-item" href="adduser.php">Add New</a></li>
                             <li><a class="dropdown-item" href="profile.php">Profile</a></li>
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
     <div class=" container col-sm-10 p-3 mt-1">
         <h3>Dashboard</h3>
     </div>
     <!--Content div end-->

 </div>
 <!--Row end-->
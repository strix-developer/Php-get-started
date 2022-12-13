 <?php
    session_start();
    ?>
 <!-- Start-->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Header page</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

     <style>
         body {
             background-image: url('images/mount.jpg');
             background-repeat: no-repeat;
             background-position: center center;
         }

         button.btn.btn-light {
             float: right;
         }

         .nav-tabs {
             --bs-nav-tabs-border-color: #dee2e6;
             --bs-nav-tabs-border-radius: 0.375rem;
             --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
             --bs-nav-tabs-link-active-color: #495057;
             --bs-nav-tabs-link-active-bg: #fff;
             --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
             border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
             width: 514px;
         }
     </style>

 </head>

 <body>

     <!--Header Started-->
     <header>
         <div class="container-fluid bg-image rounded-end rounded-start">

             <div class="row">
                 <!--Png logo-->
                 <div class="col-sm-2 p-3 bg-image rounded-pill">
                     <a class="navbar-brand p-3" href="form.php">
                         <img src="./images/5796282.webp" alt="Logo" style="width:80px;" class="rounded-pill">
                     </a>
                 </div>

                 <!--Name-->

                 <!--Menu-->
                 <div class="col-sm-8 bg-image ">
                     <div class="navbar navbar-expand-sm bg-image rounded p-2 m-1 justify-content-center" id="navbarSupportedContent">
                         <ul class="nav nav-pills">
                             <li class="nav-item">
                                 <a class="nav-link link text-dark display-7" data-bs-toggle="pill" href="#">
                                     Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link link text-dark display-7" data-bs-toggle="pill" href="#">
                                     Watch Video</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link link text-dark display-7" data-bs-toggle="pill" href="#">
                                     About</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link link text-dark display-7" data-bs-toggle="pill" href="#">
                                     Contact</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link link text-dark  display-7" data-bs-toggle="pill" href="#">
                                     Blocks</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
     </header>
     <!--Header close-->
     <div class="container bg-image">
         <?php
            include 'mysql.php';
            $ID = $_SESSION["ID"];
            $sql = mysqli_query($connect, "SELECT * FROM signup where ID ='$ID' ");
            $row  = mysqli_fetch_array($sql);
            ?>

         <!--div for Profile photo start-->
         <div class=" col-sm-12 m-3 text-center bg-image">
             <img src="Upload data/<?php echo $row['File'] ?>" height="300px" width="300px" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
             <div class="card-body">
                 <h4 class="card-title text-white m-2">
                     Welcome <?php echo $_SESSION['name']; ?>&nbsp;
                 </h4>
                 <div class="d-flex justify-content-center mb-2">
                     <a href="edit_profile.php" class="btn btn-outline-light ms-1 text-secondary">Edit</button></a>
                     <a href="#" class="btn btn-outline-light ms-1 text-secondary">View</button></a>
                     <a href="delete_profile.php" class="btn btn-outline-light ms-1 text-secondary">Delete</button></a>
                     <a href="form.php" class="btn btn-outline-light ms-1 text-secondary">Logout</button></a>
                 </div>
             </div>
         </div>

         <!--div for form data start-->
         <div class=" mt-3 text-center bg-image">
             <!--div for heading-->
             <div class="container-fluid p-2 bg-image text-center text-white rounded-end rounded-start">
                 <h2>Profile Information</h2>
             </div>

             <!--table for data-->
             <table class="table table-hover table-borderless">
                 <thead>
                     <tr class=" text-white ">
                         <th>Name</th>
                         <th>Last Name</th>
                         <th>Gmail</th>
                         <th>Number</th>
                         <th>Password</th>
                         <th>Roles</th>
                         <th>ID</th>
                         <th>Images</th>
                     </tr>
                 </thead>
                 <?php
                    $rows = mysqli_query($connect, "SELECT * FROM signup");
                    if ($row["Role"] != "Admin") {
                    ?>
                     <!--Row for table headings-->
                     <tr class="table-info ">
                         <td class="text-dark">
                             <?Php echo $row['Name']; ?>
                         </td>
                         <td>
                             <?Php echo $row['Last Name']; ?>
                         </td>
                         <td>
                             <?Php echo $row['Email']; ?>
                         </td>
                         <td>
                             <?Php echo $row['Phone Number']; ?>
                         </td></br>
                         <td>
                             <?Php echo $row['Password']; ?></br>
                         </td>
                         <td>
                             <?Php echo $row['Role']; ?></br>
                         </td>
                         <td>
                             <?Php echo $row['ID']; ?></br>
                         </td>
                         <td>
                             <?Php echo $row['File']; ?></br>
                         </td>
                     </tr>

                     <?php
                    } else {
                        if ($_SESSION['role'] == 'Admin') { ?>
                         <?php
                            $i = 1;
                            $rows = mysqli_query($connect, "SELECT * FROM signup ORDER BY id ASC");
                            if (count($row) != 0) {
                                foreach ($rows as $row) : ?>
                                 <th></th>
                                 <th></th>
                                 <!--Row for table data-->
                                 <tr class="text-dark table-info">
                                     <?php $i++; ?>
                                 <tr class="table-info ">
                                     <td class="text-dark">
                                         <?Php echo $row['Name']; ?>
                                     </td>
                                     <td>
                                         <?Php echo $row['Last Name']; ?>
                                     </td>
                                     <td>
                                         <?Php echo $row['Email']; ?>
                                     </td>
                                     <td>
                                         <?Php echo $row['Phone Number']; ?>
                                     </td></br>
                                     <td>
                                         <?Php echo $row['Password']; ?></br>
                                     </td>
                                     <td>
                                         <?Php echo $row['Role']; ?></br>
                                     </td>
                                     <td>
                                         <?Php echo $row['ID']; ?></br>
                                     </td>
                                     <td>
                                         <?Php echo $row['File']; ?></br>
                                     </td>
                                     <td>
                                         <a href="edit_profile.php"><input type="button" class="navbar-dark bg-dark text-info img-thumbnail table-light text-center " value="Edit profile"></a>
                                     </td>
                                     <td>
                                         <a href="delete_profile.php"><input type="button" class="navbar-dark bg-danger text-light img-thumbnail table-light text-center" value="Delete profile"></a>
                                     </td>
                                 </tr>
                             <?php endforeach; ?>
                 <?php
                            }
                        }
                    }
                    ?>

             </table>
         </div>
         <!--div for form data end-->
     </div>

 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

 </html>
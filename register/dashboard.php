 <?php
    session_start();
    require_once __DIR__ . "/bootstrap/app.php";
    require_once file_header();
    ?>

 <!--div for Profile photo start-->
 <div class="container mt-3 text-center">
     <div class="card" style="width:300px; height:400px">
         <img class="card-img-top" src="images/avatar.png" alt="Card image" style="width:100%">
         <div class="card-body">
             <h4 class="card-title">
                 <?php echo $_SESSION['name']; ?>&nbsp;
                 <?php echo $_SESSION['lname']; ?>
             </h4>

         </div>
     </div>
 </div>
 <!--div for Profile photo end-->

 <!--div for form data start-->
 <div class="container mt-3 text-center bg-light">

     <div class="container-fluid p-2 bg-primary text-center text-white">
         <h2>Your Sign up Information</h2>
     </div>

     <table class="table table-striped">
         <thead>
             <!--Row for table headings-->
             <tr class="table-danger">
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Phone Number</th>
                 <th>Email</th>
                 <th>Password</th>
                 <th>Role</th>
                 <th>ID</th>
                 <th>Edit</th>
             </tr>
         </thead>

         <tbody>
             <?php
                if ($_SESSION['role'] != 'admin') { // users login 
                ?>

                 <!--Row for table data-->
                 <tr>
                     <td><?php echo $_SESSION['name']; ?> </td>
                     <td><?php echo $_SESSION['lname']; ?></td>
                     <td><?php echo $_SESSION['number']; ?></td>
                     <td><?php echo $_SESSION['email']; ?></td>
                     <td><?php echo $_SESSION['pass']; ?> </td>
                     <td><?php echo $_SESSION['role']; ?> </td>
                     <td><?php echo $_SESSION['ID']; ?> </td>
                     <td>
                         <a href="profile.php"> <button type="button" class="btn btn-success">Edit Profile</button></a>
                     </td>
                 </tr>
                 <?php  } else {      //admin login and to show all users data
                    if ($_SESSION['role'] == 'admin') {
                        $users = json_decode(file_get_contents(__DIR__ . "/database/user.json"), true);

                        if (count($users) != 0) {
                            foreach ($users as $user) {
                    ?>
                             <!--Row for table data-->
                             <tr>
                                 <td><?php echo $user['First Name']; ?> </td>
                                 <td><?php echo $user['Last Name']; ?></td>
                                 <td><?php echo $user['Phone Number']; ?></td>
                                 <td><?php echo $user['E-mail']; ?></td>
                                 <td><?php echo $user['Password']; ?> </td>
                                 <td><?php echo $user['Role']; ?> </td>
                                 <td><?php echo $user['ID']; ?> </td>
                                 <td>
                                     <a href="profile.php"> <button type="button" class="btn btn-success">Edit Profile</button></a>
                                 </td>
                             </tr>
             <?php
                            }
                        }
                    }
                }
                ?>

         </tbody>

     </table>

 </div>
 <!--div for form data end-->
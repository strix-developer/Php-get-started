   <?php
    require_once __DIR__ . "/bootstrap/app.php";
    require_once file_header();
    ?>

   <div class="container-fluid col-sm-5 mt-3 bg-light text-center">
       <!--div for heading text-->
       <div class="container-fluid p-2 bg-primary text-center">
           <h2>Sign up form</h2>
       </div>
       <!--form start-->
       <form action="" method="POST" id="form">
           <div class="mb-3 mt-3 text-start">
               <label for="name">Name:</label>
               <input type="text" class="form-control" id="name" pattern="[A-Za-z]{4,20}" placeholder="Enter name" name="name">
           </div>
           <div class="mb-3 mt-3 text-start">
               <label for="last name">Last Name:</label>
               <input type="text" class="form-control" id="lname" pattern="[A-Za-z]{4,20}" placeholder="Enter Last name" name="lname">
           </div>
           <div class="mb-3 mt-3 text-start">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
           </div>
           <div class="mb-3 mt-3 text-start">
               <label for="phone number">Phone Number:</label>
               <input type="text" class="form-control" id="number" placeholder="Enter Phone Number" name="number" maxlength="10">
           </div>
           <div class="mb-3 mt-3 text-start">
               <label for="password">Password:</label>
               <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
           </div>
           <div class="mb-3 mt-3 text-start">
               <label for="confirm password">Confirm Password:</label>
               <input type="password" class="form-control" id="con-pass" placeholder="Confirm password" name="con-pass">
           </div>
           <div class="mb-3 mt-3 text-start">
               <label for="role">Role:</label>
               <select id="role" name="role">
                   <option value="admin">Admin</option>
                   <option value="guest">Guest</option>
                   <option value="user">User</option>
               </select>
           </div>
           <div class="mb-3 mt-3 text-end">
               <label class="form-check-label">
                   <input class="form-check-input" type="checkbox" name="remember"> Remember me
               </label>
               <input type="submit" class="btn btn-success" id="submit" name="submit">
               <input type="hidden" name="action" value="register">
           </div>
           <div class="mb-3 mt-3 text-end">
               <label for="user">Adready have account/</label>
               <a href="login.php"> <input class="btn btn-success" type="button" value="Log in"></a>
               <input type="hidden" name="action" value="register">
           </div>
       </form>
       <!--form end-->
   </div>
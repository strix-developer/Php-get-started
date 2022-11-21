 <?php
    session_start();
    require_once __DIR__ . "/core/support/action/login.php";
    require_once __DIR__ . "/bootstrap/app.php";
    require_once file_header();
    ?>

 <div class="container col-sm-3 mt-3 p-5 bg-light text-center">
     <!--div for heading text-->
     <div class="container-fluid p-2 bg-primary text-center text-white text-capitalize">
         <h2>Please log in</h2>
     </div>
     <!--Form start-->
     <form action="" method="POST">
         <div class="mb-3 mt-3 text-start">
             <label for="email">Email:</label>
             <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
         </div>

         <div class="mb-3 mt-3 text-start">
             <label for="password">Password:</label>
             <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="pass">
         </div>

         <div class="mb-3 mt-3 text-end">
             <label class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="remember"> Remember me
             </label>
         </div>

         <div class="mb-3 mt-3 text-end">
             <input type="submit" class="btn btn-success" value="Login" name="login">
             <input type="hidden" name="action" value="login">
         </div>
     </form>
     <!--Form end-->
 </div>
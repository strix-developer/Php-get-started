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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

     <style>
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

     <!--Log in-->
     <div class="container col-sm-6 mt-3 bg-info p-2">
         <h2 class=" bg-info text-white rounded-pill img-thumbnail text-center">Please Log in</h2>
         <!--Log in form Started-->
         <form action="insert_login.php" method="POST">

             <!-- Gmail-->
             <div class="mb-3">
                 <label for="email">Gmail:</label>
                 <input type="email" class="form-control" id="email" placeholder="Enter Gmail" name="email">
             </div>

             <!-- pswd-->
             <div class="mb-3">
                 <label for="pswd">Confirm Password:</label>
                 <input type="password" class="form-control" id="pswd" placeholder=" Password" name="pswd">
             </div>

             <!-- Remember me-->
             <div class="form-check mb-3">
                 <label class="form-check-label">
                     <input class="form-check-input" type="checkbox" name="remember"> Remember me
                 </label>
             </div>

             <!-- Log in Button-->
             <input class="btn btn-dark" type="submit" value="Login" name="submit">
             <input type="hidden" name="action" value="header">
             </a>
             <a class="btn btn-dark" href="form.php">Sign up</a></li>
             <input type="hidden" name="action" value="header">
             <br>
         </form>
     </div>

 </body>

 </html>
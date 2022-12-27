 <?php
    include("header.php");
    ?>
 <div class="container-fluid col-sm-5 bg-light p-3">
     Welcome to WordPress. Before getting started, you will need to know the following items.

     1.Database name<br>
     2.Database username<br>
     3.Database password<br>
     4.Database host<br>
     5.Table prefix (if you want to run more than one WordPress in a single database)<br><br>
     This information is being used to create a wp-config.php file.<strong> If for any
         reason this automatic file creation<br> does not work,
         do not worry. All this does is fill in the database
         information to a configuration file. You<br>
         may also simply open wp-config-sample.php in a text editor, fill in your information,
         and save it as wp-<br>
         config.php.</strong> Need more help?
     <a href="#">Read the support article on wp-config.php.</a><br><br>

     In all likelihood, these items were supplied to you by your web host.
     If you do not have this information, then<br>
     you will need to contact them before you can continue. If you are ready…<br>
     <form action="conndetail.php">
         <button type="submit" class="btn btn-light border-primary mt-3">Let's go!</button>
     </form>
 </div>
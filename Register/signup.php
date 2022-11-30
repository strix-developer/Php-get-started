<?php
require_once __DIR__ . "/Bootsstrap/App.php";
require file_header();
?>

<!--Sign in-->
<div class="container col-sm-4 mt-3 bg-info p-2 ">
  <h2 class=" bg-info text-white rounded-pill img-thumbnail text-center">Please Sign in</h2>
  <!--sign up Form Started-->
  <form action="" method="POST">

    <!-- Name-->
    <div class="mb-3 mt-3">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" >
    </div>

    <!-- Last Name-->
    <div class="mb-3">
      <label for="Last Name">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
    </div>

    <!-- Gmail-->
    <div class="mb-3">
      <label for="email">Gmail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Gmail" name="email">
    </div>

    <!--Phone Number-->
    <div class="mb-3">
      <label for="number">Number:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" maxlength="10">
    </div>

    <!-- Pswd-->
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <!-- cpswd-->
    <div class="mb-3">
      <label for="confirmpswd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmpswd" placeholder="Confirm password" name="confirmpswd">
    </div>

    <!-- Role-->
    <label for="role">Roles:</label>
    <select id="role" name="role">
      <option value="User">User</option>
      <option value="Guest">Guest</option>
      <option value="Admin">Admin</option>
    </select>

    <!-- Rm-->
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>

    <!-- Submit Button-->
    <input type="submit" class="navbar-dark bg-dark text-white img-thumbnail" name="submit" value="submit">
    <input type="hidden" name="action" value="register">
    <br>

    <!-- Already-->
    <label class="Already Sign in">Already Sign in-></label>

    <!-- Log in Button-->
    <a href="login.php"><button type="button" class="navbar-dark bg-dark text-white  img-thumbnail ">Log in</button></a>
  </form>
  <!--Form end-->
</div>
</body>

</html>
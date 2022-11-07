<?php
require_once __DIR__ . "/Bootsstrap/App.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <head>

  </head>

<body>

  <?php
  require_once "./Core/Support/Layout/header.php";
  ?>
  <div class="container col-sm-4 mt-3 bg-light ">
    <h2>Please Sign in</h2>
    <form action="" method="POST">
      <!-- Name-->
      <div class="mb-3 mt-3">
        <label for="Name">Name:</label>
        <input type="Name" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
      <!-- Last Name-->
      <div class="mb-3">
        <label for="Last Name">Last Name:</label>
        <input type="Last Name" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
      </div>
      <!-- Gmail-->
      <div class="mb-3">
        <label for="Gmail">Gmail:</label>
        <input type="Gmail" class="form-control" id="gmail" placeholder="Enter Gmail" name="gmail">
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
        <option value=" Admin ">Admin</option>
        <option value="User">User</option>
        <option value="Guest">Guest</option>
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
      <!-- Asi-->
      <label class="Already Sign in">Already Sign in-></label>
      <!-- Log in Button-->
      <a href="login.php"><button type="button" class="navbar-dark bg-dark text-white  img-thumbnail">Log in</button></a>
    </form>
  </div>
</body>

</html>
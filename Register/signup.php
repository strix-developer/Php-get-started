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
  <header>
    <div class="container-fluid bg-dark rounded-pill">
      <div class="row">
        <div class="col-sm-1 p-3 bg-dark rounded-pill">
          <a class="navbar-brand p-3" href="index.php">
            <img src="./images/5796282.webp" alt="Logo" style="width:70px;" class="rounded-pill">
          </a>
        </div>
        <div class="col-sm-2 p-3">
          <a class="navbar-brand text-white text-center" href="#">
            <h2>Himanshu Thakur</h2>
          </a>
        </div>
        <div class="col-sm-6 bg-info text-white rounded-pill img-thumbnail">
          <nav class="navbar navbar-expand-sm bg-dark text-white rounded-pill p-2 m-1 justify-content-center">
            <div class="col-sm-7 bg-dark text-white rounded-pill ">
              <ul class="nav nav-tabs  ">
                <li class="nav-item ">
                  <a class="nav-link text-info" href="#">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-info" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-info" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-info" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-info" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-info" href="#">Reservation</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-sm-3 p-3 bg-dark rounded-pill">

          <button type="button" class="btn btn-light dropdown-toggle p-2 rounded-pill" data-bs-toggle="dropdown">Register</button>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item" href="login.php"> Log in</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!--Sign in-->
  <div class="container col-sm-4 mt-3 bg-info p-2 ">
    <h2 class=" bg-info text-white rounded-pill img-thumbnail text-center">Please Sign in</h2>
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
      <!-- Asi-->
      <label class="Already Sign in">Already Sign in-></label>
      <!-- Log in Button-->
      <a href="login.php"><button type="button" class="navbar-dark bg-dark text-white  img-thumbnail ">Log in</button></a>
    </form>
  </div>
</body>

</html>
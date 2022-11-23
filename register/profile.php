  <?php
    session_start();
    require_once __DIR__ . "/bootstrap/app.php";
    require_once file_header();
    ?>

  <!--div for data edit start-->
  <div class="container-fluid col-sm-5 mt-3 bg-light text-center">
      <!--div for heading-->
      <div class="container-fluid p-2 bg-primary text-center text-white">
          <h2>Edit your Profile</h2>
      </div>
      <!--form start-->
      <form action="" method="POST" id="form">
          <!--For Name field-->
          <div class="mb-3 mt-3 text-start">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" pattern="[A-Za-z]{4,20}" value="<?php echo $_SESSION['name']; ?>" name="name">
          </div>

          <!--For last name field-->
          <div class="mb-3 mt-3 text-start">
              <label for="last name">Last Name:</label>
              <input type="text" class="form-control" id="lname" pattern="[A-Za-z]{4,20}" value="<?php echo $_SESSION['lname']; ?>" name="lname">
          </div>

          <!--For Email field-->
          <div class="mb-3 mt-3 text-start">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" name="email">
          </div>

          <!--For Phone number field-->
          <div class="mb-3 mt-3 text-start">
              <label for="phone number">Phone Number:</label>
              <input type="text" class="form-control" id="number" value="<?php echo $_SESSION['number']; ?>" name="number" maxlength="10">
          </div>

          <!--For Age field-->
          <div class="mb-3 mt-3 text-start">
              <label for="age">Age:</label>
              <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age">
          </div>

          <!--For Aadhar card field-->
          <div class="mb-3 mt-3 text-start">
              <label for="aadhar">Aadhar Number:</label>
              <input type="text" class="form-control" id="aadhar" placeholder="Enter your aadhar number" name="aadhar" maxlength="12">
          </div>

          <!--For pan card field-->
          <div class="mb-3 mt-3 text-start">
              <label for="age">Pan Card:</label>
              <input type="text" class="form-control" id="pancard" placeholder="Enter your pan number" name="pancard" maxlength="10">
          </div>

          <!--For Bank account number field-->
          <div class="mb-3 mt-3 text-start">
              <label for="age">Bank Account Number:</label>
              <input type="text" class="form-control" id="account" placeholder="Enter your bank account number" name="account" maxlength="11">
          </div>

          <!--For Submit field-->
          <div class="mb-3 mt-3 text-end">
              <input type="submit" class="btn btn-success" id="submit" name="submit">
              <input type="hidden" name="action" value="profile">
          </div>
          <?php
            require_once __DIR__ . "/core/support/action/profile.php";
            ?>
      </form>
      <!--form end-->
  </div>
  <!--div for edit data end-->
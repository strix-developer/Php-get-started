  <?php
    session_start();
    require_once __DIR__ . "/bootstrap/app.php";
    require_once file_header();
    ?>

  <!--div for data edit start-->
  <div class="container-fluid col-sm-5 mt-3 p-2 bg-light text-center rounded">
      <!--div for heading-->
      <div class="container-fluid p-2 bg-dark text-center text-white rounded">
          <h2>Edit Profile</h2>
      </div>
      <!--form start-->
      <form action="" method="POST" id="form" class="font-monospace">
          <!--For Name field-->
          <div class="mb-3 mt-3 text-start">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" pattern="[A-Za-z]{1,20}" value="<?php echo $_SESSION['name']; ?>" name="name">
          </div>

          <!--For last name field-->
          <div class="mb-3 mt-3 text-start">
              <label for="last name">Last Name:</label>
              <input type="text" class="form-control" id="lname" pattern="[A-Za-z]{1,20}" value="<?php echo $_SESSION['lname']; ?>" name="lname">
          </div>

          <!--For Email field-->
          <div class="mb-3 mt-3 text-start">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" name="email">
          </div>

          <!--For Phone number field-->
          <div class="mb-3 mt-3 text-start">
              <label for="phone number">Phone Number:</label>
              <input type="number" class="form-control" id="number" value="<?php echo $_SESSION['number']; ?>" name="number">
          </div>

          <!--For Age field-->
          <div class="mb-3 mt-3 text-start">
              <label for="age">Age:</label>
              <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age">
          </div>

          <!--For Date of birth field-->
          <div class="mb-3 mt-3 text-start">
              <label for="dob">Date Of Birth:</label>
              <input type="text" class="form-control" id="dob" placeholder="Enter your Date Of Birth" name="dob">
          </div>

          <!--For Aadhar card field-->
          <div class="mb-3 mt-3 text-start">
              <label for="aadhar">Aadhar Number:</label>
              <input type="number" class="form-control" id="aadhar" placeholder="Enter your aadhar number" name="aadhar" maxlength="12">
          </div>

          <!--For Address field-->
          <div class="mb-3 mt-3 text-start">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="address" placeholder="Apartment, house number, studio, or floor" name="address">
          </div>

          <!--For City field-->
          <div class="mb-3 mt-3 text-start">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" placeholder="Enter your City" name="city">
          </div>

          <!--For State field-->
          <div class="mb-3 mt-3 text-start">
              <label for="state">State:</label>
              <input type="text" class="form-control" id="state" placeholder="Enter your state" name="state">
          </div>

          <!--For Zip field-->
          <div class="mb-3 mt-3 text-start">
              <label for="zip">Zip-code:</label>
              <input type="number" class="form-control" id="zip" placeholder="Enter your zip code" name="zip">
          </div>

          <!--For Country field-->
          <div class="mb-3 mt-3 text-start">
              <label for="country">Country:</label>
              <input type="text" class="form-control" id="counter" placeholder="Enter your country name" name="country">
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
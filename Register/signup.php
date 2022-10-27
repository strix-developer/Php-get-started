<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 bg-light">
  <h2>Please Sign in</h2>
  <form action="#">
    <div class="mb-3 mt-3">
      <label for="Name">Name:</label>
      <input type="Name" class="form-control" id="Name" placeholder="Enter Name" name="Name">
    </div>
    <div class="mb-3">
      <label for="Last Name">Last Name:</label>
      <input type="Last Name" class="form-control" id="Last Name" placeholder="Enter Last Name" name="Last Name">
    </div>
    <div class="mb-3">
      <label for="Gmail">Gmail:</label>
      <input type="Gmail" class="form-control" id="Gmail" placeholder="Enter Gmail" name="Gmail">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3">
      <label for="confirm pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm pwd" placeholder="Confirm password" name="confirm pswd">
    </div>
    <label for="Roles">Roles:</label>
  <select id="Roles" name="Roles">
    <option value=" Admin ">Admin</option>
    <option value="User">User</option>
    <option value="Guest">Guest</option>
  </select>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="navbar-dark bg-dark text-white img-thumbnail">Submit</button>
    <br>
    <label class="Already Sign in">Already Sign in-></label>
    <button type="Log in" class="navbar-dark bg-dark text-white img-thumbnail">Log in</button>
  </form>
</div>

</body>
</html>

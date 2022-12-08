<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--navbar div-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/2441.jpg" alt="Logo" style="width:50px;" class="rounded-pill">
            </a>
        </div>
    </nav>

    <!--Sign up form div start-->
    <div class="container-fluid col-sm-4 mt-3 p-4 bg-success text-center rounded">
        <!--div for heading text-->
        <div class="container-fluid p-2 bg-dark text-center text-white text-capitalize">
            <h2>Sign up form</h2>
        </div>

        <!--form start-->
        <form action="insert_form.php" method="POST" id="form" enctype="multipart/form-data" class="font-monospace">
            <!--For name field-->
            <div class="mb-3 mt-3 text-start">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" pattern="[A-Za-z]{1,20}" placeholder="Enter your First name" name="first_name" required>
            </div>

            <!--For last name field-->
            <div class="mb-3 mt-3 text-start">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" pattern="[A-Za-z]{1,20}" placeholder="Enter Last name" name="last_name" required>
            </div>

            <!--For Email field-->
            <div class="mb-3 mt-3 text-start">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>

            <!--For Password field-->
            <div class="mb-3 mt-3 text-start">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>

            <!--For Phone number field-->
            <div class="mb-3 mt-3 text-start">
                <label for="phone_number">Phone Number:</label>
                <input type="number" class="form-control" id="
                phone_number" placeholder="Enter Phone Number" name="phone_number" min="0" maxlength="10" oninput="
                javascript: if (this.value.length > this.maxLength) this.value = 
                this.value.slice(0, this.maxLength);" required>
            </div>

            <!--For Role field-->
            <div class="mb-3 mt-3 text-start">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="guest">Guest</option>
                    <option value="user">User</option>
                </select>
            </div>

            <!--div for file upload-->
            <div class="form-group mb-3 mt-3 text-start">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" required>
            </div>

            <!--For Remember me and Submit field-->
            <div class="mb-3 mt-3 text-end">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
                <input type="submit" class="btn btn-dark" id="submit" name="submit">
            </div>

            <!--For Log in field-->
            <div class="mb-3 mt-3 text-end">
                <label for="user">Adready have account/</label>
                <a href="create_login.php"> <input class="btn btn-dark" type="button" value="Log in"></a>
            </div>

        </form>
        <!--form end-->
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>

<style>
    body {
        background-image: url(images/background.webp);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        justify-content: center;
    }
</style>

<div class="container-fluid col-sm-4 mt-3 p-4 bg-light text-center rounded">
    <!-- heading text-->
    <div class="container-fluid p-2 bg-dark text-center text-white text-capitalize">
        <h2>Sign up form</h2>
    </div>

    <!--form start-->
    <form action="" method="POST" id="form" enctype="multipart/form-data">
        <!-- name -->
        <div class="mb-3 mt-3 text-start">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
        </div>

        <!-- Email -->
        <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <!-- Phone number -->
        <div class="mb-3 mt-3 text-start">
            <label for="phone number">Phone Number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter Phone Number" name="number" min="0" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>

        <!-- Password -->
        <div class="mb-3 mt-3 text-start">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
        </div>

        <!-- Confirm password -->
        <div class="mb-3 mt-3 text-start">
            <label for="confirm password">Confirm Password:</label>
            <input type="password" class="form-control" id="con-pass" placeholder="Confirm password" name="con-pass">
        </div>

        <!-- Role -->
        <div class="mb-3 mt-3 text-start">
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="guest">Guest</option>
                <option value="user">User</option>
            </select>
        </div>
        <!-- file upload -->
        <div class="mb-3 mt-3 text-start">
            <label for="picture">Picture:</label>
            <input type="file" name="picture" id="picture" value="Upload">
        </div>

        <!-- Remember me and Submit -->
        <div class="mb-3 mt-3 text-end">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
            <input type="submit" class="btn btn-dark" id="submit" name="submit">
            <input type="hidden" name="action" value="register">
        </div>

        <!-- Log in -->
        <div class="mb-3 mt-3 text-end">
            <label for="user">Adready have account</label>
            <a href="login.php"> <input class="btn btn-dark" type="button" value="Log in"></a>
            <input type="hidden" name="action" value="register">
        </div>

    </form>
    <!--form end-->
</div>
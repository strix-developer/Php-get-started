
<!--Log in-->
<div class="container col-sm-6 mt-3 bg-info p-2">
    <h2 class=" bg-info text-white rounded-pill img-thumbnail text-center">Please Log in</h2>
    <!--Log in form Started-->
    <form action="" method="POST">

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
        <input class="btn btn-dark" type="submit" value="Login">
        <input type="hidden" name="action" value="header">
        <a class="btn btn-dark" href="signup.php">Sign up</a></li>
        <input type="hidden" name="action" value="header">
        <br>
    </form>
</div>

</body>

</html>
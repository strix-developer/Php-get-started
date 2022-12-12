<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration | php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>

<body>
    <div>
        
    
        <form action="action.php" method="post">
            <div class="container">
                <div class="row">
                <div class="col-sm-3">
                <h2>User Registration</h2>
                <p>Add your details.</p>
                <hr class="mb-3">
                <label for="firstname"><b>firstname</b></label>
                <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" >

                <label for="lastname"><b>lastname</b></label>
                <input class="form-control" type="text" name="lastname" placeholder="Enter your last name" >

                <label for="email"><b>Email Address</b></label>
                <input class="form-control" type="email" name="email" placeholder="Enter your Email" >

                <label for="password"><b>password</b></label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password" >

                <label for="confirm password"><b>confirm password</b></label>
                <input class="form-control" type="password" name="confirm password"placeholder="Confirm your password" >
                
                <hr class="mb-3">
                <input class="btn btn-primary" type="submit" name="create" value="sign up">
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php 


?>
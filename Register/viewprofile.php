<?php
session_start();
require __DIR__ . "/Bootsstrap/App.php";
require file_header();
?>

<body>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="images/profile.png" alt="avatar" class="rounded-circle img-fluid">
                            <h4 class="my-3">Your Profile <?Php echo $_SESSION['name']; ?></h4>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-outline-dark ms-1">Follow</button>
                                <button type="button" class="btn btn-outline-dark ms-1">Message</button>
                                <a href="dashboard.php" class="btn btn-outline-dark ms-1">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <?php $users = json_decode(file_get_contents(__DIR__ . "/database/profile.json"), true);
                    foreach ($users as $_POST);
                    ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_SESSION['name']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Last Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"> <?Php echo $_SESSION['lastname']; ?> </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_SESSION['email']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_SESSION['number']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_SESSION['pswd']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Age</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST["age"]; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Aadhar</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST['aadhar']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST['address']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">PAN Card</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST['pancard']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">City</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST['city']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Zip-code</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST['zipcode']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Country</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_POST['country']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Role</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_SESSION['role']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?Php echo $_SESSION['ID']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
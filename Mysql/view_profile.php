<?php
session_start();
?>
 <!-- Start-->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Header page</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

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
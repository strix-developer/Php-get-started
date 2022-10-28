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
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center">
            <div class="col-sm-4">
                <a class="navbar-brand" href="#">
                    <img src="images/pngwing.com.png" alt="Logo" style="width:50px;" class="rounded-pill">
                </a>
                <a class="navbar-brand" href="#">Himanshu Thakur</a>
            </div>
            <div class="col-sm-4 ">
                <ul class="nav nav-tabs  ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservation</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">

                <a href="signup.php"> <button class="btn btn-light" type="Submit">Sign up</button></a>

            </div>
        </nav>
    </header>
    <?php
    require('content.php');
    require('footer.php');
    ?>
</body>

</html>
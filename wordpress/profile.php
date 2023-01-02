<?php
session_start();
include('dasheader.php');
?>

<div class="container bg-light p-3 mt-5">
    <form action="insert_adduser.php" method="POST" enctype="multipart/form-data">
        <h3>Profile</h3>
        <h5>Personal Options</h5>

        <div class="form-group row mt-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="username" name="username">
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="staticEmail" name="email" mailto:value="email@example.com">
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="lasst_name" name="last_name">
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="website" class="col-sm-2 col-form-label">Website</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="website" name="website">
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>

        <!--For Role field-->
        <div class="form-group row mt-3">
            <label for="role" class="col-sm-2  col-form-lable">Role</label>
            <div class="col-sm-6">
                <select id="role" name="role">
                    <option value="subscriber">Subscriber</option>
                    <option value="contributor">Contributor</option>
                    <option value="author">Author</option>
                    <option value="editor">Editor</option>
                    <option value="administrator">Administrator</option>
                </select>
            </div>
        </div>

        <!--For Adding New Users field-->
        <div class="form-group mt-5">
            <button type="submit" class="btn btn-light col-sm-2" name="submit">Update</button>
        </div>

        <!--For Dashboard return-->
        <div class="form-group mt-3">
            <a href="dashboard.php">
                <button type="button" class="btn btn-light col-sm-2" name="">Home Page</button>
            </a>
        </div>

    </form>
</div>
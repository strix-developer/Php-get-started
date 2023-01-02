<?php
session_start();
include("dasheader.php");
?>

<div class="container col-sm-3 bg-light p-3 mt-5">
    <form action="#" method="POST" enctype="multipart/form-data">
        <!--For Title field-->
        <div class="mb-3 mt-3 text-start">
            <input type="text" class="form-control" id="title" placeholder="Add Title" name="title">
        </div>

        <!--For Post field-->
        <div class="mb-3 mt-3 text-start">
            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Add Post"></textarea>
        </div>

        <!--div for file upload-->
        <div class="form-group mb-3 mt-3 text-start">
            <input type="file" name="image" id="image">
        </div>

        <!--For Submit field-->
        <div class="mb-3 mt-5 text-end">
            <button type="submit" class="btn btn-light" name="submit">Publish</button>
        </div>
    </form>
</div>
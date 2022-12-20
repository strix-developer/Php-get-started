<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>First page</title>
</head>

<body>
    <div class="col-lg-12">
        <img src="images/w-logo-blue.png" alt="avatar" class="rounded-circle img-fluid mx-auto d-block ">
        <form action="detail.php" class="col-sm-6 mx-auto d-block">
            <label for="sel1" class="form-label">Select langauge:</label>
            <select multiple class="form-select" id="sel2" name="sellist2">
                <option>English (United State)</option>
                <option>Hindi</option>
                <option>English (Australia)</option>
                <option>English (Canada)</option>
                <option>English (New Zealand)</option>
                <option>English (South Africa)</option>
                <option>English (UK)</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3" lang="en">Submit</button>
        </form>
    </div>
</body>

</html>
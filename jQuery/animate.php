<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #mydiv{
            height: 100px;
            width: 100px;
            background-color: gray;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="mydiv">This is my div</div>
    <script>
        $(document).ready(function() {
            $("#mydiv").click(function(){
            $(this).animate({
                opacity: 1,
                width: "500px",
                height: "200px"
            }, 2000);
        });
        });
    </script>
</body>

</html>
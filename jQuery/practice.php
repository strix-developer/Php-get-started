<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Practice</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: auto;
            width: 100%;
        }

        .div_one {
            width: auto;
            height: auto;
            border-radius: 2px;
            border-color: greenyellow;
            float: left;
        }

        .btn {
            float: left;
        }

        .div_two {
            float: left;
        }
    </style>
</head>

<body>
    <div class="btn">
        <button id="hide">Hide</button>
        <button id="show">Show</button>
    </div>

    <div class="div_one">
        <h2>jQuery</h2>

        <p>This is a jQuery paragraph.</p>
        <p id="para_two">This is another jQuery paragraph.</p>
    </div>


    <div class="div_two" style="height: 100px; width: 100px; background-color:aquamarine">Div_Two</div>

    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $(".div_one").hide();
            });
            $("#show").click(function() {
                $(".div_one").show();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.div_two').click(function() {
                var div = $(".div_two");
                div.animate({
                    height: '200px'
                }, 'slow');
                div.animate({
                    width: '200px'
                }, 'slow');
                div.animate({
                    fontSize: '3em'
                }, 'slow');
            });
        });
    </script>

</body>

</html>
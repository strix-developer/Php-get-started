<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $("#fade").click(function() {
                $(".eleven").fadeToggle();
                $(".twelve").fadeToggle("slow");
                $(".thirteen").fadeToggle(3000);

            });
        });
    </script>
    <style>
        .container {
            height: auto;
            width: auto;
          
        }

        .fade {
            float: left;
            margin-left: 200px;
        }

        .eleven {
            float: left;
            margin-left: 20px;
            text-align: center;
        }

        .twelve {
            float: left;
            margin-left: 20px;
            text-align: center;
        }

        .thirteen {
            float: left;
            margin-left: 20px;
            text-align: center;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <button id="fade">FadeIn & FadeOut</button><br><br>
        <div class="eleven" style="height:100px; width:100px; display:none; background-color:aqua"></div>
        <div class="twelve" style="height:100px; width:100px; display:none; background-color:blue"></div>
        <div class="thirteen" style="height:100px; width:100px; display:none; background-color:brown"></div>
    </div>
</body>

</html>
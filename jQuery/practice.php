<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Practice</title>
    <script
     src="https://code.jquery.com/jquery-3.6.3.min.js"
     integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
     crossorigin="anonymous">
    </script>
    <script>
     $(document).ready(function(){
     $("button").click(function(){
     $("#para_two").hide();
     });
     });
    </script>
</head>
<body>
    
<h2>jQuery</h2>

<p>This is a jQuery paragraph.</p>
<p id="para_two">This is another jQuery paragraph.</p>

<button>Click me to hide paragraphs</button>

</body>
</html>
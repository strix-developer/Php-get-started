<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Practice</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
     $(document).ready(function(){
     $("button").click(function(){
     $("p").hide();
     });
     });
    </script>
</head>
<body>
    
<h2>jQuery</h2>

<p>This is a jQuery paragraph.</p>
<p>This is another jQuery paragraph.</p>

<button>Click me to hide paragraphs</button>

</body>
</html>
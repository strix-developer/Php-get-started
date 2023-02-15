<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>

</head>
<body>
<ul>
  <li class="list-item">List 1</li>
  <li class="list-item">List 2</li>
  <li class="list-item">List 3</li>
</ul>

<ul class="hidden">
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>

<ul class="hidden">
  <li>Item A</li>
  <li>Item B</li>
  <li>Item C</li>
</ul>

<ul class="hidden">
  <li>Element 1</li>
  <li>Element 2</li>
  <li>Element 3</li>
</ul>

<script>
    $(document).ready(function(){
  $('.list-item').click(function(){
    $('.hidden').hide();
    $(this).next().show();
  });
});

</script>
</body>
</html>
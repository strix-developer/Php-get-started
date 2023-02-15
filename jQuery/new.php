<!DOCTYPE html>
<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>
    </head>
<body>

<h2>What Can Do This</h2>

<p>light</p>

<p>changes the value of the attribute of an image.</p>

<button onclick="document.getElementById('myImage').src='images/pic_bulbon.gif'">Turn on the light</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px">

<button onclick="document.getElementById('myImage').src='images/pic_bulboff.gif'">Turn off the light</button>

<h1>What Can JavaScript Do?</h1>

<a id="admin">JavaScript can hide HTML elements.</a>
<button type="button" onclick="document.getElementById('admin').style.cssText = 'display: block; background: black;color: red; font-size:30px; width:50%; padding:10px 20px; ' ">Click Me!</button>
<div class="inner">
<h1 id="h1_2">heading</h1>
<p>this is the paragraph </p>
<a href="#">mmm</a>

</div>

<script>
$(document).ready(function(){
$("#h1_2").click(function(){
$("p").toggle();
});
});
</script>
	
</body>
</html>
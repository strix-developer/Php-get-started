<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr1 = $emailErr1 = $genderErr1 = $websiteErr1 = "";
$name1 = $email1 = $gender1 = $comment1 = $website1 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name1"])) {
$nameErr1 = "Name1 is required";
}else {
$name1 = test_input($_POST["name1"]);
}
if (empty($_POST["email1"])) {
$emailErr1 = "Email1 is required";
}else {
$email1 = test_input($_POST["email1"]);
if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
$emailErr1 = "Invalid email1 format";
}
}
if (empty($_POST["website1"])) {
$website1 = "";
}else {
$website1 = test_input($_POST["website1"]);
}
if (empty($_POST["comment1"])) {
$comment1 = "";
}else {
$comment1 = test_input($_POST["comment1"]);
}
if (empty($_POST["gender1"])) {
$genderErr1 = "Gender1 is required";
}else {
$gender1 = test_input($_POST["gender1"]);
}
}
function test_input($data1) {
$data1 = trim($data1);
$data1 = stripslashes($data1);
$data1 = htmlspecialchars($data1);
return $data1;
}
?>
<h2>Absolute classes registration ::</h2>
<p><span class = "error">* required field.</span></p>
<form method = "post" action = "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td>Name1:</td>
<td><input type = "text" name = "name1">
<span class = "error">* <?php echo $nameErr1;?></span>
</td>
</tr>
<tr>
<td>E-mail1: </td>
<td><input type = "text" name = "email1">
<span class = "error">* <?php echo $emailErr1;?></span>
</td>
</tr>
<tr>
<td>Time1:</td>
<td> <input type = "text" name = "website1">
<span class = "error"><?php echo $websiteErr1;?></span>
</td>
</tr>
<tr>
<td>Classes1:</td>
<td> <textarea name = "comment1" rows = "5" cols = "40"></textarea></td>
</tr>
<tr>
<td>Gender1:</td>
<td>
<input type = "radio" name = "gender1" value = "female">Female
<input type = "radio" name = "gender1" value = "male">Male
<span class = "error">* <?php echo $genderErr1;?></span>
</td>
</tr>
<td>
<input type = "submit" name = "submit1" value = "Submit">
</td>
</table>
</form>
<?php
echo "<h2>Your given values are as:</h2>";
echo $name1;
echo "<br>";
echo $email1;
echo "<br>";
echo $website1;
echo "<br>";
echo $comment1;
echo "<br>";
echo $gender1;
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 48px;
  height: 150px;
  margin-right: 8px;
}

.switch input {
  display: none;
}

.slider {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  border-radius: 24px;
  transition: background-color 0.2s ease-in-out;
}

.slider:before {
  position: absolute;
  content: "";
  height: 50px;
  width: 50px;
  left: 0px;
  bottom: 0px;
  background-color: #fff;
  border-radius: 50%;
  transition: transform 0.2s ease-in-out;
}

input:checked + .slider {
  background-color: #87CEFA;
}

input:checked + .slider:before {
  transform: translateY(-100px);
}

.slider:focus {
  outline: none;
  box-shadow: 0 0 2px #87CEFA;
}



    </style>
</head>
<body>
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>


</body>
</html>
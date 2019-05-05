<?php

require('../partials/nav.php');

 ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
  margin-left: 25%;
  margin-right: 25%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  color: #079992;
  clear: both;
}
.settings{
 width: 50%;
 margin: auto auto;
}

input[type=submit] {
  background-color: #079992;
  color: white;
  padding: 15px 25px;
  border: none;
  border-radius: 4px;
  opacity: 0.5;
  transition: 0.3s;
  margin-left: 44%;
  margin-top: 10%;



}

</style>
</head>
<body>
<div class="settings">
  <div>
    <h2>Settings</h2>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Change your name</h2>
    <p>Click "Edit" to make your profile name different</p>
    <input type="submit" value="Edit">
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Change your picture</h2>
    <p>Click "Edit" to make your profile picture different</p>
    <input type="submit" value="Edit">
  </div>
</div>
<button class="submit"</button>

</body>
</html>

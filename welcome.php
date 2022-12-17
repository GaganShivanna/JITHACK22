<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HEY THERE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
      </label>
      <label class="logo">E-LIBRARY</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="file:///C:/Users/gagan/OneDrive/Desktop/abt.html#">About</a></li>
        <li><a href="file:///C:/Users/gagan/OneDrive/Desktop/test.html">Test</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
  </body>
</html>
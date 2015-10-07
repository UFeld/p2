
 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

 <!DOCTYPE html>

<html>

<head>

<title>XKCD Password Generator App</title>

<?php require 'AppLogic.php'; ?>

<link rel="stylesheet" type="text/css" href="./formatting.css"  />

</head>

<body>

<div class = "typedFormatting">
<!--Desciption of App -->

<h1>Last XKCD Password Generator!</h1>

<h2>This application was built as the 2nd Project submission for the Harvard Extension School's "CSCI E-15 Dynamic Web Applications" Fall semester class.<br><br><br>
    This project focused on building a web application that acted as a password generator, similar to one featured in the comic XKCD.  Users have the ability to specify the number of words they want as part of their password, and if they want a number and special character included as well.<br><br><br>
    <a href="http://xkcd.com/">XKCD</a> is an internet comic strip created by Randall Munroe starting in 2005.<br><br><br>

</h2>

<!--XKCD comic image -->

 <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="XKCD.com">


<!--Form Code -->

<br>
<br>
<form method='POST' action='index.php'>
<input type='text' name='numberOfWords'>Number of words?<br>
<br>
<input type='checkbox' name='numberPW' value='number' unchecked>Yes, include a number<br>
<br>
<input type='checkbox' name='numberSPChar' value='specialCharacter'  unchecked>Yes, include a special character<br>
<br>
<input type='submit' value='Get your XKCD Password!' ><br>
</form>



</div>
</body>

</html>

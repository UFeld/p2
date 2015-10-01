
 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

 <!DOCTYPE html>

<html>

<head>

<title>XKCD Password Generator App</title>

<?php require 'Applogic.php'; ?>

<link rel="stylesheet" type="text/css" href="./formatting.css"  />

</head>

<body>

<div class = "typedFormatting">
<!--Desciption of App -->

<h1>Ipsum here be text!</h1>

<h2>WordsWordsWords</h2>

<!--XKCD comic image -->

 <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="XKCD.com">

<!--Password generated is displayed-->

<!--How many words to use -->

<br>

<form>
Number of words?<br>
<input type="text" name="numberOfWords">
</form>

<!--Checkbox for number -->
<!--Error check for overstuffing-->
<br>

<form>
<input type="checkbox" name="number" value="number" checked>Yes, include a number
</form>

<br>

<!--Checkbox for special character -->
<!--Error check for overstuffing-->

<form>
<input type="checkbox" name="number" value="specialCharacter" checked>Yes, include a special character
</form>

<!--Submit Button -->
<!--Final Checks-->


</div>
</body>

</html>

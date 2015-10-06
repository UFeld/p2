
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
<br>
<form method='POST' action='AppLogic.php'>
<input type='text' name='numberOfWords'>Number of words?<br>
<br>
<input type='checkbox' name='numberPW' value='number' unchecked>Yes, include a number<br>
<br>
<input type='checkbox' name='numberSPChar' value='specialCharacter'  unchecked>Yes, include a special character<br>
<br>
<input type='submit' value='Get your XKCD Password!'><br>
</form>

<!--Final Checks-->
<?php

//echo $_POST['numberOfWords'];

//print_r($_POST);
/*
If (isset($_POST['numberOfWords'])){

  echo $_POST['numberOfWords'];

};
*/

?>

</div>
</body>

</html>


<?php
	session_start();
?>



<?php

echo "<img src='script-captchas.php' alt='captchas' />";


 
if (!empty($_POST["cap"])) {
    echo "<br>Code de sécurité doit contenir uen valeur !";    
}else{  
    echo "<br>Pas de valeur !!";
}
echo $_SESSION["code"];
// var_dump($_POST);
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
</head> 
    <body>


<form action="index.php" method="post" >
  <input type="text" name="cap">
  <br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>

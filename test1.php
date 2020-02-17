<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle2.css">

</head>
<body>
<?php if(!isset($_POST["btn"]))
  {
?>
<form method="post" action="test1.php">
  <label for="InputDatefin">Entrer Date fin :</label>
  <input type="date" class="form-control" id="InputDatefin" name="InputDatefin">
  <button type="submit"  name="btn">Ajouter project</button>
</form>
<?php
}
else {echo $_POST["InputDatefin"];}
?>


</body>
</html>

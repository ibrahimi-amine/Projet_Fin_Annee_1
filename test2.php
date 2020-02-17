<?php
$budgetfonct1=array();
$totalbudget1=0.00;
include('connectbdd.php');
$reponse21=$bd->prepare('SELECT * FROM Budget_Trancheprojet where id_projet=?');
$reponse21->execute(array($_SESSION["idprojet"]));
while(!empty($donnee21=$reponse21->fetch()))
     {$budgetfonct1[$donnee21["id_budgetprojet"]]=$donnee21["montant_totalbudget"];
      $totalbudget1+=$donnee21["montant_totalbudget"];}
$dataPoints1 = array();
foreach($budgetfonct1 as $cle1 => $element1)
        {$dataPoints1[]=array("label"=>$cle1, "y"=>($element1/$totalbudget1)*100);}
//
$budgetfonct=array();
$totalbudget=0.00;
include('connectbdd.php');
$reponse2=$bd->prepare('SELECT * FROM Budget_Fonctionnelle where id_projet=?');
$reponse2->execute(array($_SESSION["idprojet"]));
while(!empty($donnee2=$reponse2->fetch()))
     {$budgetfonct[$donnee2["id_budgetfonct"]]=$donnee2["montant_budgetfonct"];
      $totalbudget+=$donnee2["montant_budgetfonct"];}
$dataPoints = array();
foreach($budgetfonct as $cle => $element)
        {$dataPoints[]=array("label"=>$cle, "y"=>($element/$totalbudget)*100);}
//
$budgetfonct1=array();
$totalbudget1=0.00;
include('connectbdd.php');
$reponse21=$bd->prepare('SELECT * FROM Budget_Trancheprojet where id_projet=?');
$reponse21->execute(array($_SESSION["idprojet"]));
while(!empty($donnee21=$reponse21->fetch()))
     {$budgetfonct1[$donnee21["id_budgetprojet"]]=$donnee21["montant_totalbudget"];
      $totalbudget1+=$donnee21["montant_totalbudget"];}
$dataPoints1 = array();
foreach($budgetfonct1 as $cle1 => $element1)
        {$dataPoints1[]=array("label"=>$cle1, "y"=>($element1/$totalbudget1)*100);}
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
  var chart1 = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  title: {
    text: "Budget du projet <?php echo $_SESSION["projet"];?>"
  },
  data: [{
    type: "pie",
    yValueFormatString: "#,##0.00\"%\"",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
  }]
});
var chart2 = new CanvasJS.Chart("chartContainer2", {
animationEnabled: true,
title: {
  text: "Budget fonctionnelle du projet <?php echo $_SESSION["projet"];?>"
},
data: [{
  type: "pie",
  yValueFormatString: "#,##0.00\"%\"",
  indexLabel: "{label} ({y})",
  dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
}]
});
chart1.render();
chart2.render();

}
</script>
</head>
<body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>

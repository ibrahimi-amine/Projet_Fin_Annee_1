    <?php
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

?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function() {
      var chart = new CanvasJS.Chart("chartContainer2", {
    	animationEnabled: true,
    	title: {
    		text: "Budget fonctionnelle"
    	},
    	data: [{
    		type: "pie",
    		yValueFormatString: "#,##0.00\"%\"",
    		indexLabel: "{label} ({y})",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();

    }
    </script>
    </head>
    <body>
    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRÁFICO de BARRAS</title>
</head>
<body>
    


<?php
    $dados = [200,30,250,56,45,50];
    $mes = ['jan','fev','mar','abr','mai','jun'];
    $arrTamanho = count($dados);
?>

<div id="top_x_div" style="width: 900px; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Meses', '$'],
          <?php
            for($i=0;$i<$arrTamanho;$i++){
                ?>
                    ["<?=$mes[$i];?>", <?=$dados[$i];?>],
                <?php
            }
          ?>
        ]);

        var options = {
          title: 'vendas',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'vendas',
                   subtitle: 'quantidade de vendas por mes' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'lucro($)'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center;">TEST</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">GRAFIK BUAH BUAHAN</div>
    <div class="panel-body">
        <div id="bar-chart"></div>
    </div>
  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(function(){
        Highcharts.chart('bar-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'TEST IPANG'
            },
            xAxis: {
                categories: <?= $xxx ?>,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Marks'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key} Marks</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: <?= $data ?>
        });
    });
</script>

</body>
</html>
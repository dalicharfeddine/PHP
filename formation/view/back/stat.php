<?php 

include_once '../../config.php';
include_once '../../controller/formationC.php';
session_start();

$formation=new formationC();
$prod=$formation->afficherformations();



//$connection= mysqli_connect('localhost','root','','gestionstock');
//$result=mysqli_query($connection,"SELECT*FROM produit")

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([ //selon id les tat sur les prix et le type le plus demandée
                ['Nom', 'positive'],

                <?php
foreach ($prod as $row) {
                   // if(mysqli_num_rows($result)> 0){

                     //   while($row = mysqli_fetch_array($result)){

                            echo "['".$row['Nom']."', '".$row['positive']."'],";

                    //    }


                    }
                    



                ?>

            ]);
            var options = {
                chart: {
                    title: 'Statistique Produit',
                    subtitle: ' Statisques selon id_produit,Nom_produit et prix ',
                    width: 5000,
                    height: 2500
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

</head>
<body>

<div id="columnchart_material"></div>


</body>
</html>
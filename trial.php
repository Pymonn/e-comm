<?php
include_once 'includes/conn.php';
?>


<!-- 
<script type="text/javascript" src="js/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Total Percentage'],
            <?php
            $sql = "SELECT  ac.ac_name, count(*) cnt
                FROM `assets` i
                    JOIN asset_cat ac
                      ON i.ac_id = ac.ac_id
                        group by i.ac_id;";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {

                echo "['" . $row['ac_name'] . "', " . $row['cnt'] . "],";
            }
            ?>
        ]);

        var options = {
            title: 'My Daily Activities',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>
<div id="donutchart" style="width: 900px; height: 500px;"></div> -->
<!-- 
<html>
  <head>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['Category', 'Total Percentage'],
            <?php
            $sql = "SELECT  ac.ac_name, count(*) cnt
                FROM `assets` i
                    JOIN asset_cat ac
                      ON i.ac_id = ac.ac_id
                        group by i.ac_id;";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {

                echo "['" . $row['ac_name'] . "', " . $row['cnt'] . "],";
            }
            ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Chess opening moves',
            subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "100%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div class="container-fluid" id="top_x_div"></div>
  </body>
</html> -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Category", "Total Assets", { role: "style" } ],
        <?php
            $sql = "SELECT  ac.ac_name, count(*) cnt
                FROM `assets` i
                    JOIN asset_cat ac
                      ON i.ac_id = ac.ac_id
                        group by i.ac_id;";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {

                echo "['" . $row['ac_name'] . "', " . $row['cnt'] . ", 'red'],";
            }
            ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px; border: black;"></div>

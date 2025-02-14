<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tram";

  $connect = new mysqli($servername, $username, $password, $dbname);
  if($connect->connect_error){
    die("Connection error: ".$connect->connect_error);
  }
?>

<html>
<head>
  <title>MU-Tram Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/toggleStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/search.css" />
  <link rel="stylesheet" type="text/css" href="css/Tramstyle.css" />
  <link rel="stylesheet" type="text/css" href="css/putTramStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/LogInForm.css" />
  <link rel="stylesheet" type="text/css" href="css/locationStyle.css" />

<!-- Art so good already -->

</head>
<body>
  <!-- MenuFile -->
  <?php include 'menubar.php';?>

    <div id="backpage">
      <div id="MapBox">
        <h1 class="center" id="banner">Location</h1>
        <table style="width: 100%">
          <tr>
            <td class="center">
              <div id="image-box">
                <?php
                echo '<img id="location-image" src="image/DSCF4176-73.jpg">';
                ?>
              </div>
            </td>
          </tr>
        </table>

      </div>
      <div id="stationBox">
        <p style="color: black; font-size: 25px">Stations</p>
        <?php
          $sql = "SELECT stationID, stationName FROM stations";
          $dbStation = $connect->query($sql);
          if($dbStation->num_rows > 0){
            while($row = $dbStation->fetch_assoc()){
              echo '<div class="stationinLine" id="station-image'.$row["stationID"].'"><a href="#" style="width: 100%">'.$row["stationID"].').'.$row["stationName"].'</a></div>';
            }
          }
          else{
            echo "0 results";
          }
        ?>
      </div>
    </div>

  <?php include 'credit.php';?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="javascript/TramjQuery.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/toggleScript.js"></script>
  <script src="javascript/TramScript.js"></script>
  <script src="javascript/location.js"></script>
</body>
</html>

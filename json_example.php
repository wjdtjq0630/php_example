<?php
  $jsonData = file_get_contents("./example.json");
  $json = json_decode($jsonData,true);

  echo $json['Peter']['age'];
  echo '<br>'.$json['James']['age'];
 ?>

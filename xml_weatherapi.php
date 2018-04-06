<?php
  $url = "http://www.weather.go.kr/weather/forecast/mid-term-rss3.jsp?stnId=109";
  $result = file_get_contents($url);
  $xml = simplexml_load_string($result);

  // for($k=0;$k<35;$k++){
  //   $city = $xml->channel->item->description->body->location[$k];
  //   $name = $city->city;
  //   if($k%5==0){
  //     echo "<a href='#id{$k}'>{$name}</a><br>";
  //   } else{
  //       echo "<a href='#id{$k}'>{$name}</a> ";
  //   }
  // }

  for($i=0;$i<35;$i++){
    $city = $xml->channel->item->description->body->location[$i];
    $name = $city->city;

    if($i==0){
      echo "<h2 name='id{$i}'>$name</h2>";
    } else{
      echo '<br><h2>'.$name.'</h2>';
    }

    for($j=0;$j<12;$j++){
      $data = $city->data[$j];
      $wf = $data->wf;
      $time = $data->tmEf;
      $tmn = $data->tmn;
      $tmx = $data->tmx;

      if($j==0){
        echo $time.'<br><b>'.$wf.'</b><br>';
      }else{
        echo '<br>'.$time.'<br><b>'.$wf.'</b><br>';
      }
      echo "<b>{$tmn}°C/{$tmx}°C</b><br>";
    }
  }

 ?>

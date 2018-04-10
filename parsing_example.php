<?php
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://www.naver.com");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  $html = $result;

  $pos1 = strpos($html, '<h3 class="blind">실시간 급상승 검색어</h3>');
  $pos2 = strpos($html, '<span class="ah_ico_open"></span>');

  $html = substr($html,$pos1,$pos2-$pos1);

  for($i=0; $i<20; $i++){
    $pos1 = strpos($html,'<span class="ah_k">')+strlen('<span class="ah_k">');
    $html = substr($html,$pos1,strlen($html)-$pos1);

    $pos = strpos($html,'</span>');
    $rank = substr($html,0,$pos);
    echo $rank;

 ?>

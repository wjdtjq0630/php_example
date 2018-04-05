<?php
  $members = array('제니','지수','로제','리사');
  $albums = array('마지막처럼','붐바야','불장난','휘파람');

  $xml = new SimpleXMLElement('<idol/>');
  $xml->addChild('name','Blackpink');

  foreach($members as $member){
    $xml->addChild('member',$member);
  }

  foreach($albums as $album){
    $xml->addChild('album',$album);
  }

  header('Content-type: text/xml charset=utf-8');
  print($xml->asXML());
 ?>

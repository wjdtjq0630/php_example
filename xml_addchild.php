<?php
  $members = array('제니','지수','로제','리사');
  $albums = array('마지막처럼','붐바야','불장난','휘파람');

  $xml = new SimpleXMLElement('<idol/>');

  $xml->addChild('name','Blackpink');

  $members_num = sizeof($members);
  foreach($members as $member){
    $xml->addChild('members',$member);
  }
  $albums_num = sizeof($albums);
  foreach($albums as $album){
    $xml->addChild('albums',$album);
  }

  Header('Content-type: text/xml');
  print($xml->asXML());
 ?>

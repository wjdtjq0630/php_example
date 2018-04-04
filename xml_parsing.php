<?php
  $xmlData =
  "<?xml version='1.0' encoding='UTF-8'?>
  <example>
  <note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
  </note>
  <note>
  <to>Flora</to>
  <from>Peter</from>
  <heading>header</heading>
  <body>Don't forget me next weekend!</body>
  </note></example>";
  $xml = simplexml_load_string($xmlData) or die("Error: Cannot create object");
  $from2 = $xml->note[1]->from;
  $body2 = $xml->note[1]->body;
  echo $from2.'<br>';
  echo $body2.'<br>';

  $from1 = $xml->note[0]->from;
  $body1 = $xml->note[0]->body;
  echo $from1.'<br>';
  echo $body1.'<br>';

 ?>

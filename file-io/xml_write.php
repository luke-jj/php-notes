<?php

$file = 'data/xml/newxml.xml';

if ($xml = simplexml_load_file($file)) {
  $item = $xml->channel->addChild('item');
  $item=>addChild()
}

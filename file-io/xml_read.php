<?php

echo '<pre>';
echo htmlspecialchars(file_get_contents('data/xml/educate_yourself.xml'));
echo '</pre>';


$files = array();

// add filepaths from a web uri
$files[] = 'http://simplecast.com/podcasts/279/rss';
$dir = 'data/xml';

// add filepaths from the local filesystem
if ($fh = opendir($dir)) {
  while (($entry = readdir($fh)) !== false) {
    if (substr($entry, 0, 1) != '.') {
      $files[] = $dir .  '/' . $entry;
    }
  }
  closedir($fh);
}

// display files and parse as xml
if (!empty($files)) {
  foreach ($files as $file) {
    $xml = simplexml_load_file($file);

    echo "<h2>{$xml->channel->title}</h2>";
    echo "<p>{$xml->channel->link}</p>";
  }
}

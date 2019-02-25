<?php

if (($fh = fopen('data/csv/people.csv', 'r')) !== false) {

  # fgetcsv reads one row of a csv file as array
  $header = fgetcsv($fh);
  print_r($header);
  echo "<br>\n<br>\n";

  while (($contact = fgetcsv($fh)) !== false) {
    echo "first name: $contact[0]<br>\n";
    echo "last name: $contact[1]<br>\n";
    echo "website: $contact[2]<br>\n";
    echo "twitter: $contact[3]<br>\n";
    echo "image: $contact[4]<br>\n";
    echo "<br>\n";
    echo "<br>\n";
  }

  fclose($fh);
}

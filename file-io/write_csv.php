<?php
function write_new_row_to_csv($first, $last, $website, $twitter, $img) {
  $new_person = [
    $first,
    $last,
    $website,
    $twitter,
    $img
  ];

  if (($fh = fopen('../data/csv/people.csv', 'a+')) !== false) {

    # check if the file ends in a new line; append a newline if not
    fseek($fh, -1, SEEK_END);
    if (fgets($fh) != PHP_EOL) {
      fputs($fh, PHP_EOL);
    }

    fputcsv($fh, $new_person);
    fclose($fh);
  }
}

<?php

$new_book = [
  'title' => filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING),
  'author_name' => filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING)
];


$file = 'data/json/top_programming_books.json';
$books = json_decode(file_get_contents($file));

if (is_object($books->collection->books[0])) {
  $books->collection->books[] = $new_book;
}


$json = json_encode($books, JSON_PRETTY_PRINT, JSON_UNESCAPED_SLASHES);

echo '<pre>' . $json . '</pre>';

file_put_contents($file, $json);

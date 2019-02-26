<?php
$books = json_decode(file_get_contents('data/json/top_programming_books.json'));

if (is_object($books->collection->books[0])) {
  foreach($books->collection->books as $book) {
    echo "<h1>{$book->title}</h1>";
    echo "<p>Author: {$book->author_name}";
    echo "<p>Publishing Date: {$book->book_published}";
    echo "<div><img src='{$book->book_image_url}' alt='book cover'></div>";
    echo "<a href='{$book->link}'>Goodreads Link</a>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Basic php site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <title>PHP-Test</title>
  </head>
  <body>
    <h1>PHP test</h1>

    <p>this is a php test</p>

    <form method="POST" action="newpage.php">
      <label for="first_name">First Name: </label>
      <input id="first" name="first_name" type="text">
      <label for="last_name">Last Name: </label>
      <input id="last" name="last_name" type="text">
      <button type="submit">submit</button>
    </form>



    <?php
      echo "Hi from PHP.<br>";    # '\n' only creates newlines in source code

      echo "<ul>";
      $counter =  0;
      for ( ; $counter < 10; $counter) {
        echo "<li>$counter</li>";
        $counter += 1;
      }
      echo "</ul>";


      echo <<<EOT
  <ul>
    <li>One</li>
    <li>Two</li>
    <li>Three</li>
  </ul>
EOT;

    ?>
  </body>
</html>

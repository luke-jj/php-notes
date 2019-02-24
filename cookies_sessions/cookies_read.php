<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>read cookies</title>
  </head>
  <body>
    <?php
      if (isset($_COOKIE["name"]) && isset($_COOKIE["color"])) {
        echo "Cookies have been set!<br>\n";
        echo "Name: " . htmlspecialchars($_COOKIE["name"]) . "<br>\n";
        echo "Color: " . htmlspecialchars($_COOKIE["color"]) . "<br>\n";
      } else {
        echo "no cookies have been set.";
      }

    ?>
  </body>
</html>

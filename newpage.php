<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>New Page</title>
  </head>

  <body>
    <h1>New Page</h1>
    <p>This is a new page</p>

    <?php
      # if (isset ($_POST['last_name'])) {
        echo "{$_POST['first_name']} {$_POST['last_name']}";
      # }
    ?>
  </body>
</html>

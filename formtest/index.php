<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form test</title>
  </head>
  <body>
    <!-- Processing a form in another script -->
    <h2>Processing form in another script</h2>
    <form action="processing.php" method="get">
      <label for="first_name">First name:</label>
      <input type="text" name="first_name">

      <label for="last_name">Last name:</label>
      <input type="text" name="last_name">

      <label for="phone">Phone:</label>
      <input type="tel" name="phone">

      <label for="email">Email:</label>
      <input type="email" name="email">

      <button type="submit">send</button>
    </form>
    <br>

    <!-- Processing a form in the same script -->
    <h2>Processing form in the same script (prevent form print)</h2>
    <?php
      # prevent the form from being printed when data is already submitted
      if (!(isset($_GET["first_name"]) && isset($_GET["last_name"]))) {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
      <label for="first_name">First name:</label>
      <input type="text" name="first_name">

      <label for="last_name">Last name:</label>
      <input type="text" name="last_name">

      <button type="submit">send</button>
    </form>
    <?php
      } else {
      # if (isset($_GET["first_name"]) && isset($_GET["last_name"])) {
        echo htmlspecialchars($_GET['first_name']) . "<br>\n";
        echo htmlspecialchars($_GET['last_name']) . "<br>\n";
      }
    ?>

    <h2>Processing form in the same script (show input values)</h2>
    <?php
    if (isset($_GET["first_name"]) && isset($_GET["last_name"])) {
      $first_name = htmlspecialchars($_GET["first_name"]);
      $last_name = htmlspecialchars($_GET["last_name"]);
    } else {
      $first_name = "";
      $last_name = "";
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
      <label for="first_name">First name:</label>
      <input type="text" name="first_name" value="<?php echo $first_name;?>">

      <label for="last_name">Last name:</label>
      <input type="text" name="last_name" value="<?php echo $last_name;?>">

      <button type="submit">send</button>
      <?php
      if (isset($_GET["first_name"]) && isset($_GET["last_name"])) {
        echo "<br>\n";
        echo htmlspecialchars($_GET['first_name']) . "<br>\n";
        echo htmlspecialchars($_GET['last_name']) . "<br>\n";
      }
      ?>
    </form>
  </body>
</html>

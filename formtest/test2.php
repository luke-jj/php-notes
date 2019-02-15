<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Additional form elements</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    <!-- Hidden field - to transmit additional information -->
    <input type="hidden" name="id" value="123">

    <!-- Radio buttons -->
    <input type="radio" name="title" id="Mrs" value="Mrs" checked="checked">
    <label for="Mrs">Mrs.</label><br>
    <input type="radio" name="title" id="Ms" value="Ms" checked="checked">
    <label for="Ms">Ms.</label><br>
    <input type="radio" name="title" id="Mr" value="Mr" checked="checked">
    <label for="Ms">Mr.</label><br>

    <!-- Text -->
    <label for="name">Name</label>
    <input type="text" name="name"><br>

    <!-- Checkboxes -->
    <!-- name="[]type" brackets are required or only the last checked item will be available -->
    <input type="checkbox" id="beginner" name="level[]" value="beginner">
    <label for="beginner">Beginner</label>
    <input type="checkbox" id="intermediate" name="level[]" value="intermediate">
    <label for="intermediate">Intermediate</label>
    <input type="checkbox" id="advanced" name="level[]" value="advanced">
    <label for="advanced">Advanced</label><br>

    <!-- Drop-down list -->
    <select name="topic">
      <option value="HTML">HTML</option>
      <option value="CSS">CSS</option>
      <option value="JavaScript">JavaScript</option>
      <option value="PHP">PHP</option>
    </select><br>

    <!-- Textarea -->
    <textarea name="comment" rows="3" cols="20"></textarea><br>

    <!-- Submit button -->
    <button type="submit">Send</button>
  </form>


  <?php
    if (!empty($_GET["name"])) {
      echo "<br>Your inputs:<br>\n";

      if (!empty($_GET["title"])) {
        echo htmlspecialchars($_GET["title"]);
      }
      echo " " . htmlspecialchars($_GET["name"]) . "<br>\n";

      if (!empty($_GET["topic"])) {
        echo " " . htmlspecialchars($_GET["topic"]) . "<br>\n";
      }

      if (!empty($_GET["comment"])) {
        echo "Your comment: " . nl2br(htmlspecialchars($_GET["comment"])) . "<br>";
      }

      if (isset($_GET["level"]) && is_array($_GET["level"])) {
        // foreach ($_GET["level"] as $level) {
        //   echo htmlspecialchars($level) . "<br>\n";
        // }
        $levels = implode(" ", $_GET["level"]);
        echo htmlspecialchars($levels);
      }
    }
  ?>
</body>
</html>

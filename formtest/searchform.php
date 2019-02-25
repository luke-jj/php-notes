<?php
function search_function($search = null) {
  try {
    $db = new PDO("sqlite:".__DIR__."/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo "Unable to connect to the database.\n";
    echo $e->getMessage();
    exit;
  }

  try {
    $sql = "SELECT * FROM media";
    if (!empty($search)) {
      $result = $db->prepare($sql . " WHERE title LIKE ?");
      $result->bindValue(1,'%'.$search.'%',PDO::PARAM_STR);
      $result->execute();
    }
  } catch (Exception $e) {
    echo "bad query";
    exit;
  }

  return $result->fetchAll();
}

$search = null;

if (isset($_GET['search'])) {
  $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $search_results = search_function($search);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Seach From Example</title>
</head>
<body>
  <div class="search">
  <form method="get" action="searchform.php">
    <label for="search">Search:</label>
    <input type="text" name="search" id="search" />
    <button type="submit">Go</button>
  </form>
  </div>

  <div id="search results">
    <?php
      if (isset($search_results)) {
        foreach ($search_results as $item) {
          echo "<p>{$item[0]}, {$item[1]} etc.";
        }
      }
    ?>
  </div>
</body>
</html>

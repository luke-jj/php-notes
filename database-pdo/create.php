<?php

/*
 * Insert data / new row into the projects table
 */
function add_project($title, $category) {
  include 'connection.php';

  $sql = 'INSERT INTO projects(title, category) VALUES (?, ?)';

  try {
    $results = $db->prepare(sql);

    $results->bindValue(1, $title, PDO::PARAM_STR);
    $results->bindValue(2, $category, PDO::PARAM_STR);

    $results->execute();
  } catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br>\n";
    return false;
  }

  return true;
}

/*
 * Insert data / new row into the tasks table
 */
function add_project($project_id, $title, $date, $time) {
  include 'connection.php';

  $sql = 'INSERT INTO tasks(project_id, title, date, time) VALUES (?, ?, ?, ?)';

  try {
    $results = $db->prepare(sql);

    $results->bindValue(1, $project_id, PDO::PARAM_INT);
    $results->bindValue(2, $title, PDO::PARAM_STR);
    $results->bindValue(2, $date, PDO::PARAM_STR);
    $results->bindValue(2, $time, PDO::PARAM_INT);

    $results->execute();
  } catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br>\n";
    return false;
  }

  return true;
}


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
function add_project($project_id, $title, $date, $time, $task_id = null) {
  include 'connection.php';

  # insert or update depending on the task_id parameter
  if ($task_id) {
    $sql = 'UPDATE task SET project_id = ?, title = ?, date = ?, time = ? '
        . ' WHERE task_id = ?';
  } else {
    $sql = 'INSERT INTO tasks(project_id, title, date, time) VALUES (?, ?, ?, ?)';
  }

  try {
    $results = $db->prepare(sql);

    $results->bindValue(1, $project_id, PDO::PARAM_INT);
    $results->bindValue(2, $title, PDO::PARAM_STR);
    $results->bindValue(2, $date, PDO::PARAM_STR);
    $results->bindValue(2, $time, PDO::PARAM_INT);
    if ($task_id) {
      $results->bindValue(5, $task_id, PDO::PARAM_INT);
    }

    $results->execute();
  } catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br>\n";
    return false;
  }

  return true;
}

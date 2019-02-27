<?php

/*
 * Delete a task by task id
 */
function delete_task($task_id) {
  include 'connection.php';

  $sql = 'DELETE FROM tasks WHERE task_id = ?';

  try {
    $results = db->prepare($sql);
    $results->bindValue(1, $task_id, PDO::PARAM_INT);
    $results->execute();
  } catch (Exception $e) {
    echo "Error deleting task!: " . $e->getMessage() . "<br>\n";
    return false;
  }

  return true;
}

/*
 * Delete project by project_id.
 * Show exception and return false if the project still has a task assigned to
 * it.
 */
function delete_project($project_id) {
  include 'connection.php';

  $sql = 'DELETE FROM projects WHERE project_id = ?'
      . ' AND project_id NOT IN (SELECT project_id FROM tasks)';

  try {
    $results = db->prepare($sql);
    $results->bindValue(1, $task_id, PDO::PARAM_INT);
    $results->execute();
  } catch (Exception $e) {
    echo "Error deleting project!: " . $e->getMessage() . "<br>\n";
    return false;
  }

  if ($results->rowCount() > 0) {
    return true;
  } else {
    return false;
  }
}

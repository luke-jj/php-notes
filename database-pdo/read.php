<?php

/*
 * Read data from the projects table.
 */
function get_projects() {
  include 'connection.php';

  try {
    return $db->query('SELECT * FROM projects');
  } catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br>\n";
    return array();
  }
}

/*
 * Read data from both the tasks and projects table to get a combined task list.
 */
function get_task_list() {
  include 'connection.php';

  $sql = 'SELECT * FROM tasks'
       . 'JOIN projects ON tasks.project_id = projects.project_id';

  try {
    return $db->query($sql);
  } catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br>\n";
    return array();
  }
}

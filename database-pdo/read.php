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

/*
 * Select four random items/rows from the media table
 */
function get_random_items() {
  include 'connection.php';

  try {
    $results = $db->query(
      "SELECT media_id, title, category, img
      FROM media
      ORDER BY RAND()
      LIMIT 4"
    );
  } catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
  }
}

/*
 * Pagination Function:
 * SELECT given number of items and offset them depending on parameter
 */
function get_page_items($limit = null, $offset = 0) {
  include 'connection.php';

  $items_per_page = 8;

  try {
    $sql = "SELECT media_id, title, category, img
    FROM media
    ORDER BY title";

    if (is_integer($limit)) {
      $results = $db->prepare($sql . "LIMIT ? OFFSET ?");
      $results->bindParam(1, $limit, PDO::PARAM_INT);
      $results->bindParam(2, $offset, PDO::PARAM_INT);
    } else {
      $results = $db->prepare($sql);
    }

    $results->execute();
  } catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
  }

  return $results->fetchAll();
}

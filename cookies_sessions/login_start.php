<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login System with Sessions</title>
</head>
<body>
  <?php
  if (isset($_GET['f'])) {
    echo "<p>Login data incorrect</p>";
  }
  ?>
  <form method="post" action="login_validation.php">
    <p>
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" size="20">
    </p>
    <p>
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" size="20">
    </p>
    <button type="submit">Login</button>
  </form>
</body>
</html>

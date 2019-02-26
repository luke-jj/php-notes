<?php
function getUser($username) {
    include __DIR__ . '/connection.php';
    try {
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(1,$username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        throw $e;
    }
}
function getPassword($username) {
    $user = getUser($username);
    return $user['password'];
}
function saveUser($username, $password) {
    include __DIR__ . '/connection.php';
    if (getUser($username)) {
        $query = "UPDATE Users SET password=:password WHERE username=:username";
    } else {
        $query = "INSERT INTO Users (username, password) VALUES (:username, :password)";
    }
    try {
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    } catch (\Exception $e) {
        throw $e;
    }
}
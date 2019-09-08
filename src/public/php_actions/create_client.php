<?php
session_start();
require_once 'db_connection.php';

function clear_input($input) {
  $clean_input = pg_escape_string($input);
  $clean_input = htmlspecialchars($clean_input);

  return $clean_input;
}

$name = clear_input($_POST['name']);
$last_name = clear_input($_POST['last_name']);
$email = clear_input($_POST['email']);
$birth_date = clear_input($_POST['birth_date']);

$sql = "INSERT INTO clients (name, last_name, email, birth_date) VALUES ('$name', '$last_name', '$email', '$birth_date')";
$result = pg_query($connect, $sql);

if ($result) {
  $_SESSION['message'] = 'Registered successfully :)';
  header('Location: ../index.php');
} else {
  $_SESSION['message'] = 'Failed to register :(';
  header('Location: ../index.php');
}
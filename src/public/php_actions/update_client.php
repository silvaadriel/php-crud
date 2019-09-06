<?php
session_start();
require_once 'db_connection.php';

$id = pg_escape_string($_POST['id']);
$name = pg_escape_string($_POST['name']);
$last_name = pg_escape_string($_POST['last_name']);
$email = pg_escape_string($_POST['email']);
$birth_date = pg_escape_string($_POST['birth_date']);

$sql = "UPDATE clients SET name = '$name', last_name = '$last_name', email = '$email', birth_date = '$birth_date' WHERE id = '$id'";
$result = pg_query($connect, $sql);

if ($result) {
  $_SESSION['message'] = 'Successfully updated :)';
  header('Location: ../index.php');
} else {
  $_SESSION['message'] = 'Failed to update :(';
  header('Location: ../index.php');
}
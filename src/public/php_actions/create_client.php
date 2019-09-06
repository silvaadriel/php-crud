<?php
session_start();
require_once 'db_connection.php';

$name = pg_escape_string($_POST['name']);
$last_name = pg_escape_string($_POST['last_name']);
$email = pg_escape_string($_POST['email']);
$birth_date = pg_escape_string($_POST['birth_date']);

$sql = "INSERT INTO clients (name, last_name, email, birth_date) VALUES ('$name', '$last_name', '$email', '$birth_date')";
$result = pg_query($connect, $sql);

if ($result) {
  $_SESSION['message'] = 'Registered successfully :)';
  header('Location: ../index.php');
} else {
  $_SESSION['message'] = 'Failed to register :(';
  header('Location: ../index.php');
}
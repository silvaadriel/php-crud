<?php
session_start();
require_once 'db_connection.php';

$id = pg_escape_string($_POST['id']);

$sql = "DELETE FROM clients WHERE id = '$id'";
$result = pg_query($connect, $sql);

if ($result) {
  $_SESSION['message'] = 'Successfully deleted :)';
  header('Location: ../index.php');
} else {
  $_SESSION['message'] = 'Failed to delete :(';
  header('Location: ../index.php');
}
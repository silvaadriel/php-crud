<?php
$connection_string = "host=postgres port=5432 dbname=crud user=postgres password=postgres";
$connect = pg_connect($connection_string);

$connection_status = pg_connection_status($connect);

if ($connection_status !== 0) {
  echo "Connection error";
}

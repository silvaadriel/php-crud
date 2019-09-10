<?php
function clear_input($input) {
  $clean_input = pg_escape_string($input);
  $clean_input = htmlspecialchars($clean_input);

  return $clean_input;
}
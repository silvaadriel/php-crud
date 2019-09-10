<?php
function calculate_age($date) {
  list($year, $month, $day) = explode('-', $date);

  $today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

  $birth = mktime( 0, 0, 0, $month, $day, $year);

  $age = floor((((($today - $birth) / 60) / 60) / 24) / 365.25);

  return $age;
}
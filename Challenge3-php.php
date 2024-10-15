<?php
$Titles = [
  'Saint-Yves' => 1897,
  "L'ile au trésor" => 1883,
  'La Flèche noire' => 1888
];
asort($Titles);
foreach ($Titles as $key => $title) {
  echo ($title . ' ' . '-' . ' ' . $key);?><br>
  <?php
}
?>
<?php
echo "<br>";

$gpa = array("Meder"=>"3.69", "Tariel"=>"3.4", "Sanzhar"=>"3.12", "Jyrgalbek" => "2.99");

foreach ($gpa as $key => $value) {
  if($gpa[$key] >= 3.5){
    echo "GPA of <b> $key </b> high from 3.5, so you will get 1600som scholarship<br><br>";
  } else if($gpa[$key] >= 3.0){
    echo "GPA of <b> $key </b> high from 3.0, so you will get 1300som scholarship<br><br>";
  } else {
    echo "<b> $key </b> unfortunately, you don't get any scholarship!<br><br>";
  }
}
?>

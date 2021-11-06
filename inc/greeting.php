<?php
$h = date("H");

if ($h < "12"){
  echo "Top o' tha mornin' to ya!";
}
elseif ($h < "17"){
  echo "Good evening. How do you do?";
}
elseif ($h < "23"){
  echo "Ooooweeee! That was a crazy day!";
}
?>

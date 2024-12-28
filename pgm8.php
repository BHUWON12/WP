<?php
$days = [0 => "pink", 1 => "yellow", 2 => "brown", 3 => "green", 4 => "gray", 5 => "red", 6 => "orange"];
$color = $days[date('w')] ?? '#FFFFFF';
echo '<body style="background-color:'.$color.'">';
?>

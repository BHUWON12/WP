<?php
$array=array("apple", "banana", "cherry", "date", "elderberry", "fig", "grape");
$search_value=$_POST["search_value"];
if(in_array($search_value, $array)) {
echo "Value '$search_value' was found in the array.";
} else {
echo "Value '$search_value' was not found in the array.";
}
?>
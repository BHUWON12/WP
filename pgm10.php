<?php
function removedup($list){
    return array_values(array_unique($list));
}
$sortedlist=[1,2,2,3,4,5,5,6,7,8,8];
$uniquelist= removedup($sortedlist);
echo'oreginal list:'.implode(',',$sortedlist).'<br>';
echo'uniquelist:'.implode(',',$uniquelist);
?>
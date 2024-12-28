<?php
echo "Prime Number";
$count=0;
$num=2;
while($count<15)
{
$div_count=0;
for($i=1;$i<=$num;$i++)
{
if(($num%$i)==0)
{
$div_count++;
}
}
if($div_count<3)
{
echo $num." , ";
$count=$count+1;
}
$num=$num+1;
}
echo "<br>Fibonacci Series";
$num1=0;
$num2=1;
echo $num1 . ' ' . $num2 . ' ';
for ($i=2;$i<10;$i++) {
$num3=$num1 + $num2;
echo $num3 . ' ';
$num1=$num2;
$num2=$num3;
}
?>
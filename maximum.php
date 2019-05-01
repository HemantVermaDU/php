<?php
function maximum($a,$b,$c)
{
if($a>$b && $a>$c)
{
	echo $a;
}
elseif($b>$a && $b>$c)
{
	echo $b;
}
else
{
	echo $c;
}}
echo "Maximum Number is ";
echo maximum(17,166,15);
?>

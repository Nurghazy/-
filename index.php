<?php
/*=========*/
$a=2;
$b=7;
if($a>2 && $a<11 || $b>6 && $b<14)
{
    echo "True ";
}
else
{
     echo "False ";
    }


echo $a+$b, "<br>";
/*=========*/
$month = -11;
if($month <= 2 && $month == 12 && $month>0)
{
	echo "Zima" , "<br>";
}

elseif($month <= 5 && $month >=3 )
{
	echo "Vesna" , "<br>";
}
elseif($month <= 8 && $month >=6 )
{
	echo "Leto" , "<br>";
}
elseif($month <= 11 && $month >=9 )
{
	echo "Osen" , "<br>";
}
else
{
	echo "error","<br>";
}
/*======*/
echo "halo", "<br>";
/*======*/
$arr = [24, 47, 6, 13, 5, 89];
$result = ($arr[6] - $arr[2]) + ($arr[1] - $arr[4]) + ($arr[2] - $arr[3]);
echo $result;
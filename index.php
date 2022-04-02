<?php
/*=========*/
$a=2;
$b=4;
if($a>2 && $a<11)
{
    echo "True ";
}
else
{
     echo "False ";
    }

if($b>6 && $b<14)
{
    echo "True ";
}
else
{
     echo "False ";
    }

echo $a+$b, "<br>";
/*=========*/
$month = 6;
if($month <= 2 || $month == 12)
{
	echo "Zima" , "<br>";
}
if($month <= 5 && $month >=3 )
{
	echo "Vesna" , "<br>";
}
if($month <= 8 && $month >=6 )
{
	echo "Leto" , "<br>";
}
if($month <= 11 && $month >=9 )
{
	echo "Osen" , "<br>";
}
/*======*/
echo "halo", "<br>";
/*======*/
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
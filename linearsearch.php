<?php

//function of linear search
function linearSearch($arr, $length, $number)
{
        for($i = 0;$i <$length; $i++)
        {
        if($arr[$i] == $number)
        {
        return $i;
        break;
        }
        }
        return 0;
}


$arr = array(90,100,89,45,78,30,15,78,96,85,1,2,3,88);
$number = 88;
$length = count($arr);
$position = linearSearch($arr, $length, $number);

//conditional statement

if($position == 0)
{
    echo "<p style='color:red;'>Number is not found</p>";
}
else
{
    echo "<h2 style='color:green;'>Number $number is found at ".$position." position</h2>";
}
?>
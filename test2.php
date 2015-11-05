<?php
$boxmode = "Sigelei 150w TC";
if($boxmode == "Sigelei 150w TС")
{
    echo "<br>Топовый вариват на данный момент '$boxmode'<br>";// если условие верно то нам вывелась информация
}
else
{
    echo "$boxmode слишком дорог в данный момент!";
}


echo "<br>";

$price = 10;
$count = 10;

if($price > $count || $price < $count)

{
    echo "Цена больше количества";
}
else
{
    echo "Цена меньше количества";
}
    
?>
<?php 
dd($totals);

?>

foreach($totals as $total)
{
    echo $i . ' ' . $total->id;
    $i++;
}
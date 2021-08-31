<?php
$sumIncome_1 = $_POST['sum_1'];
$summAdd = $_POST['sum_2'];
$daysn = $_POST['daysn'];
$percent = 0.1;
$daysy = $_POST['daysy'];
$isAdd = $_POST['isAdd'] == 'true';
$summn_1 = $sumIncome_1 + ($isAdd ? $summAdd : 0);
$summn = $sumIncome_1 + $summn_1 * $daysn * ($percent/$daysy);

echo(json_encode($summn));
?>
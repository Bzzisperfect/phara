<meta charset="utf-8">
<?php
$str="5 минут назад я кодил с ананимусом вместе 5 минут назад я слил код в гитхаб всего 5 минут назад.";
$from="windows-1251";
$to="iso8859-5";
echo convert_cyr_string($str, $from, $to);
echo "</br>";
echo "</br>";
$number=880055353535;
echo sprintf("%01.0f<br>",$number);
echo "</br>";
echo "</br>";
$st="Проще позвонить чем у кого то занимать";
$string=nl2br($st);
echo $string;
echo "</br>";
echo "</br>";
$kozlova="5 минут назад я кодил с ананимусом вместе 5 минут назад я слил код в гитхаб всего 5 минут назад.";
$suzi=5;
$otvertsie="<br>\n";
echo wordwrap($kozlova,$suzi,$otvertsie);
?>
</br>
</br>
<?php 
$tools=array(
	"a"=>"Zero",
    "b"=>"Weapon",
    "c"=>"Alpha",
    "d"=>"Processor"
	);
asort($tools);
$tools=array_reverse($tools);
print_r($tools);
?>
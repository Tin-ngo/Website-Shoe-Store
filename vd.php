<!DOCTYPE html>
<html>
<body>

<?php
echo "Ngày: date('Y-m-d')";
echo "<br>Giờ: date('h:i:sa')<br>";
echo "vd: ".date("h:i:sa");
echo "<br><br>";
echo "Hôm nay<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br><br>";


echo "Ngày mai<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>Tuần sau<br>";
$d=strtotime("+1 week");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br> 3 tháng sau<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>
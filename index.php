 <!DOCTYPE html>
<html>
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Harjutus-4</title>
</head>

<body> 
  <h1>Andmetüübid (3)</h1>
 <h2>Booleans</h2>
<?php 
$result1 = true;
$result2 = false;
$result3 = 5;
 ?>
<?php echo $result1;?> <br>
<?php echo $result2;?> <br>
<?php echo "Result1:" . $result1; ?><br>
<?php echo "Result2:" . $result2; ?><br>
<?php echo "Result3:" . $result3; ?><br>
<?php echo "Kas result1 on boolean?" . is_bool($result1); ?><br>
<?php echo "Kas result2 on boolean?" . is_bool($result2); ?><br>
<?php echo "Kas result3 on boolean?" . is_bool($result3); ?><br>

<h2>Andmetüüpide olekud</h2>
<h3>NULL</h3>

<h2>NULL</h2>
<?php 
$var1 = null;
$var2 = "";
$var3 = 0;
 ?>
<?php echo "Kas var1 on NULL?" . is_null($var1); ?><br>
<?php echo "Kas var2 on NULL?" . is_null($var2); ?><br>
<?php echo "Kas var3 on NULL?" . is_null($var3); ?><br>
<?php echo "Kas var4 on NULL?" . is_null($var4); ?><br>

<h3>Set</h3>
<?php echo "Kas var1 on väärtustatud?" . isset($var1); ?><br>
<?php echo "Kas var2 on väärtustatud?" . isset($var2); ?><br>
<?php echo "Kas var3 on väärtustatud?" . isset($var3); ?><br>
<?php echo "Kas var4 on väärtustatud?" . isset($var4); ?><br>

</body>
</html> 

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
<br>

<?php 
$var1 = "";
$var2 = "0";
$var3 = 0;
$var4 = 0.0;
$var5 = array();
$var6 = NULL;
$var7 = false;
 ?>
<?php echo "Kas var1 on empty?" . empty($var1); ?><br>
<?php echo "Kas var2 on empty?" . empty($var2); ?><br>
<?php echo "Kas var3 on empty?" . empty($var3); ?><br>
<?php echo "Kas var4 on empty?" . empty($var4); ?><br>
<?php echo "Kas var5 on empty?" . empty($var5); ?><br>
<?php echo "Kas var6 on empty?" . empty($var6); ?><br>
<?php echo "Kas var7 on empty?" . empty($var7); ?><br>

<h2>Andmetüübi teisendamine</h2>

<?php $count = 2; ?>

<?php echo gettype($count);  ?><br>
<?php echo $count; ?><br><br>

<?php settype($count, "string"); ?>
<?php echo gettype($count);?><br>
<?php echo $count ;?><br><br>

<?php settype($count, "double"); ?>
<?php echo gettype($count);?><br>
<?php echo $count ;?><br><br>

<?php settype($count, "array"); ?>
<?php echo gettype($count);?> <br>
<pre><?php echo print_r($count); ?></pre> <br>
<?php settype($count, "boolean"); ?>
<?php echo $count;?> <br>
<?php echo gettype($count);?> <br>

<h2>Konstandid</h2>

<?php define("MAX_WIDTH", 980); ?>
<?php echo MAX_WIDTH; ?> <br>
<?php define("MAX_WITDH", 500); ?>
<?php echo MAX_WIDTH; ?> <br>

</body>
</html> 

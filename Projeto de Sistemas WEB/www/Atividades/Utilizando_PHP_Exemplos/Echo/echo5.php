<html>
<body>

<h1>My first PHP page</h1>

<?php
 
	$a = 1;
	$b = &$a;
	$c = 10;
 
 echo "$a <br>";
 echo $b;
?>

</body>
</html>
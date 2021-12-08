<html>
<head><title>Shamuratov Damir</title></head>
</html>
<?php
$n=22;
echo 'Ischodniy: <br />';
for($i = 0; $i < $n; $i++) {
$a[$i] = rand(-10, 10);
echo $a[$i].'&nbsp';
};
require('functions.php');
function2($a);
?>
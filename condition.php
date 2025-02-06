<?php
// Number of rows for the pattern
$rows = 5;


for ($i = 1; $i <= $rows; $i++) {
   
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    
    echo "\n";
}

echo "<br>";
echo "\n";

$row1 = 5;
for($i=5; $i>=0;$i--)
{
    for($j=1;$j<=$i;$j++)
    {
       echo "*";
    }
    echo "\n";
}
 
?>
<?php
// Array of fruits
$fruits = ["Apple", "Banana", "Orange", "Mango", "Grapes"];


foreach ($fruits as $fruit) {
    echo $fruit . "\n"; 
}
?>


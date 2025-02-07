<?php
function greet($name) {
    return "Hello, $name!";
}

function callUserFunction($callback, $name) {
    echo $callback($name); // Calls the function passed as a parameter
}

callUserFunction("greet", "NEHAL");
?>


<?php
function square($num) {
    return $num * $num;
}

$numbers = [1, 2, 3, 4];
$squaredNumbers = array_map("square", $numbers);

print_r($squaredNumbers);
?>



<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

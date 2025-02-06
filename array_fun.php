
<?php 
//count 
$arr = [10, 20, 30, 40];
echo count($arr); 
echo "\n";


//push
$arr = [1, 2, 3];
array_push($arr, 4, 5);
print_r($arr);
echo "\n";

//pop
$arr = [1, 4,3,2];
array_pop($arr); 
print_r($arr); 
echo "\n";

//shift
$arr = [10, 1, 4,3];
echo array_shift($arr); 
print_r($arr); 
echo "\n";

//unshift
$arr = [2, 3, 4];
array_unshift($arr, 0, 1);
print_r($arr); 
echo "\n";

//merge
$a = [1, 2, 3];
$b = [4, 5, 6];
$result = array_merge($a, $b);
print_r($result);
echo "\n";

//combine
$keys = ["name", "age", "city"];
$values = ["Nehal", 21, "New York"];
$result = array_combine($keys, $values);
print_r($result);
echo "\n";

//array key 
$arr = ["name" => "nehal", "age" => 21, "city" => "New York"];
print_r(array_keys($arr));
echo "\n";

//array value
$arr = ["name" => "NEHAL", "age" => 21, "city" => "New York"];
print_r(array_values($arr));
echo "\n";


//array_search 
$arr = ["a" => 10, "b" => 20, "c" => 30];
echo array_search(20, $arr); 
echo "\n";

//found or  not array
$arr = [10, 20, 30];
echo in_array(20, $arr) ? "Found" : "Not Found"; 
echo "\n";

//array_rev
$arr = [1, 2, 3, 4];
print_r(array_reverse($arr)); 
echo "\n";

//array_slice

$arr = [10, 20, 30, 40, 50];
print_r(array_slice($arr, 1, 3)); 
echo "\n";

//array_ssplice replace the value with a new value
$arr = [10, 20, 30, 40, 50];
array_splice($arr, 1, 2, [100, 200]);
print_r($arr);
echo "\n";


//unique array remove the duplicate array form the arraylist
$arr = [10, 20, 30, 20, 40, 30];
print_r(array_unique($arr)); 
echo "\n";

//sort_array
$arr = [30, 10, 50, 20];
sort($arr);
print_r($arr); 
echo "\n";

//resort in desecnding 
$arr = [30, 10, 50, 20];
rsort($arr);
print_r($arr); 
echo "\n";

//asort Sorts an associative array in ascending order (values only).
$arr = ["a" => 30, "b" => 10, "c" => 50];
asort($arr);
print_r($arr); 
echo "\n";

//kSorts an associative array by keys in ascending order.
$arr = ["c" => 30, "a" => 10, "b" => 50];
ksort($arr);
print_r($arr); 
echo "\n";

//assoicated array
$arr = ["name" => "NEHAL", "age" => 21];
print_r($arr);

echo "\n";

$arr = [10, "Hello", 5.5];

echo "Using print_r:\n";
print_r($arr);
echo "\n";

echo "\nUsing var_dump:\n";
var_dump($arr);

echo "\n";

$user = [
    "name" => "Nehu",
    "age" => 25,
    "city" => "New York"
];

print_r($user);
echo "\n";



//access in associated array
echo $user["name"];
echo "\n";
echo $user["city"]; 

foreach ($user as $key => $value) {
    echo "$key: $value\n";
}























?>




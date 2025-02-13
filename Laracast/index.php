
<?php
  require 'function.php';

//   require 'router.php';

  //connect to our mysqll database.
  
  $dsn = "mysql:host=localhost;port=3306;dbname=demo;user=root;charset=utf8mb4";

// Tip: This should be wrapped in a try-catch. We'll learn how, soon.
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}




?>

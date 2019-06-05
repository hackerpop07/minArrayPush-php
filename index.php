<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = [];
    }
    array_push($_SESSION['data'], $_POST['input']);
}
$array = $_SESSION['data'];
$min = $array[0];
foreach ($array as $value) {
    if ($value < $min) {
        $min = $value;
    }
}
var_dump($array);
echo "<br>", "Min: ", $min;
?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input name="input" placeholder="number">
    <input type="submit" value="submit">

</form>
</body>
</html>

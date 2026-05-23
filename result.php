<!-- result.php -->
<?php

$lang = "ru";

if (!empty($_GET['lang'])) {
    $lang = $_GET['lang'];
}

if (
    empty($_GET['name']) ||
    empty($_GET['email']) ||
    empty($_GET['age'])
) {

    if($lang == 'ru') {
        echo "<h1>Ничего не введено</h1>";
    } else {
        echo "<h1>Nothing entered</h1>";
    }

    exit();
}

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
$photo = $_GET['photo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Result</title>

</head>
<body>

<?php if($lang == 'ru') { ?>

<h1>Результат</h1>

<p>Имя: <?php echo $name; ?></p>

<p>Email: <?php echo $email; ?></p>

<p>Возраст: <?php echo $age; ?></p>

<?php } else { ?>

<h1>Result</h1>

<p>Name: <?php echo $name; ?></p>

<p>Email: <?php echo $email; ?></p>

<p>Age: <?php echo $age; ?></p>

<?php } ?>

<?php
if (!empty($photo)) {
    echo "<img src='$photo'>";
}
?>

<br><br>

<a href="index.php?lang=<?php echo $lang; ?>">
<?php
if($lang == 'ru') {
    echo "Назад";
} else {
    echo "Back";
}
?>
</a>

</body>
</html>
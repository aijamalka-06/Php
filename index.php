<!-- index.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['agree'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $lang = $_POST['lang'];

        $uploadFile = '';

        if (!empty($_FILES['photo']['name'])) {

            $folder = "uploads/";

            if (!file_exists($folder)) {
                mkdir($folder);
            }

            $uploadFile = $folder . basename($_FILES['photo']['name']);

            move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile);
        }

        header("Location: result.php?name=$name&email=$email&age=$age&photo=$uploadFile&lang=$lang");
        exit();

    } else {

        header("Location: result.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Form</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">

<?php
$lang = "ru";

if (!empty($_GET['lang'])) {
    $lang = $_GET['lang'];
}
?>

<select name="lang">
    <option value="ru">Русский</option>
    <option value="en">English</option>
</select>

<?php if($lang == 'ru') { ?>

<input type="text" name="name" placeholder="Введите имя">

<input type="email" name="email" placeholder="Введите email">

<select name="age">
    <option value="10">10-15</option>
    <option value="16">16-20</option>
    <option value="21">21-30</option>
    <option value="31">31-40</option>
    <option value="41">41-50</option>
</select>

<input type="file" name="photo">

<label>
<input type="checkbox" name="agree">
Я согласен
</label>

<button type="submit">Отправить</button>

<?php } else { ?>

<input type="text" name="name" placeholder="Enter name">

<input type="email" name="email" placeholder="Enter email">

<select name="age">
    <option value="10">10-15</option>
    <option value="16">16-20</option>
    <option value="21">21-30</option>
    <option value="31">31-40</option>
    <option value="41">41-50</option>
</select>

<input type="file" name="photo">

<label>
<input type="checkbox" name="agree">
I agree
</label>

<button type="submit">Submit</button>

<?php } ?>

</form>

</body>
</html>
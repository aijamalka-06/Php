<?php
$rows = 0;
$cols = 0;

if (isset($_POST['rows']) && isset($_POST['cols'])) {
    $rows = (int)$_POST['rows'];
    $cols = (int)$_POST['cols'];
}
?>

<form method="post">
    Строки: <input type="number" name="rows" min="1" required>
    Столбцы: <input type="number" name="cols" min="1" required>
    <input type="submit" value="Создать таблицу">
</form>

<?php
if ($rows > 0 && $cols > 0) {
    echo "<table style='border-collapse: collapse; margin-top:20px;'>";

    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {

            $sum = ($i + $j) % 2;

            switch ($sum) {
                case 0:
                    $color = "white";
                    break;
                case 1:
                    $color = "black";
                    break;
            }

            echo "<td style='width:40px;height:40px;
                  background:$color;
                  border:1px solid black;
                  " . ($i == 0 ? "border-top:5px solid purple;" : "") . "
                  " . ($j == 0 ? "border-left:5px solid blue;" : "") . "
                  '></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>
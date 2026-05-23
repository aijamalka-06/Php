<?php
echo "<h1>Работа со строками в PHP: Рысбекова Айка, ИСТ(б)-2-24</h1>";

echo "<b>1. explode — Разбиение строки в массив:</b><br>";
$fio = "Рысбекова Айжамал ИСТ";
$parts = explode(" ", $fio);
print_r($parts); echo "<br><br>";

echo "<b>2. implode / join — Объединение массива в строку:</b><br>";
$group_data = ["ИСТ", "б", "2", "24"];
echo implode("-", $group_data) . "<br><br>";

echo "<b>3. trim — Удаление пробелов по краям:</b><br>";
$spaced = "   Айка  ";
echo "'" . trim($spaced) . "'<br><br>";

echo "<b>4. rtrim — Удаление пробелов справа:</b><br>";
echo "'" . rtrim($spaced) . "'<br><br>";

echo "<b>5. ltrim — Удаление пробелов слева:</b><br>";
echo "'" . ltrim($spaced) . "'<br><br>";

echo "<b>6. md5 — Хеширование (MD5):</b><br>";
echo md5("Syida2026") . "<br><br>";

echo "<b>7. sha1 — Хеширование (SHA1):</b><br>";
echo sha1("Syida2026") . "<br><br>";

echo "<b>8. nl2br — Замена переноса строки на тег br:</b><br>";
echo nl2br("Айжамал\nИСТ\n2026") . "<br><br>";

echo "<b>9. str_replace — Замена подстроки (регистрозависимая):</b><br>";
$text = "Привет, Студент!";
echo str_replace("Студент", "Айка", $text) . "<br><br>";

echo "<b>10. str_ireplace — Замена подстроки (без учета регистра):</b><br>";
echo str_ireplace("СТУДЕНТ", "Айка", $text) . "<br><br>";

echo "<b>11. strip_tags — Удаление HTML тегов:</b><br>";
$html = "<b>Айка</b> <i>ИСТ</i>";
echo strip_tags($html) . "<br><br>";

echo "<b>12. strlen — Длина строки (байты):</b><br>";
echo strlen("Айка") . "<br><br>";

echo "<b>13. mb_strlen — Длина строки (символы, для кириллицы):</b><br>";
echo mb_strlen("Айка") . "<br><br>";

echo "<b>14. mb_strpos — Поиск позиции символа:</b><br>";
echo mb_strpos("Группа ИСТ", "ИСТ") . "<br><br>";

echo "<b>15. mb_strtolower — Преобразование в нижний регистр:</b><br>";
echo mb_strtolower("РЫСБЕК КЫЗЫ А") . "<br><br>";

echo "<b>16. mb_strtoupper — Преобразование в верхний регистр:</b><br>";
echo mb_strtoupper("ист(б)-2-24") . "<br><br>";

echo "<b>17. mb_substr — Вырезание части строки:</b><br>";
echo mb_substr("Рысбек кызы А", 0, 9) . "<br><br>";

echo "<b>18. htmlspecialchars — Преобразование спецсимволов в HTML-сущности:</b><br>";
$code = "<script>alert('Hello');</script>";
echo htmlspecialchars($code) . "<br><br>";

echo "<b>19. htmlspecialchars_decode — Обратное преобразование из сущностей:</b><br>";
$encoded = "&lt;b&gt;Сыйда&lt;/b&gt;";
echo htmlspecialchars_decode($encoded) . "<br><br>";

echo "<b>20. htmlentities — Преобразование всех возможных символов в сущности:</b><br>";
echo htmlentities("Айка & Ко") . "<br><br>";
?>

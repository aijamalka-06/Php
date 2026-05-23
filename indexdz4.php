<?php
include 'funk.php';

$info = ["Рысбекова", "Айжамал", "ИСТ"];
$group = ["Фамилия" => "Рысбек к", "Имя" => "Айжамал", "Группа" => "ИСТ(б)-2-24"];
$nums = [5, 1, 9, 3];

echo "<b>Студент:</b> Рысбек к А <br>";
echo "<b>Группа:</b> ИСТ(б)-2-24 <br><br>";

echo get_count($info) . "<br>";
echo get_array_diff($info, ["ИСТ"]) . "<br>";
echo get_array_intersect($info, ["Айжамал"]) . "<br>";
echo get_array_key_exists("Имя", $group) . "<br>";
echo get_array_keys($group) . "<br>";
echo get_array_values($group) . "<br>";
echo get_array_merge($info, ["2026"]) . "<br>";
echo get_array_rand($info) . "<br>";
echo get_array_reverse($info) . "<br>";
echo get_compact("Айжамал", "ИСТ(б)-2-24") . "<br>";
echo get_extract($group) . "<br>";
echo get_sorting($nums) . "<br>";
echo get_array_combine(["A", "B"], [1, 2]) . "<br>";
echo get_array_search("Айжамал", $info) . "<br>";
echo get_array_unique([1, 1, 2, 2]) . "<br>";
echo get_array_flip(["X" => 10]) . "<br>";
echo get_in_array("Айжамал", $info) . "<br>";
echo get_list(["КР", "Бишкек"]) . "<br>";
echo get_push_pop($info) . "<br>";
echo get_shift_unshift($info) . "<br>";

?>

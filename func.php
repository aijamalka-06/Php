<?php

function get_count($arr) {
    return "Количество элементов в массиве: " . count($arr);
}

function get_array_diff($arr1, $arr2) {
    $res = array_diff($arr1, $arr2);
    return "Разность массивов: " . implode(", ", $res);
}

function get_array_intersect($arr1, $arr2) {
    $res = array_intersect($arr1, $arr2);
    return "Пересечение массивов: " . implode(", ", $res);
}

function get_array_key_exists($key, $arr) {
    $res = array_key_exists($key, $arr) ? "найден" : "не найден";
    return "Проверка ключа '$key': " . $res;
}

function get_array_keys($arr) {
    return "Ключи массива: " . implode(", ", array_keys($arr));
}

function get_array_values($arr) {
    return "Значения массива: " . implode(", ", array_values($arr));
}

function get_array_merge($arr1, $arr2) {
    array_merge($arr1, $arr2);
    return "Метод array_merge: Массивы объединены.";
}

function get_array_rand($arr) {
    $key = array_rand($arr);
    return "Случайный элемент: " . $arr[$key];
}

function get_array_reverse($arr) {
    $res = array_reverse($arr);
    return "Разворот массива: " . implode(", ", $res);
}

function get_compact($name, $group) {
    compact("name", "group");
    return "Метод compact: Переменные упакованы.";
}

function get_extract($arr) {
    extract($arr);
    return "Метод extract: Данные распределены по переменным.";
}

function get_sorting($arr) {
    sort($arr);
    return "Метод sort: Массив отсортирован.";
}

function get_array_combine($k, $v) {
    array_combine($k, $v);
    return "Метод array_combine: Ключи и значения соединены.";
}

function get_array_search($val, $arr) {
    $key = array_search($val, $arr);
    return "Значение '$val' найдено на позиции: " . $key;
}

function get_array_unique($arr) {
    $res = array_unique($arr);
    return "Уникальные значения: " . implode(", ", $res);
}

function get_array_flip($arr) {
    array_flip($arr);
    return "Метод array_flip: Ключи и значения инвертированы.";
}

function get_in_array($val, $arr) {
    $res = in_array($val, $arr) ? "Да" : "Нет";
    return "Результат in_array для '$val': " . $res;
}

function get_list($arr) {
    list($a, $b) = $arr;
    return "Метод list: Извлечены '$a' и '$b'.";
}

function get_push_pop(&$arr) {
    array_push($arr, "test");
    array_pop($arr);
    return "Методы push/pop выполнены успешно.";
}

function get_shift_unshift(&$arr) {
    array_unshift($arr, "test");
    array_shift($arr);
    return "Методы shift/unshift выполнены успешно.";
}
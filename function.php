<?php

function t1($path): int
{
    return file_exists($path) ? 1 : 0;
}

function t2($path)
{
    return file_exists($path) ? filesize($path) : 0;
}

function t3($path): ?string
{
    if (is_dir($path)) {
        return "dir";
    } elseif (is_file($path)) {
        return "file";
    }
    return null;
}

function t4($path)
{
    return explode('.', basename($path));
}

function t5($path)
{
    // получает содержимое файла в строку
    $filename = $path;
    //открываем в режиме "r"
    $handle = fopen($filename, "r");
    //читаем
    $contents = fread($handle, filesize($filename));
    //закрываем
    fclose($handle);
    //возвращаем
    return $contents;
}

function t6($path, $str)
{
    $fp = fopen($path, 'w');
    fwrite($fp, $str);
    fclose($fp);
}

function t7($path, $str)
{
    $fp = fopen($path, 'a+');
    fwrite($fp,  PHP_EOL. $str);
    fclose($fp);
}

function t8($path)
{
// ПОЛУЧЕНИЕ СОДЕРЖИМОГО ПАПКИ

    if ($handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                echo "$entry"." — ";
                echo filesize($path.$entry).'<br>';
//                var_dump(filesize($path.$entry).'<br>');
            }
        }
        closedir($handle);
    }
}

function t9($path)
{
// ПОЛУЧЕНИЕ СОДЕРЖИМОГО ПАПКИ
    $allArr = [];
    if ($handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {

// Соединяем в одну строку путь, базовое имя файла, и размер файла.
// Далее разбиваем на элементы массива функцией explode() с сепаратором ".".
                $nested_array = explode(".", $path . $entry . '.' . filesize($path . $entry));
// Убираем пустой элемент из начала массива (то, что было до точки в строке пути к файлу)
                array_shift($nested_array);
// К значению первого элемента массива добавляем точку — в начало.
                $nested_array[0] = "." . $nested_array[0];
// Добавляем получившийся массив в качестве вложенного в главный массив $allArr.
                $allArr [] = $nested_array;
            }
        }
        closedir($handle);
        return $allArr;
    }
}

function t10($path)
{
if(file_exists($path)){
    return 0;
}else{
    $fp = fopen($path, 'w');
    fwrite($fp, 42);
    fclose($fp);
    return 1;
}
}
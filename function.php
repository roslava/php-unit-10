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

}

function t9($path)
{

}

function t10($path)
{

}
<?php require_once './function.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practics. Unit 10</title>
    <link rel="stylesheet" href="css/mustard-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Unit 10. Работа с файлами</h1>
    <h2><a href="https://itgid.info/course/php" target="_blank">PHP Практический. Stage 2 — курс Лущенко
            Александра</a></h2>
    <section>
        <p><b>Task 1.</b></p>
        <p>Создать функцию t1, которая принимает параметр - путь к файлу и проверяет, есть ли такой файл. Если да - возвращает 1, если нет - 0.</p>
        <?php
            echo '<pre>';
            echo(t1('./one/1.txt'));
            echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 2.</b></p>
        <p>Создать функцию t2, которая принимает параметр - путь к файлу и если файл существует - возвращает его размер. Если нет - 0.</p>
        <?php
        echo '<pre>';
        echo(t2('./one/1.txt'));
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 3.</b></p>
        <p>Создать функцию t3, принимает парамет - путь к файлу или папке. Если это папка то функция возвращет строку dir, если файл - file. Считаем, что переданный путь всегда существует.</p>
        <?php
        echo '<pre>';
        echo(t3('./one/1.txt'));
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 4.</b></p>
        <p>Создать функцию t4, которая принимает параметр - путь к файлу и возвращает массив, где нулевой элемент - имя файла, и 1-й элемент - расширение файла. Считаем, что переданный путь всегда существует.</p>
        <?php
        echo '<pre>';
        print_r (t4('./one/1.txt'));
        echo '</pre>';
        ?>
    </section>
    <section>
        <p><b>Task 5.</b></p>
        <p>Создать функцию t5, которая принимает параметр - путь к файлу и возвращает содержимое файла. Считаем, что переданный путь всегда существует.</p>
        <?php
        echo '<pre>';
        echo(t5('./one/1.txt'));
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 6.</b></p>
        <p>Создать функцию t6, которая принимает параметр - путь к файлу и текст. Функция должна записать текст в указанный файл. Считаем что файл существует. Запись производится таким образом, что стирает все предыдущее содержимое файла.</p>
        <?php
        echo '<pre>';
        t6('./one/2.txt', '98766789');
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 7.</b></p>
        <p>Создать функцию t7, которая принимает параметр - путь к файлу и текст. Функция должна записать текст в указанный файл. Считаем что файл существует. Запись производится таким образом, что добавляет новую строку к содержимому файла.</p>
        <?php
        echo '<pre>';
        t7('./one/3.txt', '98766789');
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 8.</b></p>
        <p>Создать функцию t8, которая принимает параметр - имя директории и рассчитывает и возвращает размер всех файлов в папке.</p>
        <?php
        echo '<pre>';
        echo(t8('./one/'));
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 9.</b></p>
        <p>Создать функцию t9, которая принимает параметр - имя папки и возвращет массив состоящий из вложенных массивов, нулевой элемент - полное имя файла, первый элемент - расширение, второй элемент - размер файла. </p>
        <?php
        echo '<pre>';
        var_dump(t9( './one/'));
        echo '</pre>';
        ?>
    </section>

    <section>
        <p><b>Task 10.</b></p>
        <p>Создать функцию t10, которая принимает параметр путь к файлу, проверяет существование файла и если файл существует возвращает 0, если нет - создает его и записывает в него число 42 и возвращает 1.</p>
        <p>Почему <a href="https://ru.wikipedia.org/wiki/%D0%9E%D1%82%D0%B2%D0%B5%D1%82_%D0%BD%D0%B0_%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D1%8B%D0%B9_%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81_%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8,_%D0%B2%D1%81%D0%B5%D0%BB%D0%B5%D0%BD%D0%BD%D0%BE%D0%B9_%D0%B8_%D0%B2%D1%81%D0%B5%D0%B3%D0%BE_%D1%82%D0%B0%D0%BA%D0%BE%D0%B3%D0%BE" target="_blank">42</a>?</p>
        <?php
        echo '<pre>';
        echo(t10('./one/4.txt'));
        echo '</pre>';
        ?>
    </section>
    

</div>
</body>
</html>

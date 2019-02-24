<?php
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
    $destiation_dir = 'img/'.$_FILES['inputfile']['name']; // Директория для размещения файла
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
    echo 'File Uploaded'; // Оповещаем пользователя об успешной загрузке файла
    sleep(5);
    header("Location: panel.html", true, 303);
    exit;

    }
    else{
    echo 'No File Uploaded'; // Оповещаем пользователя о том, что файл не был загружен
    sleep(5);
    header("Location: panel.html", true, 303);
    exit;

    }
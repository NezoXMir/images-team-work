<?php
// upload.php - обработка загрузки изображения
$uploadDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $fileName = basename($file['name']);
    $targetFile = $uploadDir . $fileName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Проверка: является ли файл изображением
    if (getimagesize($file['tmp_name']) === false) {
        die('Файл не является изображением.');
    }

    // Ограничение размера файла (пример: 2MB)
    if ($file['size'] > 2 * 1024 * 1024) {
        die('Изображение слишком большое.');
    }

    // Разрешённые форматы файлов
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        die('Разрешены только файлы JPG, JPEG, PNG и GIF.');
    }

    // Если файл с таким именем уже существует, добавляем timestamp
    if (file_exists($targetFile)) {
        $targetFile = $uploadDir . time() . '_' . $fileName;
    }

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        header('Location: index.php');
        exit;
    } else {
        die('Ошибка при загрузке файла.');
    }
} else {
    die('Неверный запрос.');
}

<?php
// delete.php - обработка удаления изображения
$uploadDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['image'])) {
    $image = basename($_POST['image']);
    $filePath = $uploadDir . $image;

    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            header('Location: index.php');
            exit;
        } else {
            die('Не удалось удалить изображение.');
        }
    } else {
        die('Файл не найден.');
    }
} else {
    die('Неверный запрос.');
}

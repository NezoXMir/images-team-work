<?php
// index.php - главная страница
$uploadDir = 'uploads/';
$images = [];
if (is_dir($uploadDir)) {
    // Получаем список файлов, исключая '.' и '..'
    $images = array_diff(scandir($uploadDir), ['.', '..']);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Управление изображениями</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Загрузка изображений</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" accept="image/*" required>
      <button type="submit">Загрузить</button>
    </form>

    <h2>Галерея</h2>
    <div class="gallery">
      <?php foreach ($images as $image): ?>
        <div class="image-item">
          <img src="uploads/<?php echo htmlspecialchars($image); ?>" alt="Image">
          <form action="delete.php" method="post" onsubmit="return confirm('Удалить изображение?');">
            <input type="hidden" name="image" value="<?php echo htmlspecialchars($image); ?>">
            <button type="submit">Удалить</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>

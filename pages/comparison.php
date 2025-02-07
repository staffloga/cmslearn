<?php
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<main>
    <h1>Сравнение CMS</h1>
    <p>Сравним популярные CMS по различным параметрам:</p>
    <div class="ui images">
        <img src="../assets/images/wordpress.png" alt="WordPress" style="width:100px;">
        <img src="../assets/images/joomla.png" alt="Joomla" style="width:100px;">
        <img src="../assets/images/drupal.png" alt="Drupal" style="width:100px;">
    </div>
    <table class="ui celled table">
        <thead>
            <tr><th>CMS</th><th>Простота использования</th><th>Гибкость</th><th>Поддержка</th><th>Рейтинг</th></tr>
        </thead>
        <tbody>
            <tr><td>WordPress</td><td>Высокая</td><td>Высокая</td><td>Отличная</td><td>9/10</td></tr>
            <tr><td>Joomla</td><td>Средняя</td><td>Высокая</td><td>Хорошая</td><td>7/10</td></tr>
            <tr><td>Drupal</td><td>Низкая</td><td>Очень высокая</td><td>Хорошая</td><td>8/10</td></tr>
        </tbody>
    </table>

    <h2>Метод экспертной оценки</h2>
    <p>Для сравнения CMS мы использовали метод экспертной оценки, который включает анализ следующих параметров:</p>
    <ul>
        <li>Простота использования.</li>
        <li>Гибкость и настраиваемость.</li>
        <li>Качество поддержки и документации.</li>
        <li>Популярность среди пользователей.</li>
    </ul>
</main>

<?php
include '../includes/footer.php';
?>
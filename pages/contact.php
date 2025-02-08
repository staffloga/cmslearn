<?php
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<main>
    <h1>Контакты</h1>
    <p>Свяжитесь со мной для получения дополнительной информации:</p>
    <ul>
        <li>Телефон: +79222726440</li>
        <li>Email: staffloga@yandex.ru</li>
    </ul>
    <form class="ui form">
        <div class="field">
            <label>Имя</label>
            <input type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="field">
            <label>Email</label>
            <input type="email" name="email" placeholder="Ваш email">
        </div>
        <div class="field">
            <label>Сообщение</label>
            <textarea name="message" placeholder="Ваше сообщение"></textarea>
        </div>
        <button class="ui button primary" type="submit">Отправить</button>
    </form>
</main>

<?php
include '../includes/footer.php';
?>

<?= service('validation')->listErrors() ?>
<form action="/teacher_info/login" method="post">
    <?= csrf_field() ?>

    <label for="account">account</label>
    <input type="input" name="account" /><br />

    <label for="password">Text</label>
    <textarea name="password" cols="45" rows="4"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />
</form>
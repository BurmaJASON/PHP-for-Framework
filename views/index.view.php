<?php require "views/partials/heading.php" ?>
    <h1>User Names</h1>
    <?php foreach($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>    
    <h1>Submit your name</h1>
    <form action="/name" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>

<?php require "views/partials/footer.php" ?>



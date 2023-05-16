<?php require "views/partials/heading.php" ?>

    <h1>Submit your name</h1>
    <form action="/name" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>

<?php require "views/partials/footer.php" ?>



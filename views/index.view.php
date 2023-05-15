<?php require "views/partials/heading.php" ?>

    


    <h1>My todo</h1>
    <?php foreach($tasks as $task) : ?>
        <?php 
            if($task->complete) {
                echo "<strike>$task->description</strike><br>";
            }else {
                echo "$task->description <br>";
            }    
        ?>
    <?php endforeach ?>

<?php require "views/partials/footer.php" ?>



<?php require('partials/head.php'); ?>

<body>
    <h1>My Tasks</h1>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if($task->completed) : ?>
                <s><?= $task->description ?></s>
            <?php else : ?>
                <?= $task->description ?>
            <?php endif; ?>    
        </li>
    <?php endforeach; ?>
<?php require('partials/footer.php'); ?>
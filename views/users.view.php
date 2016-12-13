<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
    </head>
    <body>
        <?php require 'views/nav.view.php'; ?>
        <!--<ul>
            <?php foreach($tasks as $task): ?>
            <li>
                <?php if ($task->completed): ?>
                    <strike><?=ucwords( $task->description)?></strike>

                <?php else :?>
                    <?=ucwords( $task->description)?>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>-->

            <?php foreach ($users as $user): ?>
                <li><?=$user->name;?></li>
            <?php endforeach; ?>

            <h1> learn php</h1>
            <form name="names" method="POST" action="/users">
                <input name="name">
                <input type="submit">
            </form>


        
        </ul>
    </body>
</html>
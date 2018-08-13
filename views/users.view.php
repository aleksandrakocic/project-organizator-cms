<?php require "partials/header.view.php" ?>

    <h1>THIS IS USERS LIST</h1>

    <div class="row">
    <?php foreach ($users as $user):?>
    <div class="card col-md-4">
        <div class="card-body">
            <h5 class="card-title"><?= $user[1] ?></h5>
            <p class="card-text"><?= $user->email ?></p>
            <a href="/projects/<?= $user->id ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<?php require "partials/footer.view.php" ?>
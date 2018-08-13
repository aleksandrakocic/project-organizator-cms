<?php require "partials/header.view.php" ?>

<h1>these are our projects</h1>

<div class="row">
    <?php foreach ($projects as $project):?>
    <div class="card col-md-4">
        <img class="card-img-top" src="<?= $project->image ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $project->title ?></h5>
            <p class="card-text"><?= $project->description ?></p>
            <a href="/projects/<?= $project->id ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require "partials/footer.view.php" ?>

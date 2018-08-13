<?php require "partials/header.view.php" ?>

  <div class="col content reset">
   <?php require "views/partials/searchNavH.view.php" ?> 

    <h2>these are our projects</h2>
    <div class="row">
        <?php foreach ($projects as $project):?>
        <div class="">
            <img class="" src="<?= $project->image ?>" alt="Card image cap">
            <div class="">
                <h5 class="card-title"><?= $project->title ?></h5>
                <p class="card-text"><?= $project->description ?></p>
                <a href="/projects/<?= $project->id ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>
<?php require "partials/footer.view.php" ?>

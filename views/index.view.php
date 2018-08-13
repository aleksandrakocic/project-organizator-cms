<?php require "partials/header.view.php" ?>

  <div class=" col content reset">

    <?php require "views/partials/searchNavH.view.php" ?> 
    <h1 id='welcome'> WELCOME TO PROJECT ORGANIZATOR </h1>
    <h1 id='welcome'> These are some exampes</h1>


<div class="card-deck">
<?php foreach ($projects as $project):?>
  <div class="card">
    <p class="card-img-top"> PROJECT</p>
    <div class="card-body">
      <h5 class="card-title"><?= $project->title ?></h5>
      <p class="card-text"><?= $project->description ?></p>
      <p>start-date:<?= $project->start_date ?></p>
      <p>duedate: <?= $project->deadline ?> </p>

    </div>
    <div class="card-footer">
      <small class="text-muted">team number:<?= $project->teams_id?>working on this project</small>
    </div>
  </div>
<?php endforeach; ?>
</div>

<style>

.card-deck {
  margin-top: 50px;
}

</style>



























 </div>

 <style>

 #welcome {
     background: transparent;
     color: #272f5e;
 }
 
 
 </style>


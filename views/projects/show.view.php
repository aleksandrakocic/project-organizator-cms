<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchNavH.view.php" ?> 

<div  class="form edit  d-flex align-items-center flex-column ">

<div id='showBox' class='col-8 reset'>

<div  class="form-group" class='showInfo' >
<a href="/admin/projects" class="btn btn-primary">< Back to all</a>
    <p>ID</p>
    <h3><?= $project->id ?></h3>
</div>

<div class="form-group">
    <p>Title</p>
    <h3><?= $project->title ?></h3>
</div>

<div class="form-group">
    <p>Description</p>
    <h3><?= $project->description ?></h3>
</div>

<div class="form-group">
    <p>Start date: </p>
     <h3><?= $project->start_date ?></h3>
     
</div>

<div class="form-group">
    <p>Deadline: </p>
     <h3><?= $project->deadline ?></h3>
</div>
</div>


<?php require "views/partials/footer.view.php" ?>

<style>

#showBox {
    background: white;
    padding: 10px;
}



</style>

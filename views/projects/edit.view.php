<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchNavH.view.php" ?> 


    <div class="form edit  d-flex align-items-center flex-column ">
    <form  class="col-8 reset" action="/admin/projects/update" method="POST">
        <div class="d-flex justify-content-end" >
                <a class="cancel" href="/admin/projects">x</a>
        </div>  
         <h1>Edit Product Information</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" 
                value="<?= $project->title ?>">
            </div>

    <div class="form-group">
        <label for="teams_id">Team</label>
          <select name="teams_id" id="teams_id" class="form-control">
            <option value=""></option>
            <?php foreach ($teams as $team): ?>
                <?php $selected = ($team->id === $project->teams_id) ? "selected" : "" ?>
                <option value="<?= $team->id ?>" <?= $selected ?>><?= $team->title ?></option>
            <?php endforeach; ?>
          </select>
    </div>

    <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
            <?= $project->description ?></textarea>
    </div>
    <div class="form-group">
        <label for="description">start date</label>
        <input name="start_date" id="start_date" class="form-control"  value="<?= $project->start_date ?>">
    </div>

    <div class="form-group">
        <label for="description">deadline</label>
        <input name="deadline" id="deadline" class="form-control"  value="<?= $project->deadline ?>">
    </div>

    <input type="hidden" name="id" id="id" class="form-control" 
            value="<?= $project->id ?>">
        <div class="buttons d-flex justify-content-center">
            <button class="btn btn-primary" >Submit</button>
            <button class="btn btn-primary" type="reset" >Reset</button>
        </div>

        </form>
    </div>
</div>
<?php require "views/partials/footer.view.php" ?>


<script>





</script>
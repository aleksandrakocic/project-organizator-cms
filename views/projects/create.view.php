<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchNavH.view.php" ?> 
<?php if(isset($project)): ?>

     <div class="form edit  d-flex align-items-center flex-column ">
     <form class='col-8 reset' action="/admin/projects/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $project->id ?>">
<?php else: ?>
    <form action="/admin/projects" method="POST" enctype="multipart/form-data">
<?php endif; ?>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= isset($project->title) ? $project->title : '' ?>">
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
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= isset($project->description) ? $project->description : '' ?></textarea>
    </div>

    <div class="form-group">
        <label for="description">start date</label>
        <input name="start_date" id="start_date" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">deadline</label>
        <input name="deadline" id="deadline" class="form-control">
    </div>

    <button class="btn btn-primary">create</button>
    <button type="reset" class="btn btn-danger">undo</button>
</form>
</div>
</div>
<?php require "views/partials/footer.view.php" ?>

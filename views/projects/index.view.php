<?php

//dd(getcwd());
?>


<?php require "views/partials/header.view.php" ?>

<div class="col content reset ">
<?php require "views/partials/searchNavH.view.php" ?> 


<a href="/admin/projects/create" class="btn btn-primary">ADD NEW +</a>
<br>
<br>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Team</th>
        <th>Description</th>
        <th>Start date:</th>
        <th>Deadline:</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($projects as $project): ?>
    <tr>
    
        <td><?= $project->id ?></td>
        <td><?= $project->title ?></td>
        <td><?= $project->teams_id?></td>
        <td><?= $project->description ?></td>
        <td><?= $project->start_date ?></td>
        <td><?= $project->deadline ?></td>
        <td>
           <a href="/admin/projects/show?id=<?= $project->id ?>">Show</a> 
           |
           <a href="/admin/projects/edit?id=<?= $project->id ?>">Edit</a>
           |
           <form action="/admin/projects/destroy" method="post"><button class="btn">
               <input type="hidden" name="id" value="<?= $project->id ?>">Delete</button>
            </form>
        </td>
        
    </tr>
    <?php endforeach; ?>
</table>

<?php require "views/partials/footer.view.php" ?>


<style>


</style>

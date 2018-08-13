<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchNavH.view.php" ?> 

<div class="form edit  d-flex align-items-center flex-column ">
    <form class="col-8 reset"  action="/admin/createuser" method="POST">

    <div class="form-group">
        <label for="firstname">firstname</label>
        <input type="text" required name="firstname" id="name" class="form-control" >
    </div>

    <div class="form-group">
        <label for="lastname">lastname</label>
        <input type="text" required name="lastname" id="name" class="form-control" >
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" required name="email" id="email" class="form-control" >
    </div>

   <div class="form-group">
        <label for="password">password</label>
        <input type="password" required name="password" id="password" class="form-control" >
    </div>

      <!-- 
          OVO KORISTIM AKO HOCU DEFAULT VALUE
          PA POLSE DA MENJA
          
        <input type="hidden" name="role" id="role" value='1'>
        <input type="hidden" name="team" id="team" value='1'>
      -->

    <button class="btn btn-primary">Submit</button>
</form>

<?php require "views/partials/footer.view.php" ?>

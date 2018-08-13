<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchNavH.view.php" ?> 

<div class="form edit  d-flex align-items-center flex-column ">
<form class="col-8 reset" action="/admin/validate" method="POST" >
    <h1 class='loginH'>TO HAVE CONTROLL ON PORJECTS INFOMRATIONS</h1>
    <h1 class='loginH'>PLEASE LOGIN FIRST</h1>
    <div class="form-group">
        <label for="email">email</label>
        <input type="email" required name="email" id="email" class="form-control" >
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" required name="password" id="password" class="form-control" >
    </div>

    <button class="btn btn-primary">Login</button>
</form>
<a id='createAccountA' href="/admin/signup"> CREATE AN ACCOUNT</a>
</div>
</div>
<?php require "views/partials/footer.view.php" ?>

<style>




</style>


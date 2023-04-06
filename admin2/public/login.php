<?php require_once "../includes/header.php" ?>
<section class="login border border-warning p-1">
    <div class="loginform  position-absolute top-50 start-50 translate-middle">
        <h1 class="fs-4 text-center mb-5 mt-2">Sign In</h1>
        <form class="ps-3 pe-3">
            <input type="text" class="form-control  text-white mb-4" placeholder="Username">
            <input type="password" class="form-control  text-white" placeholder="Password">
            <input type="checkbox" class="form-check-input ">
            <label class="form-check-label " for="exampleCheck1">Remeber me</label>
            <button type="button" class="btn btn-warning d-flex text-center">login</button>
        </form>
    </div>
</section>
<?php require_once "../includes/footer.php" ?>
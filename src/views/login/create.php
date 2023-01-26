<?php require './src/views/common/header.php' ?>


<div class="row">
    <div class="col-6 mt-5 mx-auto">

        <form class="bg-white p-3 border rounded-2 shadow" action="?name=login&action=store" method="POST">

            <div class="form-group mb-3">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-success">
            </div>

        </form>

    </div>
</div>


<?php require './src/views/common/footer.php' ?>

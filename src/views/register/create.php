<?php require './src/views/common/header.php' ?>

<div class="row">
    <div class="col-6 mx-auto mt-5">

        <form class="bg-white p-5 border rounded-2" action="?name=register&action=store" method="post">

            <div class="form-group mb-2">
                <label for="name">name :</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group mb-2">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group mb-2">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group mb-2">
                <input type="submit" value="register" class="btn btn-success">
            </div>

        </form>

    </div>
</div>


<?php require './src/views/common/footer.php' ?>

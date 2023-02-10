<?php require './src/views/common/header.php' ?>


<div class="row">
    <div class="col-12">
        <form class="bg-white shadow border rounded-2 p-3" action="/posts" method="POST">
            <h1>create new post</h1>

            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="content">content</label>
                <textarea name="content" class="form-control"></textarea>
            </div>

            <div class="form-group mt-3">
                <input type="submit" class="btn btn-primary" value="create post">
            </div>

        </form>
    </div>
</div>


<?php require './src/views/common/footer.php' ?>
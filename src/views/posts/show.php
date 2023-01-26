<?php require './src/views/common/header.php' ?>

    <div class="row">
        <div class="col-12">
            <article class="bg-white shadow border rounded-3 p-3">

                <h1 class="border-bottom pb-2"><?= $post->title ?></h1>
                <p><?= $post->description ?></p>
                <p><?= $post->content ?></p>

            </article>
        </div>
    </div>

<?php require './src/views/common/footer.php' ?>
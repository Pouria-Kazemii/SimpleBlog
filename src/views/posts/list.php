<?php require './src/views/common/header.php' ?>


    <div class="row">
        

        <?php foreach($posts as $post) : ?>

            

            <div class="col-4 mb-3">
                
                <article class="p-3 bg-white shadow rounded-2">
                    <h2 class="border-bottom pb-2"><?= $post->title ?></h2>
                    <p><?= $post->description ?></p>
                    <a href="?name=posts&action=show&index=<?= $post->id ?>" class="btn btn-primary">read more...</a>
                </article>

            </div>

            

        <?php endforeach; ?>

    </div>


<?php require './src/views/common/footer.php' ?>
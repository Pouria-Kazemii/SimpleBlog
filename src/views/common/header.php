<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Simple Blog - Home</title>
</head>
<body class="bg-light">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="bg-white shadow p-2 my-3 rounded-2 border fw-bold menu d-flex justify-content-between">
                    <a href="?name=home&action=list" class="text-decoration-none">Home</a>
                    <a href="?name=posts&action=list" class="text-decoration-none">posts</a>
                    
                    <?php if(!authCheck()) : ?>
                        
                        <a href="?name=login&action=create" class="text-decoration-none">login</a>
                        <a href="?name=register&action=create" class="text-decoration-none">register</a>

                    <?php else : ?>
                        <a href="?name=posts&action=create" class="text-decoration-none">create posts</a>
                        
                        <a>hello <?= getUser()?></a>

                        <form action="?name=login&action=destroy" method="POST">
                            <div class="form-group">
                                <input type="submit" value="logout" class="btn btn-danger btn-sm">
                            </div>
                        </form>

                    <?php endif; ?>
                </div>
            </div>
        </div>
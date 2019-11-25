<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Todo list</title>
    </head>

    <body>
        <div class="container global">
            <h5 class="tiny-marge">Liste des taches à effectuer</h5>
            <div id="formulaire" class="jumbotron small-marge">
                <form method="post" action="php/createtask.php">
                    <div class="form-group">
                        <input name="title" type="text" class="form-control" id="titleTask" placeholder="Titre de la tache"></input>
                    </div>
                    <div class="form-group">
                        <textarea name="desc" class="form-control" id="descriptionTask" rows="3" placeholder="Description de la tache"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter la tache</button>
                </form>
            </div>
            <div id="todo" class="row small-marge border">
                <?php include("php/gettasks.php") ?>
            </div>
        </div>

    </body>

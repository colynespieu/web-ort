        <div class="container global">
            <h5 class="small-marge">Ajouter un utilisateur :</h5>
            <div id="formulaire" class="jumbotron small-marge">
                <form method="post" action='?action=addUser'>
                    <div class="form-group">
                        <input name="createMail" type="text" class="form-control" id="createMail" placeholder="Mail"></input>
                    </div>
                    <div class="form-group">
                        <input name="createNom" type="text" class="form-control" id="createNom" placeholder="Nom"></input>
                    </div>
                    <div class="form-group">
                        <input name="createPrenom" type="text" class="form-control" id="createPrenom" placeholder="Prenom"></input>
                    </div>
                    <div class="form-group">
                        <input type="password" name="CreatePassword" class="form-control" id="CreatePassword" placeholder="Password"></input>
                    </div>
                    <div class="form-check">
                        <input name="isAdmin" id="isAdmin" type="checkbox" class="form-check-input">
                        <label class="form-check-label" name="isAdmin" id="isAdmin">Admin</label>
                    </div>
                    <button type="submit" class="btn btn-primary tiny-marge">Ajouter l'utilisateur</button>
                </form>
            </div>
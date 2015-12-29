{if isset($connexion)}
    <div class="alert alert-error" id="notif">
    {$connexion}
    </div>
{/if}
<h1>Connexion</h1>
    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

        <div class="clearfix">
            <label for="email">Email </label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mdp">Mots de passe </label>
            <div class="input">
                <input type="password" name="mdp" id="mdp"></textarea>
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
        </div>
    </form> 
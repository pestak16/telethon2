<?php
require_once("head.php");
require_once("header.php");
?>


<main class="container">
    
    <div class="row">
        <div class="col-12">
            <h2><i class="fa-solid fa-key"></i> Nouveau mot de passe</h2>
        </div>

        <div class="col-6">            
            <form>
                
              <div class="mb-3">
                  <label for="password1" class="form-label">Nouveau mot de passe</label>
                  <input type="password" class="form-control" id="password1" placeholder="mot de passe" required>
                  <div id="emailHelp" class="form-text"><i class="text-muted">Au moins 12 chiffres, 3 majuscules, et 9 symboles grecs</i></div>
                </div>
            
                <div class="mb-3">
                  <label for="password2" class="form-label">R&eacute;p&eacute;ter le mot de passe</label>
                  <input type="password" class="form-control" id="password2" placeholder="mot de passe" required>
                </div>
                
                <button type="submit" class="btn btn-success">Changer le mot de passe</button>
                <button type="button" class="btn btn-light">Annuler</button>
              </form>

        </div>

    </div>
    

</main>

<?php
require_once("footer.php");
?>

</body>
</html>
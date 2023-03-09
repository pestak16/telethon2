<?php
require_once("head.php");
require_once("header.php");
?>


<main class="container">
    
    <div class="row">
        <div class="col-12">
            <h2><i class="fa-solid fa-key"></i> Mot de passe</h2>
        </div>

        <div class="col-6">            
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
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
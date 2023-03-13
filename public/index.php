<?php
require_once("head.php");
?>

<main>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <form action="collect_main.php" method="post" class="py-5">
                    <header class="text-center mb-5">
                        <h1 class="mt-4">Action Téléthon</h1>
                    </header>
                    <div class="form-group px-4 mb-5">
                        <label for="mail" class="form-label">Votre Email</label><br>
                        <input type="email" name="mail" id="mail" class="form-control no-border-radius px-4" required>
                    </div>
                    <div class="form-group px-4 mb-5">
                        <label for="password" class="form-label">Mot de passe</label><br>
                        <input type="password" name="password" id="password" class="form-control no-border-radius px-4"
                            required>
                    </div>
                    <div class="form-group text-center px-4 my-5">
                        <input type="submit" value="Se connecter" class="btn btn-primary btn-lg mb-3 px-md-5">
                        <div class="text-center mt-3">
                            <a href="#" class="text-primary">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require_once("footer.php");
?>
</body>

</html>
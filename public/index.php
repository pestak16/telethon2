<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Action Téléthon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <form action="collect_main.php" method="post" class="py-5">
                    <header class="text-center mb-5">
                        <h1 class="mt-4">Action Téléthon</h1>
                    </header>
                    <div class="form-group px-4 mb-5">
                        <label for="mail">Votre Email</label><br>
                        <input type="email" name="mail" id="mail" required class="form-control no-border-radius px-4" style="border: 1px solid black">
                    </div>
                    <div class="form-group px-4 mb-5">
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" required class="form-control no-border-radius px-4" style="border: 1px solid black">
                    </div>
                    <div class="form-group text-center px-4 my-5">
                        <input type="submit" value="Se connecter" class="btn btn-primary btn-lg mb-3" style="width: 200px;">
                        <div class="text-center mt-3">
                            <a href="#" class="text-primary">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require_once("head.php");
require_once("header.php");
?>

<main>
    <div class="container-md">
        <h2>
            <i class="fa-solid fa-users"></i>
            Modifier un utilisateur
        </h2>

        <div><img src="" alt=""></div>
        <div class="bg-secondary">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom *</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="David">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prénom *</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="LEGRAND">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="01.02.03.04.05">
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-success mx-2" href="">Ajouter</a>
                <a class="btn btn-danger" href="users_main.php">Annuler</a>
            </div>
        </div>

        <div class="text-end">
            <a href=""><p>Changer le mot de passe</p></a>
        </div>
    </div>
</main>
    
    <!-- JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
           integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
           crossorigin="anonymous">
   </script>

<?php
require_once("footer.php");
?>
</body>
</html>
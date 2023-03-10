<?php
require_once("head.php");
require_once("header.php");
?>

<main class="container">
    <div class="container-md mb-5">
        <div class="row text-primary my-4">
            <h2><i class="fa-solid fa-handshake-angle"></i> Ajouter un partenaire</h2>
        </div>
        <form action="" class="bg-light p-3 mb-3" method="post">
            <div class="mb-2">
                <label for="partners" class="form-label">Nom du partenaire</label>
                <input type="text" class="form-control" name="partners" id="partners" required>
            </div>
            <div class="mb-2">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" name="logo" id="logo">
            </div>
            <div class="mb-2">
                <label for="contact" class="form-label">Contact</label>
                <input type="email" class="form-control" name="contact" id="contact" placeholder="nom@exemple.com"
                    required>
            </div>
            <div class="mb-2">
                <label for="tel" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" name="tel" id="tel" placeholder="01 23 45 67 89" required>
            </div>
            <div class="mb-4">
                <label for="url" class="form-label">URL</label>
                <input type="url" class="form-control" name="url" id="url" placeholder="https://www.exemple.com">
            </div>
            <div class="row">
                <div class="col text-end">
                    <button class="btn btn-success mb-2 px-md-5" type="submit">Ajouter</button>
                    <a class="btn btn-danger mb-2 px-md-5" href="partners_main.php">Annuler</a>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
require_once("footer.php");
?>
</body>

</html>
<?php
require_once("head.php");
require_once("header.php");
?>
<div class="title container-md pb-5 pt-5">
    <h2>Modifier un don</h2>
</div>
<div class="bg-light pt-4 pb-4">
    <div class="modifier container-md">
        <div class="form">

            <form action="" method="post">
                <label for="stand">Stand</label><br>
                <select class="form-control" required name="stand" id="form_stand">
                    <option value="">Coisis une option</option>
                    <option value="auchan1">Auchan 1</option>
                    <option value="sauna_prado">Sauna Prado</option>
                    <option value="bordel">Bordel "Chez Gertrude"</option>
                </select><br>
                <label for="montant">Montant</label><br>
                <input class="form-control" required min="0" step="0.01" type="number" name="montant" id="somme">
            </form>
        </div>

    </div>
    <div class="d-flex container-md">
        <div class="bouton col-6 p-1 pt-4">
            <a class="btn btn-success px-md-5 w-100" href="">Modifier</a>
        </div>
        <div class=" bouton col-6 p-1 pt-4">
            <a class="btn btn-danger px-md-5 w-100" href="collect_main.php">Annuler</a>
        </div>
    </div>
</div>


<?php
require_once("footer.php");
?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>
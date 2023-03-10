<?php
require_once("head.php");
require_once("header.php");
?>

<main>
    <div id="titre" class="container-md pb-5 pt-5">
        <h2>Ajouter un don</h2>
    </div>
    <div class=" bg-light pt-4 pb-4 container-md">
        <div id="ajouter" class="row">
            
            <div class="form col-md-6 col-12">
            <h3>Ajouter un don</h3>

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
            <div id="erreur" class="col-md-6 col-12">
                <h3>Signaler une erreur</h3>
                <table class="table table-striped table-hover align-middle ">

                    <tr class="">
                        <th> Auchan 1 </td>
                        <td> 12 Decembre 14h63</td>
                        <td>25 Euros</td>
                        <td>
                            <a class="btn btn-success float-end" href="collect_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        </td>

                    </tr>
                    <tr class="">
                        <th> Auchan 1 </td>
                        <td> 12 Decembre 14h63</td>
                        <td>25 Euros</td>
                        <td>
                            <a class="btn btn-success float-end" href="collect_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        </td>

                    </tr>
                    <tr class="">
                        <th> Auchan 1 </td>
                        <td> 12 Decembre 14h63</td>
                        <td>25 Euros</td>
                        <td>
                            <a class="btn btn-success float-end" href="collect_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        </td>

                    </tr>
                </table>
            </div>

        </div>
        <div class="d-flex">
            <div class="bouton col-6 p-1 pt-4">
                <a class="btn btn-success px-md-5 w-100" href="">Ajouter</a>
            </div>
            <div class=" bouton col-6 p-1 pt-4">
                <a class="btn btn-danger px-md-5 w-100" href="collect_main.php">Annuler</a>
            </div>
        </div>
    </div>
</main>



<?php
require_once("footer.php");
?>
</body>

</html>
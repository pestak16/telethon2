<?php
require_once("head.php");
require_once("header.php");
?>

<main class="container">
    <div class="container-md mb-5">
        <h2><i class="fa-solid fa-handshake-angle"></i> Partenaires</h2>
        <div class="row">
            <div class="col"><a class="btn btn-success mb-2 px-md-5" href="partners_add.php">Ajouter</a></div>
        </div>
        <table class="table table-striped align-middle">
            <tbody>
                <tr>
                    <th class="col-3 align-items-center">Auchan</th>
                    <td class="col-7">https://www.auchan.fr</td>
                    <td class="col-2 text-end">
                        <a class="btn btn-success" href="partners_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn text-danger" href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <tr>
                    <th class="col-3">Naruto</th>
                    <td class="col-7">https://www.naruto.fr</td>
                    <td class="col-2 text-end">
                        <a class="btn btn-success" href="partners_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn text-danger" href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <tr>
                    <th class="col-3">Club de tenis</th>
                    <td class="col-7">https://www.fftenis.fr</td>
                    <td class="col-2 text-end">
                        <a class="btn btn-success" href="partners_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn text-danger" href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <tr>
                    <th class="col-3">Sex shop 2000</th>
                    <td class="col-7">https://www.ffpenis.fr</td>
                    <td class="col-2 text-end">
                        <a class="btn btn-success" href="partners_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn text-danger" href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <tr>
                    <th class="col-3">Decathlon</th>
                    <td class="col-7">https://www.decathlon.fr</td>
                    <td class="col-2 text-end">
                        <a class="btn btn-success" href="partners_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn text-danger" href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
                <tr>
                    <th class="col-3">Carrefour</th>
                    <td class="col-7">https://www.carrefour.fr</td>
                    <td class="col-2 text-end">
                        <a class="btn btn-success" href="partners_edit.php"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn text-danger" href="#"><i class="fa-solid fa-x"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>6 partenaires</p>
    </div>
</main>

<?php
require_once("footer.php");
?>
</body>

</html>
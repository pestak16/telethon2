<?php
require_once("head.php");
require_once("header.php");
?>

    <main>
        <div class="container-md">
            <h2>Utilisateurs</h2>
            <div>
              <a class="btn btn-success" href="users_add.php">Ajouter</a>
            </div>
            <br>
            
            <table class="table table-striped table-hover">
                  <tr>
                    <th>David</th>
                    <td>david.afpa@somewhere.com</td>
                    <td>Admin</td>
                    <td class="text-end"><a class="btn btn-success" href="users_edit.php"><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
                  <tr>
                    <th>Jonathan2</th>
                    <td>jonathan2.afpa@somewhere.com</td>
                    <td>Collab</td>
                    <td class="text-end"><a class="btn btn-success" href=""><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
                  <tr>
                    <th>Jonathan</th>
                    <td>jonathan.afpa@somewhere.com</td>
                    <td>Collab</td>
                    <td class="text-end"><a class="btn btn-success" href=""><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
                  <tr>
                    <th>Jordan</th>
                    <td>jordan.afpa@somewhere.com</td>
                    <td>Admin</td>
                    <td class="text-end"><a class="btn btn-success" href=""><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
                  <tr>
                    <th>Pierre</th>
                    <td>pierre.afpa@somewhere.com</td>
                    <td>Admin</td>
                    <td class="text-end"><a class="btn btn-success" href=""><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
                  <tr class="">
                    <th>Anh</th>
                    <td>anh.afpa@somewhere.com</td>
                    <td>Admin</td>
                    <td class="text-end"><a class="btn btn-success" href=""><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
                  <tr>
                    <th>Jeremy</th>
                    <td>jeremy.afpa@somewhere.com</td>
                    <td>Admin</td>
                    <td class="text-end"><a class="btn btn-success" href=""><i class="fa-solid fa-pencil"></i></a></td>
                    <td class="text-start"><a class="btn" href=""><i class="fa-solid fa-xmark"></i></td>
                  </tr>
              </table>    
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
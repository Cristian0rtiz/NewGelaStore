<?php //include_once 'index.php';  ?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="uReport.php" class="btn btn-sm btn-outline-secondary">Descargar</a>
          </div>
        </div>
      </div>

      <h2>Usuarios</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Usuario</th>
              <th scope="col">Correo</th>
              <th scope="col">Contraseña</th>
              <th scope="col">Borrar</th>
              <th scope="col">Modificar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = new UserController();
              if(gettype($data)>0){
                foreach($data -> getSearchAllUser() as $key => $value){
                  print'<tr>
                  <td>'.$value["ID"].'</td>
                  <td>'.$value["NAME"].'</td>
                  <td>'.$value["USER"].'</td>
                  <td>'.$value["EMAIL"].'</td>
                  <td>'.$value["PASSWORD"].'</td>
                  <td>
                  <button class="btn btn-danger" onClick="erase(this.parentElement.parentElement)"><span data-feather="trash-2"></span></button>
                  </td>
                  <td>
                  <button class="btn btn-info" onclick="edit(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><span class="text-light" data-feather="edit-2"></span></button>
                  </td>
                        </tr>';
                }
                
              }else{ echo'<tr>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
            </tr>';}
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>
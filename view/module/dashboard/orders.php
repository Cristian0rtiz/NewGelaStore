<input type="text" name="IdDelete" id="txtId">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="" onclick="genReportO(event)" class="btn btn-sm btn btn-outline-dark ">Descargar</a>
          </div>
        </div>
      </div>

      <h2>Ordenes</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
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
                  <button class="btn btn-danger" onClick=" erase(this.parentElement.parentElement) "><i class="text-light bi bi-trash"></i></button>
                  </td>
                  <td>
                  <button class="text-light btn btn-info " onclick=" edit(this.parentElement.parentElement) " data-toggle="modal" data-target="#myModal"><i class="bi bi-pencil-square"></i></button>
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
      <div id="ohsnap"></div>
      <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg bg-info">
        <h4 class="modal-title">Modificar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" id="frmUsuarioModificar">
          <input type="hidden" name="txtCodigoM" id="txtIdM">
          <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtNameM" name="txtNombreM">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Email</span>
                        <input type="text" class="form-control" id="txtEmailM" name="txtApellidoM">
                        <span class="input-group-addon">A</span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Usuario</span>
                        <input type="text" class="form-control" id="txtUserM" name="txtUsuarioM">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Contraseña</span>
                        <input type="text" class="form-control" id="txtPasswordM" name="txtClaveM" >
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div>
          <button class="btn btn-app float-left" onclick="validateModify(event)">
              <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['txtNombreM'])){
              $objCtrUser = new UserController();
              $objCtrUser -> setUpdateUser(
                $_POST['txtIdM'],
                $_POST['txtNameM'],
                $_POST['txtEmailM'],
                $_POST['txtUserM'],
                $_POST['txtPasswordM']
              );
              include_once 'view/module/user.php';
            }
          ?>
          <button class="btn btn-app" data-dismiss="modal">
              <i class="fa fa-close"></i> Salir
          </button>
        </div>
      </div>

    </div>
  </div>
    </main>
  </div>
</div>
<?php
            if (isset($_POST['txtNameM'])){
              $objCtrUser = new UserController();
              $objCtrUser -> setUpdateUser(
                $_POST['txtIdM'],
                $_POST['txtNameM'],
                $_POST['txtEmailM'],
                $_POST['txtUserM'],
                $_POST['txtPasswordM']
              );
              include_once 'view/module/user.php'; 
            }
          ?>

<script src="view/js/crud.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="" onclick="genReportP(event)" class="btn btn-sm btn btn-outline-dark ">Descargar</a>
          </div>
        </div>
        </div>
        <h2>Productos</h2>
        <form action="" class="mx-auto" id="dragToUploadForm" method="post" enctype="multipart/form-data">
            <div class="container mx-auto">
                <div class="row col-5 g-3 mx-auto ">
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="form-group">
                            <div class="drag-area">
                              <!-- <div ondragover="dragover(event)"> -->
                              <header>Arrastra y suelta</header>
                              <span class="text-center">O</span>
                              <button class="btn btn-info">Busca la imagen</button>
                              <div id="preview"></div>
                              <input type="file" id="inputFile" name="imgRe" hidden />
                              <!-- </div> -->
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h3><input type="text" name="name" id="name" class="cart-title form-control" placeholder="Nombre del producto"></h3>
                            <textarea name="code" class="card-text form-control" id="code" cols="30" rows="10" placeholder="descripción del producto"></textarea>
                            <input type="number" name="price" id="price" class="form-control card-text" placeholder="precio del producto">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group p-3">
                                    <a type="button" onclick="ClearForm()" class="btn btn-md btn-outline-danger">Cancelar</a>
                                </div>
                                <a type="button" onclick="createP(event)" class="btn btn-md btn-outline-success">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                //hide the error reports
                // error_reporting(E_ERROR | E_PARSE);
                 // Send Image to products folder
                  try {
                    $tmpImg = $_FILES['imgRe']['tmp_name'];
                    $nameImg = $_FILES['imgRe']['name'];
                    $route = "view/img/productos/";
                    $recieveImg = $route.$nameImg;
                    if (!file_exists($route)) {
                      mkdir($route);
                    }
                    if (!file_exists($recieveImg)) {
                      $sentImg = move_uploaded_file($tmpImg, $recieveImg);
                    }

                    if($sentImg){
                      print "se ha guardado con exito";
                    } else{
                      print "la imagen no se guardo";
                    }
                  } catch (Exception $e) {
                    echo "no se pudo enviar", $e->getMessage(); 
                  }
                  //SEND DATA TO DB
                  if (isset($_POST['name'])){
                    $objCtrUser = new ProductController();
                    $objCtrUser -> setInsertProducts(
                      $_POST['name'],
                      $_POST['code'],
                      $recieveImg,
                      $_POST['price']
                    );
                  }
                ?>
        </form>
              </div>




      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">imagen</th>
              <th scope="col">precio</th>
              <th scope="col">descripcion</th>
              <th scope="col">Borrar</th>
              <th scope="col">Modificar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = new ProductController();
              if(gettype($data)>0){
                foreach($data -> getSearchAllProducts() as $key => $value){
                  print'<tr>
                  <td>'.$value["ID"].'</td>
                  <td>'.$value["NAME"].'</td>
                  <td><img class="img-responsive img-rounded img-thumbnail" src='.$value["IMG"].'></td>
                  <td>'.$value["PRICE"].'</td>
                  <td>'.$value["CODE"].'</td>
                  <td>
                  <button class="btn btn-danger" onClick=" eraseP(this.parentElement.parentElement) "><i class="text-light bi bi-trash"></i></button>
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
        <div id="ohsnap"></div>
        </main>

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
    </main>
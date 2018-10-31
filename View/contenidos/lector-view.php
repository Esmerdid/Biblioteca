<link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/css/style_body.css">

<form data-form="save" action="<?php echo SERVERURL; ?>Ajax/lectorAjax.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
  <div class="container-fluid formulario">
      <div class="class card border-primary">
        <div class="card-header text-center"><h5>CREAR LECTOR</h5></div>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-12" style="bottom: 10px;">
                <img src="<?php echo SERVERURL."/Resource/img/lector.png"; ?>" class="lector img-fluid" alt="">
            </div>
            <div class="col col-lg-4 col-md-4 col-style="sm-8 col-12">
              <input type="text" placeholder="Nombres" name="nombres" class="form-control" require="llenar campo"><br>
              <input type="text" placeholder="Apellidos" name="apellidos" class="form-control" require="llenar campo"><br>
              <div class="form-group">
                <label for="SelectTipo">Tipo de documento</label >
                  <select class="form-control" name="SelectTipo" id="SelectTipo">
                    <option value="CC">Cédula de Ciudadanía</option>
                    <option value="CE">Cédula de Extranjería</option>
                    <option value="TI">Tarjeta de Identidad</option>
                  </select>
              </div>
              <input type="number" placeholder="Número de documento" name="documento" class="form-control" require="llenar campo"><br>
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-8 col-12">
              <input type="text" placeholder="Direccion" name="direccion" class="form-control" require="llenar campo"><br>
              <input type="number" placeholder="Teléfono" name="telefono" class="form-control" require="llenar campo"><br>
              <input type="email" placeholder="Correo" name="correo" class="form-control" require="llenar campo"><br>
              <button type="submit" class="btn btn-primary btn-md btn-block">Registrar</button>
            </div>
          </div>  
      </div>
      <div class="RespuestaAjax"></div>
</form>

    <div class="container-fluid detalle_lector">
      <div class="class card border-primary">
        <div class="card-header text-center"><h5>DETALLE LECTOR</h5>
          <div class="table-responsive">
              <table class="table table-bordered table-hover table-condensed">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id_lector</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Tipo Doc</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td align="center">
                       <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><em class="fa fa-pencil"></em></a>
                    </td>
                    <td align="center">
                       <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td align="center">
                       <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><em class="fa fa-pencil"></em></a>
                    </td>
                    <td align="center">
                       <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td align="center">
                       <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><em class="fa fa-pencil" style="color:white"></em></a>
                    </td>
                    <td align="center">
                       <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                    </td>
                  </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>
              <ul class="pagination pull-right">
                <li class="page-item"><a class="page-link" href="#"><em class="fa fa-caret-left" style="color:#007bff"></em></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><em class="fa fa-caret-right" style="color:#007bff"></em></a></li>
              </ul>
            </div>
          </div> 
        </div>   
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Lector</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Nombres</label>
            <input type="text" class="form-control" id="nombres" placeholder="Nombres">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
          </div>
          <div class="dropdown">
             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Tipo de documento
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
             </div>
          </div><br>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Documento</label>
            <input type="number" class="form-control" id="documento" placeholder="No. Documento">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="Direccion">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Correo</label>
            <input type="text" class="form-control" id="correo" placeholder="Correo">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Lector</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Nombres</label>
            <input type="text" class="form-control" id="nombres" placeholder="Nombres">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
          </div>
          <div class="dropdown">
             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Tipo de documento
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
             </div>
          </div><br>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Documento</label>
            <input type="number" class="form-control" id="documento" placeholder="No. Documento">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="Direccion">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="sr-only">Correo</label>
            <input type="text" class="form-control" id="correo" placeholder="Correo">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
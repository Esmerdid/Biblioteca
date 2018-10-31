<link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/css/style_body.css">

<div class="container-fluid detalle_lector">
      <div class="class card border-primary">
        <div class="card-header text-center"><h5>LISTADO LECTORES</h5>
          <form class="form-inline" action="tabla_submit" method="get" accept-charset="utf-8">
            <div class="form-group mx-sm-3">
              <label for="inputPassword2" class="sr-only">Password</label>
              <input type="text" class="form-control" id="inputPassword2" placeholder="Ingrese documento o nombre">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form><br>
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
                    <th scope="col">Seleccionar</th>
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
                       <a class="btn btn-primary"><em class=" fa fa-check-square-o"></em></a>
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
                       <a class="btn btn-primary"><em class=" fa fa-check-square-o"></em></a>
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
                       <a class="btn btn-primary"><em class=" fa fa-check-square-o" style="color:white"></em></a>
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


    <div class="container-fluid detalle_lector">
      <div class="class card border-primary">
        <div class="card-header text-center"><h5>HISTORIAL DE PRESTAMOS</h5>
          <form class="form-inline" action="tabla_submit" method="get" accept-charset="utf-8">
            <div class="form-group mx-sm-3">
              <label for="inputPassword2" class="sr-only">Password</label>
              <input type="text" class="form-control" id="inputPassword2" placeholder="Ingrese documento o nombre">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form><br>
          <div class="table-responsive">
              <table class="table table-bordered table-hover table-condensed">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id_prestamo</th>
                    <th scope="col">Lector</th>
                    <th scope="col">No. Doc</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Título del libro</th>
                    <th scope="col">Fecha préstamo</th>
                    <th scope="col">Estado</th>
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
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
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
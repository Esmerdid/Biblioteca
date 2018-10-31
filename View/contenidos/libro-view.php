<link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/css/style_body.css">

<from data-form="save" action="" method="" class="FormularioAjax">
  <div class="container-fluid formulario">
      <div class="class card border-primary">
        <div class="card-header text-center"><h5>CREAR LIBRO</h5></div>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-12">
                <img src="<?php echo SERVERURL; ?>Resource/img/libro.png" class="libro img-fluid" alt="">
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-8 col-12">
              <input type="number" placeholder="Codigo libro" name="codigo" class="form-control"><br>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Autor</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Editorial</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
              </div>
              <input type="text" placeholder="Título del libro" name="titulo" class="form-control"><br>  
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-8 col-12">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Género</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
              </div>
              <input type="number" placeholder="Número de ejemplares" name="ejemplares" class="form-control"><br>
              <button type="submit" class="btn btn-primary btn-md btn-block">Crear</button>
            </div>
          </div>  
      </div>
    </div> 
</from>
<div class="RespuestaAjax"></div>

    <div class="container-fluid detalle_lector">
      <div class="class card border-primary">
        <div class="card-header text-center"><h5>DETALLE LIBRO</h5>
          <div class="table-responsive">
              <table class="table table-bordered table-hover table-condensed">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Título</th>
                    <th scope="col">Género</th>
                    <th scope="col">Ejemplares</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Editorial</th>
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
                    <td align="center">
                       <a class="btn btn-primary"><em class="fa fa-pencil"></em></a>
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
                    <td align="center">
                       <a class="btn btn-primary"><em class="fa fa-pencil"></em></a>
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
                    <td align="center">
                       <a class="btn btn-primary"><em class="fa fa-pencil" style="color:white"></em></a>
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

    
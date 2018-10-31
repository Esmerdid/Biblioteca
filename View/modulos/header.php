
    <nav class="navbar navbar-expand-md">
      <a class="navbar-brand" href="<?php echo SERVERURL; ?>home">
        <img src="<?php echo SERVERURL."/Resource/img/appsolutions.png"; ?>" class="d-inline-block align-top" alt="">
        <span id="empresa"><b>App</b>Solutions</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls=" navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fa fa-navicon"></i>
        </span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto ml-lg-auto text-center">
            <a class="nav-item nav-link active" href="<?php echo SERVERURL; ?>lector/" id="lector">Crear lector</a>
            <a class="nav-item nav-link" href="<?php echo SERVERURL; ?>libro/" id="libro">Crear libro</a>
            <a class="nav-item nav-link" href="<?php echo SERVERURL; ?>prestamo/" id="prestamo">Prestar libro</a>
            <a class="nav-item nav-link" href="<?php echo SERVERURL; ?>home/">Devolucion</a>
          </div>
        </div>
      <div class="my-div-right">
        <ul class="nav navbar-nav my-right-ul">
          <li class="dropdown user-menu">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="usuario">
                <img src="<?php echo SERVERURL; ?>Resource/img/user.png" class="user-image">
                <span class="hidden-xs">Webmaster</span>
              </a>
            <ul class="dropdown-menu">
                <li class="my-user-header">
                   <img src="<?php echo SERVERURL; ?>Resource/img/user.png" class="rounded-circle">
                     <p>Durán & Badillo - Web Developer<br>
                      <small>Ago. 2018</small>
                     </p>
                 </li>
                 <li class="my-user-footer">
                    <div class="pull-left">
                        <a href="#" class="btn btn-default"> <i class="fa fa-user"></i><b>Perfil</b></a>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-default"> <i class="fa fa-power-off"></i><b>Salir</b></a>
                    </div>
                 </li>
            </ul> 
          </li>
        </ul>
      </div>
    </nav>


 
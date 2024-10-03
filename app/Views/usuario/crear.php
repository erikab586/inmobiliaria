<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Crear Usuario</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-icons">LLENAR FORMULARIO</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form" action="<?php echo base_url('/crearusuarios')?>" method="POST">
                                <div class="form-body">
                                <div class="row">
								<div class="col-md-6">
									<div class="form-group">
                                            <label for="projectinput6">Rol de Usuario</label>
											<select id="projectinput6" name="rol" class="form-control">
                                                <option value="0" selected="" disabled="">Seleccionar una opción</option>
                                                <?php foreach ($roles as $i) : ?>
                                                    <option value="<?php echo $i['id_rolU']?>"><?php echo $i['descripcion_rol']?></option>
                                                <?php endforeach; ?>
											</select>
                                    </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Username: </label>
                                        <input type="text" name="username" id="username" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                        <label>Nombres: </label>
                                        <input type="text" name="nombres" id="nombres" placeholder="Ingresar Nombres" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Apellidos: </label>
                                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingresar Apellidos" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                        <label>Email: </label>
                                        <input type="email" name="email" id="email" placeholder="Ingresar Email" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Password: </label>
                                        <input type="password" name="password" id="password" placeholder="Ingresar Password" class="form-control">
									</div>
								</div>
                            </div>
                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-danger mr-1">
                                            <i class="icon-cross2"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="icon-check2"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
      </div>
    </div>
<?php echo $this->endSection();?>
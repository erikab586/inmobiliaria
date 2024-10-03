<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title"></h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li><button type="button" class="btn btn-success">CAMBIAR CONTRASEÑA</button></li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Charts section start -->
          <section id="charts-section">
              <div class="row">
                  <div class="col-xs-12 mt-1 mb-3">
                      <h4><?php echo session('Nombres')." ".session('Apellidos')?></h4>
                      <hr>
                  </div>
              </div>
                <div class="row">
                  <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                            <form class="form" action="#" method="POST">
                                <div class="form-body">
                                        <h4 class="form-section"><i class="icon-head"></i>Perfil</h4>
                                        <div class="row text-xs-center">
                                            <div class="col-md-12">
                                            <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="unlock-user" class="rounded-circle img-fluid center-block">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="card-title mt-1"><?php echo session('Nombres')." ".session("Apellidos");?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2"><span>Cargo Administrativo</span></p>
                                        <div class="row text-xs-center">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <?php if (session('id_roles')==1){?>
                                                    <h5 class="card-title mt-1">USUARIO</h5>
                                                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2"><span>Estatus</span></p>
                                        <div class="row text-xs-center">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php if(session('estatus_usuario')=='1'){ echo session('estatus_usuario');?>
                                                        <button class="btn btn-success">Activo</button>
                                                    <?php } 
                                                    else { if(session('estatus_usuario')=='0')?>
                                                        <button class="btn btn-danger">Inactivo</button>
                                                    <?php } ?>
								                </div>
                                            </div>
                                        </div>

                                </div>
                                    
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-xl-8 col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-block">
                              <form class="form" action="#" method="POST">
                                <div class="form-body">
                                        <h4 class="form-section"><i class="icon-head"></i>Información Personal</h4>
                                        <div class="row">
                                            <input type="hidden" name="id" value="#">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Rol de Usuario</label>
                                                        <select id="projectinput6" name="rol" class="form-control">
                                                            <option value="0">Seleccionar</option>    
                                                            <?php foreach ($roles as $i) : ?>
                                                                <option value="<?php echo $i['id_rolU']?>"><?php echo $i['descripcion_rol']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
									                <label>Estatus:</label>
                                                    <select id="projectinput6" name="rol" class="form-control">
                                                        <option value="">Seleccionar</option> 
                                                        <option value="1">ACTIVO</option>    
                                                        <option value="0">INACTIVO</option>
                                                    </select>
								                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Username: </label>
                                                    <input type="text" name="username" id="username" value="<?php echo session('username')?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nombres: </label>
                                                    <input type="text" name="nombres" id="nombres" value="<?php echo session('Nombres')?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Apellidos: </label>
                                                    <input type="text" name="apellidos" id="apellidos" value="<?php echo session('Apellidos')?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email: </label>
                                                    <input type="email" name="email" id="email" value="<?php echo session('email')?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
									                <label>Foto perfil:</label>
									                <label id="projectinput7" class="file center-block">
										                <input type="file" id="file">
										                <span class="file-custom"></span>
									                </label>
								                </div>
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
                            </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


            
          </section>
<!-- // Charts section end -->
        </div>
      </div>
    </div>
<?php echo $this->endSection();?>
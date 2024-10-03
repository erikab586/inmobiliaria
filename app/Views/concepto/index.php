<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Conceptos</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <button type="button" class="btn btn-success upgrade-to-pro" data-toggle="modal" data-target="#inlineForm">
                    Nuevo</button>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="modal fade text-xs-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Crear Nuevo Concepto</label>
					</div>
					<form action="<?php echo base_url('/crearconcepto')?>" method="POST">
						<div class="modal-body">
                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Código: </label>
                                        <input type="text" name="codigo" id="codigo" placeholder="Ingresa Código" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Concepto: </label>
                                        <input type="text" name="descripcion" id="descripcion" placeholder="Ingresa concepto" class="form-control">
									</div>
								</div>
                            </div>
                        </div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-danger" data-dismiss="modal" value="Cerrar">
							<input type="submit" class="btn btn-success" value="Guardar">
						</div>
					</form>
				</div>
			</div>
		</div>
        <div class="content-body"><!-- Basic Tables start -->
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Concepto</h4>
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
                            <div class="card-block card-dashboard">
                                <p class="card-text">Listado de Conceptos </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Código</th>
                                            <th>Descripción</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    
                                            <?php foreach ($concepto as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_concepto'] ?></td>
                                                <td><?= $i['cod_concepto'] ?></td>
                                                <td><?= $i['descripcion'] ?></td>
                                                <td>
                                                    
                                                    <a class="btn btn-info btn-sm" href="<?php echo base_url('/editarconcepto')."/".$i['id_concepto']?>"><i class="icon-android-create"></i></</a>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('/eliminarconcepto')."/".$i['id_concepto']?>"><i class="icon-android-delete"></i></</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                           
                                    
                                    </tbody>
                                </table>
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
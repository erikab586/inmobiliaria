<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de IVA</h2>
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
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Crear Nuevo IVA</label>
					</div>
					<form action="<?php echo base_url('/creariva')?>" method="POST">
						<div class="modal-body">
							<label>Procentaje de IVA: </label>
							<div class="form-group">
								<input type="text" name="iva" id="iva" placeholder="Ingresa porcentaje de IVA" class="form-control">
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
                            <h4 class="card-title">IVA</h4>
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
                                <p class="card-text">Listado de IVA </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>IVA</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($iva as $i){ ?>
                                            <tr>
                                                <td><?=$i['id_iva'] ?></td>
                                                <td><?= $i['porcentaje'] ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a class="btn btn-info btn-sm"href="<?php echo base_url('/editariva')."/".$i['id_iva']?>"><i class="icon-android-create"></i></</a>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('/borrariva')."/".$i['id_iva']?>"><i class="icon-android-delete"></i></</a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                           
                                    
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
<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Contrato</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn btn-success upgrade-to-pro" href="<?php echo base_url('/crearcontrato')?>">
                    Nuevo Contrato</a>
                </li>
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
                            <h4 class="card-title">Contrato</h4>
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
                                <p class="card-text">Listado de Contrato </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Unidad</th>
                                            <th>Inquilino</th>
                                            <th>Fecha Termino</th>
                                            <th>Renta</th>
                                            <th>Estatus</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($contrato as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_contrato'] ?></td>
                                                <td><?= $i['codigo_unidad'] ?></td>
                                                <td><?= $i['nombres']." ".$i['apellidos'] ?></td>
                                                <td><?= $i['fecha_terminoContrato'] ?></td>
                                                <td><?= $i['renta_actual'] ?></td>
                                                <?php if($i['estatus']==1){?>
                                                <td><a href="#" target="_blank" class="btn btn-success btn-sm">ACTIVO</a></td>
                                                
                                                <?php } else{ ?>
                                                <td><a href="#" target="_blank" class="btn btn-danger btn-sm">INACTIVO</a></td>
                                                <?php }?>
                                                <td>
                                                    <button type="button" value="<?= $i['id_contrato'];?>" class="verContrato btn btn-success btn-sm"><i class="icon-eye6"></i></button>
                                                    <a class="btn btn-info btn-sm"href="<?php echo base_url('/editarcontrato')."/".$i['id_contrato']?>"><i class="icon-android-create"></i></</a>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('/eliminarcontrato')."/".$i['id_contrato']?>"><i class="icon-android-delete"></i></</a>
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
    <div class="modal fade text-xs-left" id="viewContrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Información de Contrato</label>
					</div>
					<form action="#">
						<div class="modal-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Id </label>
                                        <input type="text" name="id" id="id" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
								<div class="col-md-2">
                                    <div class="form-group">
                                        <label>SubCuenta </label>
                                        <input type="text" name="codInm" id="codInm" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
                                        <label>SubSubCuenta </label>
                                        <input type="text" name="codUni" id="codUni" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
                                        <label>Nombres </label>
                                        <input type="text" name="nombres" id="nombres" placeholder="Ingresar Nombres" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <label>Apellidos </label>
                                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingresar Apellidos" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-md-3">
									<div class="form-group">
                                        <label>Tiempo de Contrato </label>
                                        <input type="text" name="tiempoCont" id="tiempoCont" placeholder="Ingresar Password" class="form-control">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>Día de Pago </label>
                                        <input type="text" name="diaPago" id="diaPago" placeholder="Ingresar Email" class="form-control">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>Fecha de Contrato </label>
                                        <input type="date" name="fechaContrato" id="fechaContrato" placeholder="Ingresar Email" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <label>Final de Contrato </label>
                                        <input type="date" name="fechaTermCont" id="fechaTermCont" placeholder="Ingresar Password" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>Renta Inicial </label>
                                        <input type="text" name="rentaInicial" id="rentaInicial" placeholder="Ingresar Email" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <label>Renta Actual </label>
                                        <input type="text" name="rentaActual" id="rentaActual" placeholder="Ingresar Password" class="form-control">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>% de Incremento </label>
                                        <input type="text" name="porcIncremento" id="porcIncremento" placeholder="Ingresar Email" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <label>% Condición: </label>
                                        <input type="text" name="porCondicion" id="porcCondicion" placeholder="Ingresar Password" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>IVA </label>
                                        <input type="text" name="iva" id="iva" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label>Retencion ISR </label>
                                        <input type="text" name="isr" id="isr" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <label>Servicio</label>
                                        <input type="text" name="servicio" id="servicio" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>Estatus </label>
                                        <input type="estatus" name="estatus" id="estatus" placeholder="Ingresar Nombres" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
									<div class="form-group">
                                        <label>Condición de Incremento </label>
                                        <input type="incremento" name="incremento" id="incremento" placeholder="Ingresar Nombres" class="form-control">
									</div>
								</div>
                            </div>
                        </div>
						<div class="modal-footer">
						</div>
					</form>
				</div>
			</div>
		</div>
    <script type="application/javascript">
         // Obtén todos los botones con la clase "verUsuario"
        const botonesVerUsuario = document.querySelectorAll('.verContrato');

        // Agrega un escuchador de eventos a cada botón
        botonesVerUsuario.forEach((boton) => {
            boton.addEventListener('click', function() {
                
                const idContrato = boton.value;
                 fetch('<?php echo base_url("/buscarcontrato/") ?>' + idContrato)
                    .then(response => response.json())
                    .then(data => {
                        let id= data.dato.id;
                        let codInm= data.dato.inmueble;
                        let codUni= data.dato.unidad;
                        let nombres= data.dato.nombres;
                        let apellidos= data.dato.apellidos;
                        let fechCont= data.dato.fechaContrato;
                        let rentaInicial= data.dato.rentaInicial;
                        let porcIncremento= data.dato.incremento;
                        let porcCondicion= data.dato.porcCond;
                        let rentaActual= data.dato.rentaActual;
                        let tiempoCont= data.dato.tiempoCont;
                        let fechaTermCont= data.dato.fechaTermCont;
                        let diaPago= data.dato.diaPago;
                        let iva= data.dato.iva;
                        let isr= data.dato.retencion;
                        let condInc= data.dato.condInc;
                        let servicio= data.dato.estServ;
                        let incremento=data.dato.condInc;
                        let estatus= data.dato.estatus;
                        console.log(data.dato.monto);
                        $('#id').val(id);
                        $('#codInm').val(codInm);
                        $('#codUni').val(codUni);
                        $('#nombres').val(nombres);
                        $('#apellidos').val(apellidos);
                        $('#tiempoCont').val(tiempoCont);
                        $('#diaPago').val(diaPago + ' de cada mes');
                        $('#fechaContrato').val(fechCont);
                        $('#fechaTermCont').val(fechaTermCont);
                        $('#rentaInicial').val(rentaInicial);
                        $('#rentaActual').val(rentaActual);
                        $('#porcIncremento').val(porcIncremento);
                        $('#porcCondicion').val(porcCondicion);
                        $('#iva').val(iva);
                        $('#isr').val(isr);
                        $('#servicio').val(servicio);
                        $('#incremento').val(incremento);
                        $('#estatus').val(estatus);
                        $('#viewContrato').modal('show');
                    })  
                    .catch(error => {
                        console.log('Error al obtener datos');
                    });
            });
        });
    </script>
<?php echo $this->endSection();?>
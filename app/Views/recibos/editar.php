<?php echo $this->extend('layout/layoutwo.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Editar Contrato</h2>
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
                                <form class="form" action="<?php echo base_url('/guardarcontrato')?>" method="POST">
                                    <div class="form-body">
                                        <?php foreach($contrato as $item){?>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" id="id" value="<?= $item['id_contrato']?>" class="form-control">
                                                        <label for="projectinput6">Inmuebles</label>
                                                            <select id="projectinput6" name="inmueble" class="form-control">
                                                                <option value="<?php echo $item['id_inmueble']?>"><?php echo $item['codigo_inmueble']?></option>
                                                                <?php foreach ($inmueble as $i) : ?>
                                                                    <option value="<?php echo $i['id_inmueble']?>"><?php echo $i['codigo_inmueble']?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput6">Unidades</label>
                                                            <select id="projectinput6" name="unidad" class="form-control">
                                                                <option value="<?php echo $item['id_unidad']?>"><?php echo $item['codigo_unidad']?></option>
                                                                <?php foreach ($unidad as $i) : ?>
                                                                    <option value="<?php echo $i['id_unidad']?>"><?php echo $i['codigo_unidad']?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput6">Inquilinos</label>
                                                            <select id="projectinput6" name="inquilino" class="form-control">
                                                                <option value="<?= $item['id_inquilino']?>"><?php echo $item['nombres']." ".$item['apellidos']?></option>
                                                                <?php foreach ($inquilino as $i) : ?>
                                                                    <option value="<?php echo $i['id_inquilino']?>"><?php echo $i['nombres']." ".$i['apellidos']?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Contrato </label>
                                                        <input type="date" name="fecha_contrato" id="fecha_contrato" value="<?= $item['fecha_contrato']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Término </label>
                                                        <input type="date" name="fecha_termino" id="fecha_termino" value="<?= $item['fecha_terminoContrato']?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Renta Inicial </label>
                                                        <input type="text" name="inicial" id="inicial"  value="<?= $item['renta_inicial']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Renta Actual </label>
                                                        <input type="text" name="actual" id="actual"  value="<?= $item['renta_actual']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Día Pago </label>
                                                        <input type="text" name="diapago" id="diapago"  value="<?= $item['dia_pago']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>% Incremento </label>
                                                        <input type="text" name="incremento" id="incremento"  value="<?= $item['incremento']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>% Condición </label>
                                                        <input type="text" name="condicion" id="condicion" value="<?= $item['porcentaje_cond']?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>                       
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Tiempo Contrato </label>
                                                        <input type="text" name="tiempo" id="tiempo" value="<?= $item['tiempo_contrato']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Retencion ISR </label>
                                                        <input type="text" name="isr" id="isr" value="<?= $item['retencion_isr']?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                            <label for="projectinput6">IVA</label>
                                                            <select id="projectinput6" name="iva" class="form-control">
                                                                <?php   $selected = ($item['iva']) ? 'selected' : '';?>
                                                                <?php foreach ($iva as $i) : ?>
                                                                    <option value="<?php echo $i['porcentaje']?>"><?php echo $i['porcentaje']?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput6">Servicios</label>
                                                            <select id="projectinput6" name="servicio" class="form-control">
                                                                <?php   $selected = ($item['estatus_servicios']) ? 'selected' : '';?>
                                                                <option value="1">Pagar </option>
                                                                <option value="2">No Pagar</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput6">Estatus</label>
                                                            <select id="projectinput6" name="estatus" class="form-control">
                                                            <?php   $selected = ($item['estatus']) ? 'selected' : '';?>
                                                                <option value="1">Activo</option>
                                                                <option value="2">Inactivo</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Condición de Incremento </label>
                                                        <textarea name="observacion" id="observacion" class="form-control"><?= $item['cond_incremento']?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
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
<?php echo $this->extend('layout/layoutwo.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Editar Unidad</h2>
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
                                <form class="form" action="<?php echo base_url('/guardarunidad')?>" method="POST">
                                    <div class="form-body">
                                        <?php foreach($unidad as $item){?>
                                        <div class="row">
                                            <input type="hidden" name="id_unidad" id="id_unidad"  value="<?= $item['id_unidad']?>"class="form-control">
                                              
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Inmuebles</label>
                                                        <select id="projectinput6" name="inmueble" class="form-control">
                                                            <option value="<?= $item['id_inmueble']?>"><?= $item['codigo_inmueble']?></option>
                                                            <?php foreach ($inmueble as $i) : ?>
                                                                <option value="<?php echo $i['id_inmueble']?>"><?php echo $i['codigo_inmueble']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Tipo</label>
                                                        <select id="projectinput6" name="tipo" class="form-control">
                                                        <option value="<?= $item['id_tipo']?>"><?= $item['nombre_tipo']?></option>
                                                            <?php foreach ($tipo as $i) : ?>
                                                                <option value="<?php echo $i['id_tipo']?>"><?php echo $i['nombre_tipo']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Código Unidad </label>
                                                    <input type="text" name="codigo_unidad" id="codigo_unidad" value="<?= $item['codigo_unidad']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dim. Terreno </label>
                                                    <input type="text" name="dim_terreno" id="dim_terreno"  value="<?= $item['dim_terreno']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dim. Contrucción </label>
                                                    <input type="text" name="dim_construccion" id="dim_construccion"  value="<?= $item['dim_construccion']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Antiguedad</label>
                                                    <input type="text" name="antiguedad" id="antiguedad"  value="<?= $item['antiguedad']?>"class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Recamaras </label>
                                                    <input type="text" name="recamaras" id="recamaras"  value="<?= $item['recamaras']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Closets </label>
                                                    <input type="text" name="closets" id="closets" value="<?= $item['closets']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Baños </label>
                                                    <input type="text" name="baños" id="baños"  value="<?= $item['baños']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° MediosBaños </label>
                                                    <input type="text" name="medios_baños" id="medios_baños"  value="<?= $item['medios_baños']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Estudios </label>
                                                    <input type="text" name="estudios" id="estudios"  value="<?= $item['estudios']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Área Servicio </label>
                                                    <input type="text" name="area_servicio" id="area_servicio"  value="<?= $item['area_servicio']?>"class="form-control">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Cuarto Servicio </label>
                                                    <input type="text" name="num_cuarto_servicio" id="num_cuarto_servicio"  value="<?= $item['cuartos_servicio']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Estacionamiento </label>
                                                    <input type="text" name="num_estacionamiento" id="num_estacionamiento"  value="<?= $item['estacionamiento']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Lugar Estacionamiento </label>
                                                    <input type="text" name="lugar_estacionamiento" id="lugar_estacionamiento"  value="<?= $item['num_estacionamiento']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cocina Equipada</label>
                                                        <select id="projectinput6" name="cocina_equipada" class="form-control">
                                                        <?php if ($item['cocina_equipada']==1): ?>
                                                            <option value="1">Si</option>
                                                        <?php endif ?>
                                                        <?php if($item['cocina_equipada']==2): ?>
                                                            <option value="2">No</option>
                                                        <?php endif ?>      
                                                            <option value="1">Si </option>
                                                            <option value="2">No</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Vigilancia</label>
                                                        <select id="projectinput6" name="vigilancia" class="form-control">
                                                        <?php if ($item['vigilancia']==1): ?>
                                                            <option value="1">Si</option>
                                                        <?php endif ?>
                                                        <?php if($item['vigilancia']==2): ?>
                                                            <option value="2">No</option>
                                                        <?php endif ?>  
                                                            <option value="1">Si</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cisterna</label>
                                                        <select id="projectinput6" name="cisterna" class="form-control">
                                                        <?php if ($item['cisterna']==1): ?>
                                                            <option value="1">Si</option>
                                                        <?php endif ?>
                                                        <?php if($item['cisterna']==2): ?>
                                                            <option value="2">No</option>
                                                        <?php endif ?>  
                                                            <option value="1">Si</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Plantas</label>
                                                    <input type="text" name="plantas" id="plantas"  value="<?=$item['num_plantas']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Nivel/Piso</label>
                                                    <input type="text" name="nivel" id="nivel"  value="<?=$item['piso_nivel']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Tipo Jardín</label>
                                                    <input type="text" name="jardin" id="jardin" value="<?=$item['tipo_jardin']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Elevadores</label>
                                                    <input type="text" name="elevadores" id="elevadores" value="<?=$item['cant_elevadores']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Amenidades</label>
                                                    <input type="text" name="amenidades" id="amenidades"  value="<?=$item['amenidades']?>"class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Otras Caracteristicas</label>
                                                    <textarea type="text" name="caracteristicas" id="caracteristicas"  class="form-control"><?=$item['otras_caracteristicas']?></textarea>
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
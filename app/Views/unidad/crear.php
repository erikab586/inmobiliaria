<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Nuevo Unidad</h2>
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
                                <form class="form" action="<?php echo base_url('/nuevaunidad')?>" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Inmuebles</label>
                                                        <select id="projectinput6" name="inmueble" class="form-control">
                                                            <option value="0" selected="" disabled="">Seleccionar</option>
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
                                                            <option value="0" selected="" disabled="">Seleccionar</option>
                                                            <?php foreach ($tipo as $i) : ?>
                                                                <option value="<?php echo $i['id_tipo']?>"><?php echo $i['nombre_tipo']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Código Unidad </label>
                                                    <input type="text" name="codigo_unidad" id="codigo_unidad"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dim. Terreno </label>
                                                    <input type="text" name="dim_terreno" id="dim_terreno"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dim. Contrucción </label>
                                                    <input type="text" name="dim_construccion" id="dim_construccion"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Antiguedad</label>
                                                    <input type="text" name="antiguedad" id="antiguedad"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Recamaras </label>
                                                    <input type="text" name="recamaras" id="recamaras"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Closets </label>
                                                    <input type="text" name="closets" id="closets"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Baños </label>
                                                    <input type="text" name="baños" id="baños"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° MediosBaños </label>
                                                    <input type="text" name="medios_baños" id="medios_baños"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Estudios </label>
                                                    <input type="text" name="estudios" id="estudios"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Área Servicio </label>
                                                    <input type="text" name="area_servicio" id="area_servicio"  class="form-control">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Cuarto Servicio </label>
                                                    <input type="text" name="num_cuarto_servicio" id="num_cuarto_servicio"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Estacionamiento </label>
                                                    <input type="text" name="num_estacionamiento" id="num_estacionamiento"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Lugar Estacionamiento </label>
                                                    <input type="text" name="lugar_estacionamiento" id="lugar_estacionamiento"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cocina Equipada</label>
                                                        <select id="projectinput6" name="cocina_equipada" class="form-control">
                                                            <option value="0" selected="" disabled="">Seleccionar</option>
                                                            <option value="1">Si </option>
                                                            <option value="2">No</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Vigilancia</label>
                                                        <select id="projectinput6" name="vigilancia" class="form-control">
                                                            <option value="0" selected="" disabled="">Seleccionar</option>
                                                            <option value="1">Si</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cisterna</label>
                                                        <select id="projectinput6" name="cisterna" class="form-control">
                                                            <option value="0" selected="" disabled="">Seleccionar</option>
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
                                                    <input type="text" name="plantas" id="plantas"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Nivel/Piso</label>
                                                    <input type="text" name="nivel" id="nivel"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Tipo Jardín</label>
                                                    <input type="text" name="jardin" id="jardin"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Elevadores</label>
                                                    <input type="text" name="elevadores" id="elevadores"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Amenidades</label>
                                                    <input type="text" name="amenidades" id="amenidades"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Otras Caracteristicas</label>
                                                    <textarea type="text" name="caracteristicas" id="caracteristicas"  class="form-control"></textarea>
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
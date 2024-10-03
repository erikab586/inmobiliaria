<?php echo $this->extend('layout/layoutwo.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Historial</h2>
          </div>
          <!--div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn btn-success upgrade-to-pro" href="<?php echo base_url('/crearcontrato')?>">
                    Nuevo Contrato</a>
                </li>
              </ol>
            </div>
          </div-->
        </div>
        
        <div class="content-body"><!-- Basic Tables start -->
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Historial</h4>
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
                                <p class="card-text">Historial </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Unidad</th>
                                            <th>Inquilino</th>
                                            <th>Fecha</th>
                                            <th>Concepto</th>
                                            <th>Periodo</th>
                                            <th>Mora</th>
                                            <th>Cobranza</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($historial as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_cobranza'] ?></td>
                                                <td><?= $i['codigo_unidad'] ?></td>
                                                <td><?= $i['nombres']." ".$i['apellidos'] ?></td>
                                                <td><?= $i['fecha'] ?></td>
                                                <td><?= $i['concepto'] ?></td>
                                                <td><?= $i['periodo'] ?></td>
                                                <td><?= $i['mora'] ?></td>
                                                <td><?= $i['cobranza'] ?></td>
                                                
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
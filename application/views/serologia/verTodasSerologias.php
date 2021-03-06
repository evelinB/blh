<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Serologias de un Consentimiento
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Consentimiento</a></li>
         <li class="active">Serología </li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
      <!-- Consentimiento -->
      <div class="form-group">
      <label for="consentimiento" class="col-lg-2 control-label">Nro de Consentimiento</label>
      <div class="col-lg-1">
         <input type="text" class="form-control" id="consentimiento" disabled=""
            value="<?php echo $unConsentimiento[0]->nroConsentimiento;?>">
      </div>
      <div class="form-group">
         <label for="consentimiento" class="col-lg-2 control-label">Nombre de Madre Donante</label>
         <div class="col-lg-2">
            <input name="nombreDonante" type="text"  id="campoDeshabilitado" disabled="" class="col-lg-2 form-control" 
               value="<?php echo $unaDonante[0]->nombre;
                  echo " ";
                  echo $unaDonante[0]->apellido;
                  ?>">
         </div>
         <BR>
         <div class="col-xs-12">
            <div class="box">
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>Fecha de Serologia</th>
                           <th>Fecha de Carga</th>
                           <th>Estado de Serologia</th>
                           <th>Observaciones</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($todasLasSerologias as $key => $value) :

                           /*
                           $fechaArray = explode('-', $value->fechaSerologia);
                           $date = new DateTime();
                           $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                           $fecha= $date->format('d-m-Y');

                           //Fecha Carga
                           $fechaArray = explode('-', $value->fechaCarga);
                           $date = new DateTime();
                           $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                           $fechaCarga= $date->format('d-m-Y');
                           */

                            ?>
                        <tr>
                           <td colspan="" rowspan="" headers=""><?php echo $value->fechaSerologia //$fecha ?></td>
                           <td colspan="" rowspan="" headers=""><?php echo $value->fechaCarga //$fechaCarga?></td>
                           <td colspan="" rowspan="" headers=""><?php echo $value->estadoSerologia?></td>
                           <td colspan="" rowspan="" headers=""><?php echo $value->observaciones?></td>
                           <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url();?>index.php/cserologia/view/verUnaSerologia/<?php echo $value->nroSerologia; ?>" 
                                 title="registrar serologia">Ver resultados</a>
                           </td>
                        </tr>
                        <?php endforeach ?>
                     </tbody>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
   <!-- /.content -->    
</aside>
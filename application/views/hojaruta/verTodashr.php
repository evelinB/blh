<aside class="right-side">
<!-- section header -->
<section class="content-header">
  <h1>
         Ver todas las Hojas de Rutas
  </h1>

	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="#">Hoja de Ruta</a></li>
		<li class="active">Ver hoja de ruta Historico</li>
	</ol>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
	<div >
		<!-- este boton deberia ir a generar una nueva hoja de ruta, 
		pero para semana entera -->
		<a href="<?php echo base_url();?>index.php/chojaderuta/view/verhrSemanal" class="btn btn-success" role="button">
		Ver Hojas de Ruta por semana
		</a>
	</div>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
	 
	 <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Id HR</th>
                              <th>F. de Creacion</th>
                              <th>F. de Recorrido</th>
                              <th>F. Efectiva</th>
                              <th>F. Ultima Modif</th>
                              <th>Chofer</th>
                              <th>Asistente</th>
                              <th>Observaciones</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($hojasdeRuta as $value) :?>
                         <tr>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value-> ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td> 
                            <td colspan="" rowspan="" headers="">
                              <a href="#"
                                class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="#"
                                  class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section>  <!-- fin section body -->

</aside><!-- /.right-side -->

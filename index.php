<?php
    require_once("ModeloUsuarios.php");
    require_once("driver.php");
    require_once("view.php");
    validarSession("any");
    
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>ReportaTec - Inicio</title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		
    </head>

	<body>
		<?php
            printTopbar();
        ?>
		<div class="container CScontenedor">
            <!--
            Progress bar
            -->
            <div class="row">
            	<div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Reportes del sistema: </h3>
                        </div>
                        <div class="panel-body">        
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 55%">
                                    <span class="sr-only">55% Complete (success)</span>
                                </div>
                                <div class="progress-bar progress-bar-warning" style="width: 25%">
                                    <span class="sr-only">25% Complete (warning)</span>
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: 15%">
                                    <span class="sr-only">15% Complete (danger)</span>
                                </div>
                                <div class="progress-bar progress-bar-info" style="width: 5%">
                                    <span class="sr-only">5% Complete (info)</span>
                                </div>
                            </div>
                            <span class="label label-success">Resuelto</span>
                            <span class="label label-warning">Confirmados</span>
                            <span class="label label-danger">En revisión</span>
                            <span class="label label-info">No válidos</span>  
                            Reportes: 
                            <strong>
                            <?php 
                                $numReportes = count(getReportes());
                                $numResueltos = count(getResueltos());
                                print $numReportes;
                            ?>
                            </strong>
                            Efectividad: 
                            <strong>
                            <?php
                                print ($numResueltos/$numReportes)*100; print "%";
                            ?>
                            </strong>
                        </div>
                    </div>     
                </div>
            </div>
            <!--
            Termina Progress bar
            -->
            <div class="row">
            	<!--
                SIDEBAR
                -->
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <?php
                            printProfile();
                        ?>
                    </div>
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Búsqueda</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
                                            </div><!-- /btn-group -->
                                        </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                            </form>
                        </div>
                    </div><!-- Busqueda -->
                    <!-- Mis reporte -->
                    <div class="panel panel-primary">
                        <?php
                            printReportesUsuario();
                        ?>
                    </div>
                    <!-- /Mis reportes -->
                </div><!-- /.sidebar -->
                <!--
                CONTENIDO
                -->
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                        	Reportes
                        </div>
                        <div class="panel-body">
                        <!-- Table -->
                        <table class="table table-hover">
                        	<thead>
                          		<tr>
                            		<th>#</th>
                                    <th>Reporte</th>
                                    <th>Descripción</th>
                                    
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                        	</thead>
                            <tbody>
                                <?php
                                    $reportes = getReportes();
                                    foreach ($reportes as $reporte){
                                        print '<tr class="'; 
                                        print getColorEstado($reporte->estadoReporte); 
                                        print '">
                                            <td>'.$reporte->id.'</td>
                                            <td>'.$reporte->titulo.'</td>
                                            <td>'.$reporte->descripcion.'</td>
                                            <td>'.$reporte->estadoReporte.'</td>
                                            <td class="CScentrar">
                                                <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                        <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>
                                            </td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                
                
            </div>	
		</div><!-- /.container -->
		
        <!--
        Modal - Capturar reporte
        -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Reporta tu problema</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputProblem" class="col-lg-2 control-label">Problema</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputProblem" placeholder="¿Cuál es tu problema?">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDetail" class="col-lg-2 control-label">Descripción</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="inputDetail" rows="3" placeholder="Cuéntanos un poco más..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPlace" class="col-lg-2 control-label">Lugar</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputPlace" placeholder="¿Dónde ocurrió?">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
				$("[rel='tooltip']").tooltip();
            });
        </script>
        
        <script>
			function active(){
				if($('#userMenu').hasClass('active'))
					$('#userMenu').removeClass('active');
				else
					$('#userMenu').addClass('active');
			}
		</script>
        </body>
  	</body>
</html>

<?php
    require_once("ModeloUsuarios.php");
    require_once("ModeloAdmin.php");
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
            <div class="row">
            	<!--
                SIDEBAR
                -->
                <div class="col-md-3">
                    
                    <?php
                    if($_SESSION["usuario"]->tipo == "user")
                        printProfile();
                    ?>
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
                    <?php
                        if($_SESSION["usuario"]->tipo == "user")
                            printReportesUsuario();
                    ?>
                    <!-- /Mis reportes -->
                </div><!-- /.sidebar -->
                <!--
                CONTENIDO
                -->
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <?php
                            printReportesProgreso();
                        ?>
                    </div>
                    <div class="panel panel-primary">
                        <?php
                         printReportesGeneral();
                        ?>
                    </div>
                </div>
            </div>	
		</div><!-- /.container -->
		<!--
            <td class="CScentrar">
                <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>
                <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>
            </td>
        -->
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
                    <form class="form-horizontal" role="form" action="acciones.php" method="post">
                        <input type="hidden" name="nuevoReporte" value="nuevoReporte">
                    <div class="modal-body">
                        <!--<form class="form-horizontal" role="form" action="acciones.php" method="post">-->
                            <div class="form-group">
                                <label for="inputProblem" class="col-lg-2 control-label">Problema</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputProblem" name="inputProblem" placeholder="¿Cuál es tu problema?">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDetail" class="col-lg-2 control-label">Descripción</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="inputDetail" name="inputDetail" rows="3" placeholder="Cuéntanos un poco más..."></textarea>
                                </div>
                            </div>
                        <!--</form>-->
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar Reporte</button>
                    </div>
                    </form>
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
            $("button").click(function(){
                if($(this).attr("id") == "tooltip"){
                    var reporte = "#Estatus"+ ($(this).attr("reporte"));
                    var departamento = "#Departamento"+ ($(this).attr("reporte"));
                    $(reporte).html("<select><option>En revisión</option><option>Confirmado</option><option>Resuelto</option></select>");
                    $(departamento).html("<select><option>Informática</option><option>Planta física</option></select>");
                    $(this).html("<span class='glyphicon glyphicon-floppy-disk'></span>");
                }
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

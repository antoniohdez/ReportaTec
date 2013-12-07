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
                    <form class="form-horizontal" role="form" action="accionesUser.php" method="post">
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
                $("[rel='tooltipGuardar']").tooltip();
                $("[rel='tooltipGuardar']").hide();
            });
        </script>
        <script>
            function selectedOption(option){
                $('#estatusOption'+option).change(function() {
                    var selectVal = $('#estatusOption'+option+' :selected').val();
                    return selectVal;
                });
            }

            function getSelectEstatus(id, option){
                var html = "<select id=estatusOption"+id+">";
                if(option == "En revisión"){
                    html += "<option selected='selected'>En revisión</option>";
                    html += "<option>Confirmado</option><option>Resuelto</option>";
                }else if(option == "Confirmado"){
                    html += "<option>En revisión</option>";
                    html += "<option selected='selected'>Confirmado</option>";
                    html += "<option>Resuelto</option>";
                }else if(option == "Resuelto"){
                    html += "<option>En revisión</option><option>Confirmado</option>";
                    html += "<option selected='selected'>Resuelto</option>";
                }
                html += "</select>";
                return html;
            }

            function getSelectDepartamento(id, option){
                var html = "<select id=Departamento"+id+">";
                if(option == "Informática"){
                    html += "<option>No asignado</option>";
                    html += "<option selected='selected'>Informática</option>";
                    html += "<option>Planta física</option>";
                }else if(option == "Planta física"){
                    html += "<option>No asignado</option>";
                    html += "<option>Informática</option>";
                    html += "<option selected='selected'>Planta física</option>";
                }else if(option == "No asignado"){
                    html += "<option selected='selected'>No asignado</option>";
                    html += "<option>Informática</option>";
                    html += "<option>Planta física</option>";
                }
                else{
                    html += "<option selected='selected'>No asignado</option>";
                    html += "<option>Informática</option>";
                    html += "<option>Planta física</option>";   
                }
                html += "</select>";
                return html;

            }

            $("button").click(function(){
                if($(this).attr("id") == "tooltip"){
                    var id = ($(this).attr("reporte"));
                    var reporte = "#Estatus"+ id;
                    var departamento = "#Departamento"+ id;
                    var estatusVal = $(reporte).text();
                    var departamentoVal = $(departamento).text();
                    
                    $(reporte).html(getSelectEstatus(id, estatusVal));
                    $(departamento).html(getSelectDepartamento(id, departamentoVal));
                    $(this).hide();
                    $("[guardar*="+id+"]").show();

                    
                    //selectedOption(($(this).attr("reporte")));

                }else if($(this).attr("id") == "tooltipGuardar"){
                    var id = ($(this).attr("guardar"));
                    var reporte = "#Estatus"+ id;
                    var departamento = "#Departamento"+ id;
                                
                    var estatus = $('#estatusOption'+id+' :selected').val();
                    var asignacion = $('#Departamento'+id+' :selected').val();
                    var button = $(this);
                    var parametros = {
                        "id" : id,
                        "estatus" : estatus,
                        "departamento" : asignacion
                    }
                    $.ajax({
                        data: parametros,
                        url: 'accionesAdmin.php',
                        type: 'post',
                        beforeSend: function () {
                            //$("#button").html("Saving point...");
                        },
                        success:  function (response) {
                            //$("#button").html("Done!");
                            if(response == "success"){

                                $(reporte).html(estatus);
                                $(departamento).html(asignacion);
                                button.hide();
                                $("[reporte*="+id+"]").show();
                            }
                            else {
                                alert(response);
                                alert("Ocurrió un error al editar el reporte #" + id);
                            }
                        }
                    });

                    
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

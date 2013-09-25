<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>ReportaTec - Inicio</title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
    </head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">ReportaTec</a>
				</div>
				<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#myModal" data-toggle="modal" style="color:#FFF"><b>Reportar</b></a></li>
					</ul>            
                    <ul class="nav navbar-nav navbar-right">
      					
      					<li class="dropdown" id="userMenu">
        					<a href="#" id="user" onClick="active()" class="dropdown-toggle" data-container="body" data-toggle="popover" data-placement="bottom" data-content="" data-original-title="" title=""><span class="glyphicon glyphicon-user">&nbsp;</span>A01234567<b class="caret"></b></a>
      					</li>
    				</ul> 
				</div><!--/.nav-collapse -->
			</div>
		</div>
		
		<div class="container CScontenedor">
            <!--
            Progress bar
            -->
            <div class="row">
            	<div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Reportes de la última semana: </h3>
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
                            Reportes: <strong>127</strong>
                            Efectividad: <strong>55%</strong>
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
                        <div class="panel-heading">
                            <h3 class="panel-title">Búsqueda</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                            	<input type="search" class="form-control search-query CSinputSearch" id="inputProblem" placeholder="Busca un reporte...">
                     
                                 
                                
                                <button type="submit" class="btn btn-primary CSbuttonSearch">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button> 
                                  
                                
                            </form>
                        </div>
                    </div><!-- Busqueda -->
                    <!-- Mis reporte -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Mis reportes</h3>
                        </div>
                        <div class="panel-body">
                            
                            
                            <table class="table table-hover">
                        	<thead>
                          		<tr>
                            		<th>#</th>
                                    <th>Reporte</th>
                                    
                                    <th>Acciones</th>
                                </tr>
                        	</thead>
                            <tbody>
                              	<tr class="danger">
                                	<td>1</td>
                                	<td>Impresora</td>
                                	
                                    <td>
                                    	<button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                    </td>
                              	</tr>
                              	<tr class="warning">
                                	<td>2</td>
                                	<td>Sistema de tesorería lento</td>
                                	<td>
                                    	<button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                    </td>
                              	</tr>
                                <tr class="success">
                                	<td>3</td>
                                	<td>Silla rota</td>
                                    <td>
                                    	<button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                    </td>
                              	</tr>
                            </tbody>
                        </table>
                            
                            
                            
                        </div>
                    </div>
                    <!-- /Mis reportes -->
                    <script type="text/javascript">
                		document.write(window.innerWidth+'x'+window.innerHeight+'<br>');
                		document.write('320x480');
            		</script>
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
                        
                        <!-- Table -->
                        <table class="table table-hover">
                        	<thead>
                          		<tr>
                            		<th>#</th>
                                    <th>Reporte</th>
                                    <th>Descripción</th>
                                    <th>Lugar</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                        	</thead>
                            <tbody>
                              	<tr class="danger">
                                	<td>1</td>
                                	<td>Impresora</td>
                                	<td>La impresora 2 no tiene hojas.</td>
                                	<td>Biblioteca</td>
                                    <td>En revisión</td>
                                    <td>
                                    	<button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                        <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>
                                    </td>
                              	</tr>
                              	<tr class="warning">
                                	<td>2</td>
                                	<td>Sistema de tesorería lento</td>
                                	<td>Cuando entro a la página de tesorería tarda mucho en cargar.</td>
                                	<td>www.gda.itesm.mx/tesoreria</td>
                                    <td>Confirmado</td>
                                    <td>
                                    	<button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                        <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>
                                    </td>
                              	</tr>
                                <tr class="success">
                                	<td>3</td>
                                	<td>Silla rota</td>
                                	<td>En el aula 1234 hay una sillas rota desde hace dos semanas.</td>
                                	<td>Aula 1234</td>
                                    <td>Resuelto</td>
                                    <td>
                                    	<button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                        <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>
                                    </td>
                              	</tr>
                            </tbody>
                        </table>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
				$("[rel='tooltip']").tooltip();
            });
        </script>
        
        <div id="popover_content_wrapper" style="display: none;">
  			<div style="float:left; margin-right:10px; margin-top:3px;">
            	<img src="img/profile.png">
            </div>
            <div style="float:right">
                <div>Antonio Hernández Campos</div>
                <div>A01234567</div>
                <div>Karma: 4.3</div>
            </div>
            <div style=" margin:65px -15px -10px -15px; border-radius:0px 0px 5px 5px; padding:10px; background-color:#EEE;">
            	<a class="btn btn-default">Salir</a>
            </div>
		</div>
        <script>
        	$(function () {
				$('#user').popover({ 
					html : true, 
					content: function() {
						return $('#popover_content_wrapper').html();
					}
				});
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

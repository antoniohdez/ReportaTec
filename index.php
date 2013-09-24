
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>ReportaTec</title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

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
						<li><a href="#profile">Mis Reportes</a></li>
                        <li><a href="#myModal" data-toggle="modal">Reportar<</a></li>
					</ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                    	
      					<li><a href="#">A01234567</a></li>
      					<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Más <b class="caret"></b></a>
        					<ul class="dropdown-menu">
          						<li><a href="#">Ayuda</a></li>
                                <li role="presentation" class="divider"></li>
          						<li><a href="#">Cerrar Sesión</a></li>
        					</ul>
      					</li>
    				</ul>
                    
				</div><!--/.nav-collapse -->
			</div>
		</div>
		
		<div class="container" style="margin-top:70px;">
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
                            <span class="label label-success">Completados</span>
                            <span class="label label-warning">Confirmados</span>
                            <span class="label label-danger">En revisión</span>
                            <span class="label label-info">No válidos</span>  
                            Reportes: <strong>127</strong>
                            Efectividad: <strong>55%</strong>
                        </div>
                    </div>     
                </div>
            </div>
			
            <div class="row">
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
                                    <th>Detalles</th>
                                    <th>Lugar</th>
                                    <th>Estatus</th>
                                </tr>
                        	</thead>
                            <tbody>
                              	<tr class="success">
                                	<td>1</td>
                                	<td>Impresora sin papel</td>
                                	<td></td>
                                	<td>Biblioteca</td>
                                    <td>Resuelto</td>
                                    <td></td>
                              	</tr>
                              	<tr class="warning">
                                	<td>2</td>
                                	<td>Sistema de tesorería lento</td>
                                	<td>Cuando entro a la página de tesorería tarda mucho en cargar.</td>
                                	<td>www.gda.itesm.mx/tesoreria</td>
                                    <td>En revisión</td>
                                    <td></td>
                              	</tr>
                                <tr class="success">
                                	<td>3</td>
                                	<td>Silla rota</td>
                                	<td>En el aula 1234 hay una sillas rota desde hace dos semanas.</td>
                                	<td>Aula 1234</td>
                                    <td>Resuelto</td>
                                    <td></td>
                              	</tr>
                              	<tr class="danger">
                                	<td>4</td>
                                	<td>Larry</td>
                                	<td>the Bird</td>
                                	<td>@twitter</td>
                                    <td>Confirmado</td>
                                    <td></td>
                              	</tr>
                                <tr class="success">
                                	<td>5</td>
                                	<td>Mark</td>
                                	<td>Otto</td>
                                	<td>@mdo</td>
                                    <td>Resuelto</td>
                                    <td></td>
                              	</tr>
                                <tr class="danger">
                                	<td>6</td>
                                	<td>Larry</td>
                                	<td>the Bird</td>
                                	<td>@twitter</td>
                                    <td>Confirmado</td>
                                    <td></td>
                              	</tr>
                                <tr class="warning">
                                	<td>7</td>
                                	<td>Jacob</td>
                                	<td>Thornton</td>
                                	<td>@fat</td>
                                    <td>En revisión</td>
                                    <td></td>
                              	</tr>
                                <tr class="success">
                                	<td>8</td>
                                	<td>Mark</td>
                                	<td>Otto</td>
                                	<td>@mdo</td>
                                    <td>Resuelto</td>
                                    <td></td>
                              	</tr>
                                <tr class="danger">
                                	<td>9</td>
                                	<td>Larry</td>
                                	<td>the Bird</td>
                                	<td>@twitter</td>
                                    <td>Confirmado</td>
                                    <td></td>
                              	</tr>
                                <tr class="warning">
                                	<td>10</td>
                                	<td>Jacob</td>
                                	<td>Thornton</td>
                                	<td>@fat</td>
                                    <td>En revisión</td>
                                    <td></td>
                              	</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--
                SIDEBAR
                -->
                <div class="col-md-3">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Búsqueda</h3>
                        </div>
                        <div class="panel-body">   
                            <div class="form-group">
                                <div style="float:left">
                                   <input type="search" class="form-control" id="inputProblem" placeholder="Encuentra un reporte..." style="border-top-right-radius:0px; border-bottom-right-radius:0px">
                                </div>
                                <button type="button" class="btn btn-primary" style="border-top-left-radius:0px; border-bottom-left-radius:0px">
                                	<span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </div><!-- Busqueda -->
                    <script type="text/javascript">
                		document.write(window.innerWidth+'x'+window.innerHeight+'<br>');
                		document.write('320x480');
            		</script>
                </div><!-- /.sidebar -->
                
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
                                <label for="inputDetail" class="col-lg-2 control-label">Detalles</label>
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
  	</body>
</html>

<?php
	function printTopbar(){
		print '<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
					<div class="navbar-header">
					';
				if(isset($_SESSION["usuario"])){
					print '
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>';
				}
				print '
						<a class="navbar-brand" href="#">ReportaTec</a>
					</div>
					';
				if(isset($_SESSION["usuario"])){
					print '
					<div class="collapse navbar-collapse">
	                    <ul class="nav navbar-nav">
							<li class="active"><a href="#">Inicio</a></li>
	                        <li><a href="#myModal" data-toggle="modal"><b>Reportar</b></a></li>
						</ul>            
	                    <ul class="nav navbar-nav navbar-right">
			  					<li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> '.$_SESSION["usuario"]->matricula.' <b class="caret"></b></a>
			                        <ul class="dropdown-menu">
			                            <li><a href="logout.php">Cerrar sesión</a></li>
			                        </ul>
			                    </li>
							</ul> 
					</div><!--/.nav-collapse -->
					';
				}
				print '
			</div>
		</div>';
	}

	function printProfile(){
		print '<div class="panel-heading">
	                <h3 class="panel-title">'.$_SESSION["usuario"]->nombre.' '.$_SESSION["usuario"]->apellidoP.' '.$_SESSION["usuario"]->apellidoM.'</h3>
	            </div>
	            <div class="panel-body">
	                <table class="table">
	                    <tbody>
	                        <tr>
	                            <td>Karma: </td>
	                            <td>'.$_SESSION["usuario"]->karma.'</td>
	                        </tr>
	                        <tr>
	                            <td>Reportes:</td>
	                            <td>'.count($_SESSION["usuario"]->reportes).'</td>
	                        </tr>
	                        <tr>
	                            <td>Resueltos:</td>
	                            <td>'.count($_SESSION["usuario"]->getReportesResueltos()).'</td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>'
		;
	}

	function printReportesUsuario(){
		$_SESSION["usuario"]->recargarReportes();
		print '<div class="panel-heading">
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
                                <tbody>';
                                    foreach ($_SESSION["usuario"]->reportes as $reporte){
                                        print '<tr class="'; 
                                        print getColorEstado($reporte->estadoReporte); 
                                        print '">
                                            <td>'.$reporte->id.'</td>
                                            <td>'.$reporte->titulo.'</td>
                                            <td class="CScentrar">
                                                <button type="button" class="btn btn-xs btn-primary" id="tooltip" rel="tooltip" title="Detalles"><span class="glyphicon glyphicon-align-justify"></span></button>                                
                                            </td>
                                        </tr>';
                                    }
                                    
                                  	print '
                                </tbody>
                            </table>
                        </div>';
	}
?>
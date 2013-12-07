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
		  					<li>
		                        <a href="logout.php">Cerrar sesión</a>
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
	                            <td>Matrícula: </td>
	                            <td>'.$_SESSION["usuario"]->matricula.'</td>
	                        </tr>
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
                                
                                <th>Estatus</th>
                            </tr>
                    	</thead>
                        <tbody>';
                            foreach ($_SESSION["usuario"]->reportes as $reporte){
                                print '<tr class="'; 
                                print getColorEstado($reporte->estadoReporte); 
                                print '">
                                    <td>'.$reporte->id.'</td>
                                    <td>'.$reporte->titulo.'</td>
                                    <td>'.$reporte->estadoReporte.'</td>
                                </tr>';
                            }
                            
                          	print '
                        </tbody>
                    </table>
                </div>';
	}

	function printReportesGeneral(){
		print '<div class="panel-heading">
                    <h3 class="panel-title">Reportes del sistema: </h3>
                </div>
                <div class="panel-body">        
                    <div class="progress">';
                    $numReportes = count(getReportes());
                    $numConfirmados = count(getConfirmados());
                    $numResueltos = count(getResueltos());
                    $resueltos = round(($numResueltos/$numReportes)*100);
                    $enProgreso = round(($numConfirmados/$numReportes)*100);
                    $enRevision = 100-($resueltos+$enProgreso);
                    print'
                        <div class="progress-bar progress-bar-success" style="width: '.$resueltos.'%">
                            <span class="sr-only"></span>
                        </div>
                        <div class="progress-bar progress-bar-warning" style="width: '.$enProgreso.'%">
                            <span class="sr-only"></span>
                        </div>
                        <div class="progress-bar progress-bar-danger" style="width: '.$enRevision.'%">
                            <span class="sr-only">15% Complete (danger)</span>
                        </div>
                        <!--
                        <div class="progress-bar progress-bar-info" style="width: 5%">
                            <span class="sr-only">5% Complete (info)</span>
                        </div>
                        -->
                    </div>
                    <span class="label label-success">Resuelto</span>
                    <span class="label label-warning">Confirmados</span>
                    <span class="label label-danger">En revisión</span>
                    <span class="label label-info">No válidos</span>  
                    Reportes: 
                    <strong>';
                    
                        print $numReportes.'
                    </strong>
                    Efectividad: 
                    <strong>';
                        print $resueltos; print "%".'
                    </strong>
                </div>

		';
	}
?>
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
						<a class="navbar-brand" href="index.php">ReportaTec</a>
					</div>
					';
				if(isset($_SESSION["usuario"])){
					print '
					<div class="collapse navbar-collapse">
	                    <ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Inicio</a></li>';
							if($_SESSION["usuario"]->tipo == "user")
	                        print '<li><a href="#myModal" data-toggle="modal"><b>Reportar</b></a></li>';
	                    print '
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

		print '<div class="panel panel-primary">
				<div class="panel-heading">
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
	            </div>
	        </div>'
		;
	}

	function printReportesUsuario(){
		$_SESSION["usuario"]->recargarReportes();
		print '<div class="panel panel-primary">
				<div class="panel-heading">
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
                </div>
            </div>';
	}

	function printReportesProgreso(){
		print '<div class="panel-heading">
                    <h3 class="panel-title">Resumen de reportes: </h3>
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
                    <!--<span class="label label-info">No válidos</span> --> 
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

	function printEstadoSistema(){
		$confirmados = count(getConfirmados());
		$resueltos = count(getResueltos());
		$totalReportes = count(getReportes());
		$enRevision = $totalReportes - $resueltos - $confirmados;

		print '<div class="panel panel-primary">
				<div class="panel-heading">
                    <h3 class="panel-title">Resumen del sistema</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                    	<thead>
                      		
                    	</thead>
                        <tbody>
                        	<tr>
	                            <td>En revisión:</td>
	                            <td class="CScentrar">'.$enRevision.'</td>
	                        </tr>
                        	<tr>
	                            <td>Confirmados:</td>
	                            <td class="CScentrar">'.$confirmados.'</td>
	                        </tr>
	                        <tr>
	                            <td>Resueltos:</td>
	                            <td class="CScentrar">'.$resueltos.'</td>
	                        </tr>
	                        <tr>
	                            <td>Total reportes:</td>
	                            <td class="CScentrar">'.$totalReportes.'</td>
	                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>';
	}

	function printReportesGeneral(){
		print '
			<div class="panel-heading">
            	<h3 class="panel-title">Reportes</h3>
            </div>
            <div class="panel-body">
	            <table class="table table-hover">
	            	<thead>
	              		<tr>
	                		<th>#</th>
	                        <th>Reporte</th>
	                        <th>Descripción</th>
	                        
	                        <th>Estatus</th>
	                        <th>Asignación</th>';
	                        if($_SESSION["usuario"]->tipo == "admin"){
	                        	print '<th>Acciones</th>';
	                        }

	                    print '</tr>
	            	</thead>
	                <tbody>';
                        $reportes = getReportes();
                        foreach ($reportes as $reporte){
                            print '<tr id="reporteInfo" class="'; 
                            print getColorEstado($reporte->estadoReporte); 
                            print '">
                                <td style="vertical-align:middle; width:40px">'.$reporte->id.'</td>
                                <td style="vertical-align:middle; width:15%">'.$reporte->titulo.'</td>
                                <td style="vertical-align:middle; width:35%">'.$reporte->descripcion.'</td>
                                <td id="Estatus'.$reporte->id.'" style="vertical-align:middle;">'.$reporte->estadoReporte.'</td>
                                <td id="Departamento'.$reporte->id.'" style="vertical-align:middle;">'.$reporte->departamento.'</td>';
                                if($_SESSION["usuario"]->tipo == "admin"){
                                	print '<td class="CScentrar" style="vertical-align:middle; width:75px">
							                <button type="button" class="btn btn-md btn-default" id="tooltip" reporte="'.$reporte->id.'" rel="tooltip" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>
							                <button type="button" class="btn btn-md btn-default" id="tooltipGuardar" guardar="'.$reporte->id.'" rel="tooltipGuardar" title="Guardar"><span class="glyphicon glyphicon-floppy-disk"></span></button>
							            </td>';
                                }
                            print '</tr>';
                        }
	                print '
	                </tbody>
	            </table>
            </div>
		';
	}
?>
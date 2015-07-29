@extends('base_templates.BaseTemplate')

@section('content')
	<div id="page-wrapper">
		<div class="row">
	     	<div class="col-lg-12">
	         	<h1 class="page-header">Visitas de invitados</h1>
		 	</div>
		</div>
		<div class="row">
       		<div class="col-lg-12">
           		<div class="panel panel-default">
               		<div class="panel-heading">
	                    <div class="row">
		                    <div class="col-md-2">
		                    	<p>&nbsp;</p>
	                			<button id="modal-410139" href="#modal-container-410139" role="button" type="button" class="btn btn-outline btn-primary" data-toggle="modal">Agregar visita</button>
									<div class="modal fade" id="modal-container-410139" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h4 class="modal-title" id="myModalLabel">Asistente para agregar/editar visita</h4>
												</div>
												<div class="modal-body">
												<form role="form">
								                    <div class="form-group">
								                        <label for="name">Nombre:</label>
								                        <input type="text" class="form-control" id="name" placeholder="Nombre">
								                    </div>
								                    <div class="form-group">
								                        <label for="apellido">Apellido paterno:</label>
								                        <input type="text" class="form-control" id="apellido" placeholder="Apellido paterno">
								                    </div>
								                    <div class="form-group">
								                        <label for="costo">Costo por clase o visita:</label>
								                        <input type="text" class="form-control" id="costo" placeholder="Costo">
								                    </div>
								                    <div class="form-group">
								                        <label for="formpay">Forma de pago:</label>
								                        <select id="formpay" class="form-control">
								                            <option value="1">Efectivo</option>
								                            <option value="1">Tarjeta</option>
								                            <option value="1">Cheque</option>
								                        </select>
								                    </div>
								                    <div class="form-group">
								                        <label for="referenciapago">Referencia de pago (opcional):</label>
								                        <input type="text" class="form-control" id="costo" placeholder="Referencia de pago">
								                    </div>
								                </form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
													<button type="button" class="btn btn-primary">Guardar</button>
												</div>
											</div>
											
										</div>
										
									</div>
	                		</div>
							<div class="col-md-2">
								<p>Fecha inicial</p>
	                			<input type="date" class="form-control" id="date_init">
	                		</div>
	                		<p>Fecha final</p>
	                		<div class="col-md-2">
	                			<input type="date" class="form-control" id="date_final">
	                		</div>
	                		<p></p>
	                		<div class="col-md-2">
	                			<button type="button" class="btn btn-outline btn-primary">Mostrar</button>
	                		</div>
	                    </div>
                   	</div>
                        <!-- /.panel-heading -->
	      		 	<div class="panel-body">
	                  	<div class="dataTable_wrapper">
	                       	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                      		<thead>
	                      			<tr>
		                                <th>Nombre</th>
		                                <th>Apellido Paterno</th>
		                                <th>Costo</th>
		                                <th>Forma de pago</th>
		                                <th>Comentarios</th>
		                                <th>Fecha/Hora</th>
		                                <th>Agregado por</th>
		                                <th><font color ='white'>....</font> </th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Carlos</td>
		                                <td>Garcia</td>
		                                <td class="center">$50</td>
		                                <td class="center">Tarjeta</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td class="center">Luis</td>
		                               <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeX">
		                                <td>Ricardo</td>
		                                <td>Ortiz</td>
		                                <td class="center">$50</td>
		                                <td class="center">Efectivo</td>
		                                <td class="center">Ninguno</td>
		                                <td class="center">29/07/2015 04:17</td>
		                                <td class="center">Marijo</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_visitor" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                       	</tbody>
	                      	</table>
	                 	</div>
	               	</div>
	         	</div>
	    	</div>
		</div>
	</div>
@endsection

@section('scripts')
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
	    $(document).ready(function() {
	        $('#dataTables-example').DataTable({
	                responsive: true
	        });

	        $('#delete_visitor').on('click', function() {
	            if (!confirm('Desea borrar el registro?')) {
	                return false;
	            }
        	});
	    });
    </script>
@endsection
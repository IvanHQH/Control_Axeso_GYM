@extends('base_templates.BaseTemplate')

@section('content')
	<div id="page-wrapper">
		<div class="row">
	     	<div class="col-lg-12">
	         	<h1 class="page-header">Ingresos</h1>
		 	</div>
		</div>
		<div class="row">
       		<div class="col-lg-12">
           		<div class="panel panel-default">
               		<div class="panel-heading">
	                    <div class="row">
		                    <div class="col-md-2">
		                    	<p>&nbsp;</p>
	                			<button id="modal-410139" href="#modal-container-410139" role="button" type="button" class="btn btn-outline btn-primary" data-toggle="modal">Agregar Ingreso</button>
									<div class="modal fade" id="modal-container-410139" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h4 class="modal-title" id="myModalLabel">Asistente para agregar/editar ingreso</h4>
												</div>
												<div class="modal-body">
												<form role="form">
								                    <div class="form-group">
								                        <label for="description">Descripción del ingreso:</label>
								                        <input type="text" class="form-control" id="name" placeholder="descripción del ingreso">
								                    </div>
								                    <div class="form-group">
								                        <label for="cantidad">Cantidad</label>
								                        <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
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
		                                <th>Descripción del ingreso</th>
		                                <th>Cantidad</th>
		                                <th>Empleado</th>
		                                <th>Fecha/Hora</th>
		                                <th><font color ='white'>....</font> </th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr class="odd gradeX">
		                                <td>Dinero en monedas para cambio</td>
		                                <td>$50</td>
		                                <td class="center">Marijo</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="even gradeC">
		                                <td>Para comprar utensilios</td>
		                                <td>$100</td>
		                                <td class="center">Marijo</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeA">
		                                <td>Dinero en monedas para cambio</td>
		                                <td>$200</td>
		                                <td class="center">Luis</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="even gradeA">
		                                <td>Para comprar utensilios</td>
		                                <td>$150</td>
		                                <td class="center">Luis</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="odd gradeA">
		                                <td>Dinero en monedas para cambio</td>
		                                <td>$123</td>
		                                <td class="center">Marijo</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="even gradeA">
		                                <td>Para comprar utensilios</td>
		                                <td>$30</td>
		                                <td class="center">Luis</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="gradeA">
		                                <<td>Dinero en monedas para cambio</td>
		                                <td>$35</td>
		                                <td class="center">Marijo</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="gradeA">
		                                <td>Para comprar utensilios</td>
		                                <td>$54</td>
		                                <td class="center">Marijo</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
		                            <tr class="gradeA">
		                                <td>Para comprar utensilios</td>
		                                <td>$90</td>
		                                <td class="center">Marijo</td>
		                                <td class="center">28‎/07/2015 04:17</td>
		                                <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
		                            </tr>
									<tr class="gradeC">
									    <td>Dinero en monedas para cambio</td>
									    <td>$100</td>
									    <td class="center">Luis</td>
									    <td class="center">28‎/07/2015 04:17</td>
									    <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<tr class="gradeA">
									    <td>Para comprar utensilios</td>
									    <td>$70</td>
									    <td class="center">Marijo</td>
									    <td class="center">28‎/07/2015 04:17</td>
									    <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<tr class="gradeA">
									    <td>Para comprar utensilios</td>
									    <td>$80</td>
									    <td class="center">Luis</td>
									    <td class="center">28‎/07/2015 04:17</td>
									    <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<tr class="gradeX">
									   <td>Dinero en monedas para cambio</td>
									    <td>$45</td>
									    <td class="center">Marijo</td>
									    <td class="center">28‎/07/2015 04:17</td>
									    <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<tr class="gradeC">
									    <td>Para comprar utensilios</td>
									    <td>$12</td>
									    <td class="center">Marijo</td>
									    <td class="center">28‎/07/2015 04:17</td>
									    <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
									</tr>
									<tr class="gradeC">
									    <td>Dinero en monedas para cambio</td>
									    <td>$34</td>
									    <td class="center">Marijo</td>
									    <td class="center">28‎/07/2015 04:17</td>
									    <td style="text-align: center; vertical-align: middle; "><a id="modal-410139" href="#modal-container-410139" role="button" class="edit ml10" href="javascript:void(0)" title="Edit" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a> <a id="delete_income" class="remove ml10" href="javascript:void(0)" title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td>
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
	        $('#delete_income').on('click', function() {
	            if (!confirm('Desea borrar el registro?')) {
	                return false;
	            }
        	});
	    });
    </script>
@endsection
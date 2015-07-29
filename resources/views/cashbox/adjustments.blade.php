@extends('base_templates.BaseTemplate')

@section('content')
	<div id="page-wrapper">
		<div class="row">
	     	<div class="col-lg-12">
	         	<h1 class="page-header">Ajustes de caja</h1>
		 	</div>
		</div>
		<div class="row">
       		<div class="col-lg-12">
           		<div class="panel panel-default">
               		<div class="panel-heading">
	                    <div class="row">
		                    <div class="col-md-2">
	                			<button type="button" class="btn btn-outline btn-primary">Agregar Ingreso</button>
	                		</div>
							<div class="col-md-2">
	                			<input type="date" class="form-control" id="date_init">
	                		</div>
	                		<div class="col-md-2">
	                			<input type="date" class="form-control" id="date_final">
	                		</div>
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
		                                <th>Rendering engine</th>
		                                <th>Browser</th>
		                                <th>Platform(s)</th>
		                                <th>Engine version</th>
		                                <th>CSS grade</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr class="odd gradeX">
		                                <td>Trident</td>
		                                <td>Internet Explorer 4.0</td>
		                                <td>Win 95+</td>
		                                <td class="center">4</td>
		                                <td class="center">X</td>
		                            </tr>
		                            <tr class="even gradeC">
		                                <td>Trident</td>
		                                <td>Internet Explorer 5.0</td>
		                                <td>Win 95+</td>
		                                <td class="center">5</td>
		                                <td class="center">C</td>
		                            </tr>
		                            <tr class="odd gradeA">
		                                <td>Trident</td>
		                                <td>Internet Explorer 5.5</td>
		                                <td>Win 95+</td>
		                                <td class="center">5.5</td>
		                                <td class="center">A</td>
		                            </tr>
		                            <tr class="even gradeA">
		                                <td>Trident</td>
		                                <td>Internet Explorer 6</td>
		                                <td>Win 98+</td>
		                                <td class="center">6</td>
		                                <td class="center">A</td>
		                            </tr>
		                            <tr class="odd gradeA">
		                                <td>Trident</td>
		                                <td>Internet Explorer 7</td>
		                                <td>Win XP SP2+</td>
		                                <td class="center">7</td>
		                                <td class="center">A</td>
		                            </tr>
		                            <tr class="even gradeA">
		                                <td>Trident</td>
		                                <td>AOL browser (AOL desktop)</td>
		                                <td>Win XP</td>
		                                <td class="center">6</td>
		                                <td class="center">A</td>
		                            </tr>
		                            <tr class="gradeA">
		                                <td>Gecko</td>
		                                <td>Firefox 1.0</td>
		                                <td>Win 98+ / OSX.2+</td>
		                                <td class="center">1.7</td>
		                                <td class="center">A</td>
		                            </tr>
		                            <tr class="gradeA">
		                                <td>Gecko</td>
		                                <td>Firefox 1.5</td>
		                                <td>Win 98+ / OSX.2+</td>
		                                <td class="center">1.8</td>
		                                <td class="center">A</td>
		                            </tr>
		                            <tr class="gradeA">
		                                <td>Gecko</td>
		                                <td>Firefox 2.0</td>
		                                <td>Win 98+ / OSX.2+</td>
		                                <td class="center">1.8</td>
		                                <td class="center">A</td>
		                            </tr>
		                             <tr class="gradeC">
		                                    <td>KHTML</td>
		                                    <td>Konqureror 3.1</td>
		                                    <td>KDE 3.1</td>
		                                    <td class="center">3.1</td>
		                                    <td class="center">C</td>
		                                </tr>
		                                <tr class="gradeA">
		                                    <td>KHTML</td>
		                                    <td>Konqureror 3.3</td>
		                                    <td>KDE 3.3</td>
		                                    <td class="center">3.3</td>
		                                    <td class="center">A</td>
		                                </tr>
		                                <tr class="gradeA">
		                                    <td>KHTML</td>
		                                    <td>Konqureror 3.5</td>
		                                    <td>KDE 3.5</td>
		                                    <td class="center">3.5</td>
		                                    <td class="center">A</td>
		                                </tr>
		                                <tr class="gradeX">
		                                    <td>Tasman</td>
		                                    <td>Internet Explorer 4.5</td>
		                                    <td>Mac OS 8-9</td>
		                                    <td class="center">-</td>
		                                    <td class="center">X</td>
		                                </tr>
		                                <tr class="gradeC">
		                                    <td>Tasman</td>
		                                    <td>Internet Explorer 5.1</td>
		                                    <td>Mac OS 7.6-9</td>
		                                    <td class="center">1</td>
		                                    <td class="center">C</td>
		                                </tr>
		                                <tr class="gradeC">
		                                    <td>Tasman</td>
		                                    <td>Internet Explorer 5.2</td>
		                                    <td>Mac OS 8-X</td>
		                                    <td class="center">1</td>
		                                    <td class="center">C</td>
		                                </tr>
		                                <tr class="gradeA">
		                                    <td>Misc</td>
		                                    <td>NetFront 3.1</td>
		                                    <td>Embedded devices</td>
		                                    <td class="center">-</td>
		                                    <td class="center">C</td>
		                                </tr>
		                                <tr class="gradeA">
		                                    <td>Misc</td>
		                                    <td>NetFront 3.4</td>
		                                    <td>Embedded devices</td>
		                                    <td class="center">-</td>
		                                    <td class="center">A</td>
		                                </tr>
		                                <tr class="gradeX">
		                                    <td>Misc</td>
		                                    <td>Dillo 0.8</td>
		                                    <td>Embedded devices</td>
		                                    <td class="center">-</td>
		                                    <td class="center">X</td>
		                                </tr>
		                                <tr class="gradeX">
		                                    <td>Misc</td>
		                                    <td>Links</td>
		                                    <td>Text only</td>
		                                    <td class="center">-</td>
		                                    <td class="center">X</td>
		                                </tr>
		                                <tr class="gradeX">
		                                    <td>Misc</td>
		                                    <td>Lynx</td>
		                                    <td>Text only</td>
		                                    <td class="center">-</td>
		                                    <td class="center">X</td>
		                                </tr>
		                                <tr class="gradeC">
		                                    <td>Misc</td>
		                                    <td>IE Mobile</td>
		                                    <td>Windows Mobile 6</td>
		                                    <td class="center">-</td>
		                                    <td class="center">C</td>
		                                </tr>
		                                <tr class="gradeC">
		                                    <td>Misc</td>
		                                    <td>PSP browser</td>
		                                    <td>PSP</td>
		                                    <td class="center">-</td>
		                                    <td class="center">C</td>
		                                </tr>
		                                <tr class="gradeU">
		                                    <td>Other browsers</td>
		                                    <td>All others</td>
		                                    <td>-</td>
		                                    <td class="center">-</td>
		                                    <td class="center">U</td>
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
	    });
    </script>
@endsection
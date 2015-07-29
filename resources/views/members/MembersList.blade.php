@extends ('base_templates.BaseTemplate')

@section ('content')    
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Socios</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- row-content -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <!-- panel-body -->
            <div class="panel-body">
                <!-- datatable-wrapper -->
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper 
                         form-inline dt-bootstrap no-footer">
                        <!-- show-entries -->
                        <div class="row">
                            <div class="col-sm-4">                            
                                <button id="modal-933323"  type="button" class="btn btn-outline btn-primary" 
                                        href="#modal-member" data-toggle="modal">
                                    Agregar
                                </button>    
                            </div>
                            <div class="col-sm-4">
                            <div class="dataTables_length" id="dataTables-example_length">
                                <label>Mostrar 
                                    <select name="dataTables-example_length" 
                                    aria-controls="dataTables-example" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> filas
                                </label>
                            </div>
                            </div>
                            <div class="col-sm-4">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <label>Buscar:
                                        <input type="search" class="form-control input-sm" 
                                            placeholder="" aria-controls="dataTables-example">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.show-entries -->
                        <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered 
                                table-hover dataTable no-footer" id="dataTables-example"
                                role="grid" aria-describedby="dataTables-example_info">
                        <thead>
                            <!-- headers-columns -->
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" 
                                aria-controls="dataTables-example" rowspan="1" colspan="1" 
                                aria-sort="ascending" 
                                aria-label="Rendering engine: activate to sort column descending" 
                                style="width: 172px;">Nombre
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" 
                                style="width: 204px;">Apellido Paterno
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" 
                                style="width: 185px;">Apellido Materno
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" 
                                colspan="1" aria-label="Engine version: activate to sort column ascending" 
                                style="width: 149px;">Apodo
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;">Dirección
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;">Colonia
                                </th>          
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;">Ciudad
                                </th>      
                                <!--th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 50px;">CP
                                </th-->          
                                </th><th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 80px;">Tel. Casa
                                </th>        
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;">Tel. Movil
                                </th>         
                                <!--th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;">Sexo
                                </th-->     
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;">Fecha de nacimiento
                                </th>       
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" 
                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                style="width: 110px;"><font color ='white'>...........</font>  
                                </th>                                 
                            </tr>
                            <!-- /.headers-columns -->
                        </thead>
                        <tbody>
                        @for($i = 0; $i < 6 ;$i++) 
                            @if($i%2==0)
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">José</td>
                                <td>Sanchéz</td>
                                <td>Pérez</td>
                                <td class="center">Pepe</td>
                                <td>Calle A #152</td>
                                <td>Lomas</td>
                                <td>San Luis Potosí</td>
                                <!--td class="center">78049</td-->
                                <td class="center">8111111</td>
                                <td class="center">41788404</td>
                                <!--td class="center">H</td-->
                                <td class="center">29/May/85</td>
                                <td style="text-align: center; vertical-align: middle; ">
                                    <a id ="edit_member" class="edit ml10" href="javascript:void(0)" title="Editar">
                                        <i class="glyphicon glyphicon-edit">                                    
                                        </i>
                                    </a>
                                    <a id ="delete_member" class="remove ml10" href="javascript:void(0)" title="Eliminar">
                                        <i class="glyphicon glyphicon-remove">                                    
                                        </i>
                                    </a>
                                    <a id = "add_pay" class="like" href="javascript:void(0)" title="Pago">
                                        <i class="glyphicon glyphicon-usd">                                    
                                        </i>
                                    </a>   
                                    @if($i == 0)
                                    <a id="add_membership" class="like" href="javascript:void(0)" title="Agregar Membresia">
                                        <i class="glyphicon glyphicon-credit-card">                                    
                                        </i>
                                    </a>         
                                    @endif
                                </td>                                
                            </tr>  
                            @else
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">Antonio</td>
                                <td>López</td>
                                <td>Rodríguez</td>
                                <td class="center">Toño</td>
                                <td>Calle B #325</td>
                                <td>Villa Magna</td>
                                <td>San Luis Potosí</td>
                                <!--td class="center">78045</td-->
                                <td class="center">8121212</td>
                                <td class="center">41788404</td>
                                <!--td class="center">H</td-->
                                <td class="center">01/Mar/80</td>
                                <td style="text-align: center; vertical-align: middle; ">
                                    <a id ="edit_member" class="edit ml10" href="javascript:void(0)" title="Editar">
                                        <i class="glyphicon glyphicon-edit">                                    
                                        </i>
                                    </a>
                                    <a id="delete_member" class="remove ml10" href="javascript:void(0)" title="Eliminar">
                                        <i class="glyphicon glyphicon-remove">                                    
                                        </i>
                                    </a>
                                    <a id = "add_pay" class="like" href="javascript:void(0)" title="Pago">
                                        <i class="glyphicon glyphicon-usd">                                    
                                        </i>
                                    </a>                                  
                                </td>                                   
                            </tr> 
                            @endif
                        @endfor    
                        </tbody>
                    </table></div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>                                    
                        </div>
                        <div class="col-sm-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            <ul class="pagination">
                            <li class="paginate_button previous disabled" aria-controls="dataTables-example" 
                                tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                            <li class="paginate_button active" aria-controls="dataTables-example" 
                                tabindex="0"><a href="#">1</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" 
                                tabindex="0"><a href="#">2</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" 
                                tabindex="0"><a href="#">3</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" 
                                tabindex="0"><a href="#">4</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" 
                                tabindex="0"><a href="#">5</a></li>
                            <li class="paginate_button " aria-controls="dataTables-example" 
                                tabindex="0"><a href="#">6</a></li>
                            <li class="paginate_button next" aria-controls="dataTables-example" 
                                tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
                            </ul>
                            </div>
                        </div>
                        </div></div>
                </div>
                <!-- /.datatable-wrapper -->
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
    </div-->        
</div>
<!-- /.row-content -->        
</div>
<div class="modal fade" id="modal-member" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                       
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                        Agregar socio
                </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable" id="tabs-102605">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#panel-919134" data-toggle="tab">Datos personales</a>
                                    </li>
                                    <li >
                                        <a href="#panel-913591" data-toggle="tab">Contacto</a>
                                    </li>
                                    <li >
                                        <a href="#panel-913592" data-toggle="tab">Campos personalizado</a>
                                    </li>                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="panel-919134">  
                                        <br> 
                                        <div class="row">
                                            <div class="col-md-4"> 
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input class="form-control">
                                                </div>       
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Le gusta ser llamado</label>
                                                    <input class="form-control">
                                                </div>                                    
                                            </div>
                                            <div class="col-md-4">    
                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                    <select class="form-control">
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>
                                                    </select>
                                                </div>                                    
                                                <div class="form-group">
                                                    <label>Fecha de nacimiento</label>
                                                    <input type="date" class="form-control">                                      
                                                </div>       
                                                <div class="form-group">
                                                    <label>Socio desde</label>
                                                    <input type="date" class="form-control">       
                                                </div>                
                                            </div>   
                                            <div class="col-md-4">                  
                                            </div>                                  
                                        </div>                                               
                                    </div>
                                    <div class="tab-pane" id="panel-913591"> 
                                        <br>        
                                        <div class="row">
                                            <div class="col-md-4">   
                                                <div class="form-group">
                                                    <label>Domicilio ( calle y número )</label>
                                                    <input class="form-control">
                                                </div>        
                                                <div class="form-group">
                                                    <label>Colonia</label>
                                                    <input class="form-control">
                                                </div>  
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <select class="form-control">
                                                        <option>San Luis Potosí</option>
                                                        <option>Queretaro</option>
                                                    </select>
                                                </div>                                    
                                                <div class="form-group">
                                                    <label>Ciudad</label>
                                                    <input class="form-control">
                                                </div>                                  
                                            </div>  
                                            <div class="col-md-4">      
                                                <div class="form-group">
                                                    <label>Código postal</label>
                                                    <input class="form-control">
                                                </div>        
                                                <div class="form-group">
                                                    <label>Telèfono casa</label>
                                                    <input class="form-control">
                                                </div>  
                                                <div class="form-group">
                                                    <label>Teléfono móvil</label>
                                                    <input class="form-control">
                                                </div>  
                                                <div class="form-group">
                                                    <label>Correo electronico</label>
                                                    <input class="form-control">
                                                </div>                                 
                                            </div>  
                                            <div class="col-md-4">       
                                                <div class="form-group">
                                                    <label>Empresa</label>
                                                    <input class="form-control">
                                                </div>  
                                                <div class="form-group">
                                                    <label>Ocupación</label>
                                                    <select class="form-control">
                                                        <option>Profesionista</option>
                                                        <option>Empresario(a)</option>                                        
                                                        <option>Estudiante</option>
                                                        <option>Empleado(a)</option>
                                                        <option>Ama de casa</option>
                                                    </select>
                                                </div>                                  
                                            </div>                              
                                        </div>    
                                    </div>     
                                    <div class="tab-pane"  id="panel-913592">
                                        <br>            
                                        <div class="form-group">
                                            <label>Campo 1</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Campo 2</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div> 
                                    </div>                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cerrar
                    </button> 
                    <button type="button" class="btn btn-primary">
                            Guardar
                    </button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-pay" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                       
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                        Asistente de pagos
                </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="/img/user.jpg" class="img-thumbnail" 
                                         alt="Cinque Terre" width="80" height="80">                
                                </div>
                                <div class="col-md-10">   
                                        <h4>Juan Pérez Sanchez</h4>         
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>#</th>
                                                <th>Descripción del producto</th>
                                                <th>Precio</th>
                                                <th>Pagado</th>
                                                <th>Nuevo Pago</th>
                                                <th>Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>28/Jul/2015</td>
                                                <td>1</td>
                                                <td>Membresía de Estudiante</td>
                                                <td>$900</td>
                                                <td>$700</td>
                                                <td>$0</td>     
                                                <td>$200</td>                            
                                            </tr
                                        </tbody>
                                        </table>
                                    </div>            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h4>Nuevo pago</h4>
                                                <textarea class="form-control" 
                                                          rows="3"></textarea>
                                            </div>                  
                                            <div class="form-group">
                                                <label>Forma de Pago</label>
                                                <select class="form-control">
                                                    <option>Tarjeta</option>
                                                    <option>Depósito</option>
                                                    <option>Transferencia</option>
                                                    <option>Efectivo</option>
                                                </select>
                                            </div>                    
                                        </div>
                                        <div class="col-md-8">
                                            <table class="table table-bordered 
                                                   table-hover table-striped">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Balance a pagar es de:</td>
                                                    <td>$200.00</td>
                                                </tr>                                        
                                                <tr>
                                                    <td>Saldo a favor pago anteriores:</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Nuevo Pago:</td>
                                                    <td>$0.00</td>
                                                </tr>           
                                                <tr>     
                                                </tr>                               
                                            </tbody>
                                            </table>  
                                            <div class="alert alert-info">
                                                      El nuevo balance será de:$200.00
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cerrar
                </button> 
                <button type="button" class="btn btn-primary">
                        Guardar
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-membership" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                       
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                        Agregar membresía
                </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label>Tipo de membresía</label>
                                    <select class="form-control">
                                        <option>Mensualidad Estudiante</option>
                                        <option>Empresarial</option>
                                        <option>Empresarial Junio/option>
                                        <option>Mensualidad General</option>
                                        <option>4to Miembro precio anterior</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Forma de Pago</label>
                                    <select class="form-control">
                                        <option>Tarjeta</option>
                                        <option>Depósito</option>
                                        <option>Transferencia</option>
                                        <option>Efectivo</option>
                                    </select>
                                </div>                                 
                                <div class="form-group">
                                    <label>Nuevo pago</label>
                                    <input class="form-control">
                                </div>      
                            </div> 
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cerrar
                    </button> 
                    <button type="button" class="btn btn-primary">
                            Guardar
                    </button>
                </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script>
    $(document).ready(function() {
        
        $('#edit_member').on('click', function(e) {
            //alert('ok');
            $('#modal-member').modal();
        });        
        
        $('#delete_member').on('click', function(e) {
            if (!confirm('¿Desea borrar el socio?'))
                    return false;
        });          
        
        $('#add_pay').on('click', function(e) {
            //alert("ok");
            $('#modal-add-pay').modal();
        });        
        
        $('#add_membership').on('click', function(e) {
            //alert("ok");
            $('#modal-add-membership').modal();
        });           
    });
</script>
@stop

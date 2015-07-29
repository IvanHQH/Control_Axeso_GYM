@extends ('BaseLayout')

@section ('content')    
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Agregar socio</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- row-content -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable" id="tabs-102605">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-919134" data-toggle="tab">Sección 1</a>
                    </li>
                    <li >
                        <a href="#panel-913591" data-toggle="tab">Sección 2</a>
                    </li>
                    <li >
                        <a href="#panel-913592" data-toggle="tab">Sección 3</a>
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
                        <div class="form-group">
                            <button type="button" class="btn btn-outline btn-primary" id="btn-show-excess">
                                Guardar
                            </button>                             
                        </div>  
                    </div>                     
                </div>
            </div>
        </div>
    </div>
</div>
</div>        
</div>
</div>
</div>
@stop

@section('scripts')
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!--script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script-->
@stop




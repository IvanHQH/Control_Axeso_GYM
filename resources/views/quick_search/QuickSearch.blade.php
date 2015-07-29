@extends ('base_templates.BaseTemplate')

@section ('content')    
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Busqueda rápida de socios</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <!-- row-content -->
    <div class="col-lg-12">
        <!-- row-quick-search -->
        <div class="row">
            <div class="col-lg-12">      
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Nombre ó ID">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    </span>  
                </div>
            </div>                    
        </div>
        <!-- /.row-quick-search -->
        <br>            
        <!-- row-first-lavel -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4" >                                    
                                <img src="/img/user.jpg" class="img-thumbnail" 
                                     alt="Cinque Terre" width="170" height="170">                                                                        
                            </div>
                            <div class="col-lg-8">
                                <div class="well">
                                    <h4>!Bienvenido Juan Pérez!</h4>
                                    <p>¡Hoy parece ser tu primer visita!</p>
                                    <p>Hay un saldo pendiente de $200</p>
                                    <p>Tu ultima membresía activa vence 20/Ago/2015</p>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- latest-assists -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Ultimas Asistencias
                            </div>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lunes</td>
                                        <td>25</td>
                                        <td>Julio</td>
                                        <td>2015</td>
                                        <td>07:32</td>
                                    </tr>                                        
                                    <tr>
                                        <td>Martes</td>
                                        <td>26</td>                                        
                                        <td>Julio</td>
                                        <td>2015</td>
                                        <td>07:40</td>
                                    </tr>   
                                    <tr>
                                        <td>Miércoles</td>
                                        <td>27</td>
                                        <td>Julio</td>
                                        <td>2015</td>
                                        <td>07:35</td>
                                    </tr>                                       
                                </tbody>
                            </table>                            
                        </div>                          
                        <!-- /.latest-assists -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row-first-lavel -->
        <!-- row-second-lavel -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- memberships -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Membresías
                            </div>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mensualidad Estudiante</td>
                                        <td>20/Jul/2015</td>
                                        <td>20/Sep/2015</td>
                                        <td>Activa</td>
                                    </tr>                                        
                                </tbody>
                            </table>
                        </div>  
                        <!-- /.memberships -->                            
                    </div>
                    <div class="col-lg-4" >
                        <!-- notes -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Casilleros
                            </div>
                            <ul class="list-group">
                              <li class="list-group-item">A12</li>
                            </ul>                            
                        </div>  
                        <!-- /.notes -->                             
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row-second-lavel -->
        <!-- row-third-lavel -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- latest-sales -->
                    <div class="col-lg-8">                            
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Últimas Ventas
                            </div>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>25/07/2015</td>     
                                        <td>08:40</td>                                         
                                        <td>Producto A</td>
                                        <td>2</td>
                                        <td>$60</td>
                                    </tr>                                        
                                    <tr>
                                        <td>25/07/2015</td>     
                                        <td>08:40</td>                                         
                                        <td>Producto A</td>
                                        <td>2</td>
                                        <td>$60</td>
                                    </tr>   
                                    <tr>
                                        <td>25/07/2015</td>     
                                        <td>08:40</td>                                         
                                        <td>Producto A</td>
                                        <td>2</td>
                                        <td>$60</td>
                                    </tr>                                       
                                </tbody>
                            </table>
                        </div>                                                       
                    </div>
                    <!-- /.latest-sales --> 
                    <!-- lockers -->
                    <div class="col-lg-4">                            
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Notas
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>                              
                    </div>
                    <!-- /.lockers --> 
                </div>
            </div>
        </div>
        <!-- row-third-lavel -->
    </div>      
    <!-- /.row-content -->
</div>
<!-- /.row -->        
</div>
@stop

@section('scripts')
@stop

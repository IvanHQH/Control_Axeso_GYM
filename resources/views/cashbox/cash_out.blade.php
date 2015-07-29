@extends('base_templates.BaseTemplate')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Corte de caja</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="sel1">Selecciona el corte de caja:</label>
                                <select class="form-control" id="sel1">
                                    <option>Cierre de caja número 1 del 23/julio/2015 a 24/julio/2015 11:39 pm</option>
                                    <option>Cierre de caja número 1 del 24/julio/2015 a 25/julio/2015 12:39 pm</option>
                                    <option>Cierre de caja número 1 del 25/julio/2015 a 26/julio/2015 13:39 pm</option>
                                    <option>Cierre de caja número 1 del 26/julio/2015 a 27/julio/2015 14:39 pm</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="sel1">(Corte de caja)</label>
                                <button type="button" class="btn btn-outline btn-primary">Cerrar caja</button>
                            </div> <div class="col-md-2">
                                <label for="sel1">(Gasto)</label>
                                <button id="modal-410139" href="#modal-container-410139" role="button" type="button" class="btn btn-outline btn-primary" data-toggle="modal">Agregar gasto</button>
                                    <div class="modal fade" id="modal-container-410139" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel">Asistente para agregar nuevo egreso</h4>
                                                </div>
                                                <div class="modal-body">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="description">Descripción del egreso:</label>
                                                        <input type="text" class="form-control" id="name" placeholder="descripción del egreso">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cantidad">Cantidad:</label>
                                                        <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date">Fecha:</label>
                                                        <input type="date" class="form-control" id="date">
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
                                <label for="sel1">(Ingreso)</label>
                                <button id="modal-410139" href="#modal-container-41013" role="button" type="button" class="btn btn-outline btn-primary" data-toggle="modal">Agregar Ingreso</button>
                                    <div class="modal fade" id="modal-container-41013" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel">Asistente para agregar nuevo ingreso</h4>
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
                                <label for="sel1">(Exportar)</label>
                                <button type="button" class="btn btn-outline btn-primary">Exportar a excel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <label for="sel1">Información general del corte de caja</label>
                    </div>
                    <div class="panel-body">
                        <label for="sel1">Responsable de caja:</label><p>ADMINISTRADOR</p>
                        <label for="sel1">Fecha de apertura:</label><p>23/julio/2015</p>
                        <label for="sel1">Cerrado por:</label><p>ADMINISTRADOR</p>
                        <label for="sel1">Fecha de cierre:</label><p>27/julio/2015</p>
                        <label for="sel1">Hora de cierre:</label><p>11:39:50 pm</p>
                        <label for="sel1">Dinero retirado:</label><p>$50.00</p>
                        <label for="sel1">Se dejó en caja:</label><p>$0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label for="sel1">Información detallada del cierre de caja</label>
                    </div>
                    <div class="panel-body">
                       <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Descripción</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Apertura de caja</td>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>Venta de membresías</td>
                                        <td>$0.00</td>
                                    </tr>
                                     <tr class="odd gradeX">
                                        <td>Venta de casilleros</td>
                                        <td>$0.00</td>
                                    </tr>
                                     <tr class="odd gradeX">
                                        <td>Venta de productos</td>
                                        <td>$0.00</td>
                                    </tr>
                                     <tr class="odd gradeX">
                                        <td>Venta de visitas (Pago de invitados)</td>
                                        <td>$0.00</td>
                                    </tr>
                                     <tr class="odd gradeX">
                                        <td>Suma total de ventas</td>
                                        <td>$0.00</td>
                                    </tr>
                                     <tr class="odd gradeX">
                                        <td>Adeudos y créditos</td>
                                        <td>$0.00</td>
                                    </tr>
                                     <tr class="odd gradeX">
                                        <td>Suma total de dinero recibido</td>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>Suma de ajustes de caja (Ingresos)</td>
                                        <td>$200.00</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>Suma de gastos de caja (Egresos)</td>
                                        <td>$150.00</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                         <h3 style="margin-left:420px;" for="sel1">DINERO EN CAJA...................... $50</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
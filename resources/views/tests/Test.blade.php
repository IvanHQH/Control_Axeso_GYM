@extends ('base_templates.BaseTemplateTest')

@section ('content')    
<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Test</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- row-content -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- panel-body -->
            <div class="panel-body">
                
<div class="container-fluid">
    <div class="form-group">
        <label>Membresia</label>
        <select class="form-control">
            <option>Mensualidad Estudiante</option>
            <option>Empresarial</option>
            <option>Empresarial Junio/option>
            <option>Mensualidad General</option>
            <option>4to Miembro precio anterior</option>
        </select>
    </div>
    <div class="form-group">
        <h4>Nuevo pago</h4>
        <textarea class="form-control" 
                  rows="3"></textarea>
    </div>      
</div>                
                
            </div>
        <!-- /.panel-body -->
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




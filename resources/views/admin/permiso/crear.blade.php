@extends("admin.theme.$theme.layout")
{{-- Le ponemos un titulo a la sección --}}
@section('titulo')
    Crear Permisos
@endsection
{{-- Ponemos el contenido dinamicamente desde el layout.blade.php en theme/lte --}}
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Permisos</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                Aqui el formulario a crear
            </div>
        </div>
    </div>
</div>
@endsection
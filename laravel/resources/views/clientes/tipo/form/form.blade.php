<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Tipo Cliente</label>
    <div class="col-sm-10">
        {!!Form::text('tipoCliente',null,['class'=>'form-control', 'placeholder'=>'Ingresa Sucursal'])!!}
    </div>
</div>

<div class="form-group">
    <label for="estatus" class="col-sm-2 control-label">Estatus</label>
    <div class="col-sm-10">
        {!! Form::select('estatus', ['Estatus'=>'Estatus','1'=>'Activo','0'=> 'Inactivo'], null, ['class' => 'form-control select2']) !!}
    </div>
</div>